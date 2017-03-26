<?php 
/**
* 
*/
class Session_controller extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
    	$this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->library('session');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
        $this->load->model('aupair_model');
        $this->load->model('document_model');
        $this->load->model('task_model');
        $this->load->model('update_model');
	}

	function log_in(){
		if($this->aauth->is_loggedin()){
			redirect('index/home');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->input->post('remember') == 'TRUE'){
				$remember = TRUE;
			}else{
				$remember = FALSE;
			}

			if($this->aauth->login($email, $password, $remember)){
				redirect('index/home');
			}else{
				$this->load->view('session/login');
			}

		}else{
			$this->load->view('session/login');
		}		
	}

	function forget_password(){
		if($this->aauth->is_loggedin()){
			redirect('index/home');
		}
		if($this->input->post()){
			$email = $this->input->post('email');

			$this->aauth->remind_password($email);
			$this->aauth->info('The Account Verification mail will be sent to your email address.');

			$this->load->view('session/forget_password');
		}else{
			$this->load->view('session/forget_password');
		}		
	}

	function reset_password(){
		if($this->aauth->is_loggedin()){
			redirect('index/home');
		}
		if($this->input->post()){
			$user_id = $this->input->post('user_id');
			$ver_code = $this->input->post('verification_code');

			if($this->aauth->reset_password($user_id, $ver_code)){
				$this->aauth->info('A new password will be sent to your email address.');
			}else{
				$this->aauth->error('E-mail Address and Verification Code do not match.');
			}
			$this->load->view('session/reset_password');
		}else{
			$this->load->view('session/reset_password');
		}
	}

	function update()
	{
		if(!$this->aauth->is_loggedin()){
			redirect('session/log_in');
		}
		if($this->input->post()){
			$user = $this->aauth->get_user();
			$user_id = $user->id;
			if(!empty($this->input->post('email'))){
				$email = $this->input->post('email');
			}else{
				$email = FALSE;
			}
			if(!empty($this->input->post('password'))){
				$password = $this->input->post('password');
			}else{
				$password = FALSE;
			}
			if(!empty($this->input->post('name'))){
				$name = $this->input->post('name');
			}else{
				$name = FALSE;
			}
			if($email == FALSE AND $password == FALSE AND $name == FALSE){
				$this->load->view('session/update');
				return FALSE;
			}
			if($this->aauth->update_user($user_id, $email, $password, $name)){
				$this->aauth->info('Your account has been updated successfully.');
			}
			$this->load->view('session/update');
		}else{
			$this->load->view('session/update');
		}
	}

	function sign_up()
	{
		if($this->aauth->is_loggedin()){
			redirect('index/home');
		}
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() === TRUE){
			$email = $this->session->userdata('email');
			$password = $this->input->post('password');
			$name = $this->session->userdata('user_id');

			if($id = $this->aauth->create_user($email, $password, $name)){
				
				
				if($this->session->userdata('user_type') == 'family'){
					$this->aauth->add_member($id, 4);
					$html = $this->get_family_content($name);
					$name = md5($id);					
					$this->_gen_pdf($html, "$name.pdf");
					$parents = $this->parent_model->get_parent($this->session->userdata('user_id'));
					$task_id = $this->task_model->inser_task(
									'De familie '.$parents[0]['lastname'].' heeft document ‘Initial Registeration’ aangeleverd. Het bestand staat klaar voor goedkeuring.',
									'1. Begin met stap 1 van het stappenplan om verder te gaan.<br>2. Loop jullie profiel na om te controleren alles klopt.',
									'',
									$id,
									$parents[0]['lastname']
								);
					$update_id = $this->update_model->insert_update(
									'Nieuwe aanmelding! De familie '.$parents[0]['lastname'].' heeft zich geregistreerd.',
									'Gefeliciteerd! Jullie hebben nu toegang tot het stappenplan en jullie eigen profielpagina. Volg de stappen hiernaast om verder te gaan.',
									$id,
									$parents[0]['lastname']
								);
					$this->document_model->insert_document("$name.pdf", "Initial Registeration", $parents[0]['lastname'], $id, $task_id, $update_id);

				}elseif($this->session->userdata('user_type') == 'aupair'){

					$this->aauth->add_member($id, 5);
					$html = $this->get_aupair_content($name);
					$name = md5($id);										
					$this->_gen_pdf($html, "$name.pdf");
					$aupair = $this->aupair_model->get_aupair($this->session->userdata('user_id'));
					$task_id = $this->task_model->inser_task(
									'De au-pair '.$aupair['full_name'].' heeft document ‘Initial Registeration’ aangeleverd. Het bestand staat klaar voor goedkeuring.',
									'1. Start with step 1 from your journey to proceed.<br> 2. Check your profile to confirm all the info is correct.',
									'',
									$id,
									$aupair['full_name']
								);
					$update_id = $this->update_model->insert_update(
									'Nieuwe aanmelding! De au-pair '.$aupair['full_name'].' heeft zich geregistreerd.',
									'Congratulations! You now have access to your journey and own profile page. Follow the steps listed on the right to proceed.',
									$id,
									$aupair['full_name']
								);
					$this->document_model->insert_document("$name.pdf", "Initial Registeration", $aupair['full_name'], $id, $task_id, $update_id);
				}

				$this->session->unset_userdata('email');
				$this->session->unset_userdata('user_id');
				redirect('session_controller/log_in');

			}else{

				if($this->session->userdata('user_type') == 'family'){
					redirect("families/delete/$name");
				}
				if($this->session->userdata('user_type') == 'aupair'){
					redirect("aupairs/delete/$name");
				}

			}
		}else{
			$this->load->view('session/sign_up');
		}
	}

	function log_out(){
		if(!$this->aauth->is_loggedin()){
			redirect('session_controller/log_in');
		}
		$this->aauth->logout();
		$array_items = array('user_type', 'user_id', 'email');
		$this->session->unset_userdata($array_items);
		redirect('session_controller/log_in');
	}

	private function _gen_pdf($html, $name, $paper='A4')
    {
        $this->load->library('mpdf60/mpdf');        
        $mpdf=new mPDF('utf-8',$paper);
        $mpdf->SetHTMLHeader($html[0]);
        if ($html[2] ) {
            $mpdf->SetHTMLFooter($html[2]);
            $mpdf->AddPage('', '', '', '', '', 10, 10, 50, 50, 10, 0); 
        }else{
            $mpdf->AddPage('', '', '', '', '', 10, 10, 50, 10, 10, 0); 
        }                
        $mpdf->WriteHTML($html[1]);
        $filename= "files/$name";                   
        $mpdf->Output($filename, 'F');
    }

	private function get_family_content($id){
		$family = $this->family_model->get_family($id);
		$parents = $this->parent_model->get_parent($id);
		$kids = $this->kid_model->get_kid($id);
		$header =  '<img src="'.base_url('assets/img/login_logo.jpg').'" width="150" />';
		$header .= "<h1 style='color: #542a44;'>Initial registeration family ".$parents[0]['lastname']."</h1>";

		$html = '<h2 style="color: #542a44;">1. Basic Info</h2>';
		$html .= '<table style="width: 100%; color: #542a44;">';
		$html .= "<tr><td style='width: 50%'>Surname father</td><td>".$parents[0]['lastname']."</td></tr>";
		$html .= "<tr><td>Name father</td><td>".$parents[0]['firstname']."</td></tr>";
		$html .= "<tr><td>Birth date father</td><td>".$parents[0]['birthday']."</td></tr>";
		$html .= "<tr><td>Marital status father</td><td>".$parents[0]['marital_status']."</td></tr>";
		$html .= "<tr><td>Nationality father</td><td>".$parents[0]['nationality']."</td></tr>";
		$html .= "<tr><td>Mobile number father</td><td>".$parents[0]['mobile_number']."</td></tr>";
		$html .= "<tr><td>Email father</td><td>".$parents[0]['email']."</td></tr>";
		$html .= "<tr><td>Surname mother</td><td>".$parents[1]['lastname']."</td></tr>";
		$html .= "<tr><td>Name mother</td><td>".$parents[1]['firstname']."</td></tr>";
		$html .= "<tr><td>Birth date mother</td><td>".$parents[1]['birthday']."</td></tr>";
		$html .= "<tr><td>Marital status mother</td><td>".$parents[1]['marital_status']."</td></tr>";
		$html .= "<tr><td>Nationality mother</td><td>".$parents[1]['nationality']."</td></tr>";
		$html .= "<tr><td>Mobile number mother</td><td>".$parents[1]['mobile_number']."</td></tr>";
		$html .= "<tr><td>Email mother</td><td>".$parents[1]['email']."</td></tr>";
		$html .= "<tr><td>Zipcode (1234AB)</td><td>".$family['postal_code']."</td></tr>";
		$html .= "<tr><td>House number</td><td>".$family['house_number']."</td></tr>";
		$html .= "<tr><td>Street</td><td>".$family['street']."</td></tr>";
		$html .= "<tr><td>City</td><td>".$family['place']."</td></tr>";
		$html .= "<tr><td>House phone number</td><td>".$family['phone_number']."</td></tr>";
		$html .= "<tr><td>Contact email for HBN</td><td>".$family['contact_email']."</td></tr>";				
		$html .= '</table>';

		$html .= '<h2 style="color: #542a44;">2. About the host</h2>';
		$html .= '<table style="width: 100%; color: #542a44;">';		
		$html .= "<tr><td style='width: 50%'>Job description father</td><td>".$parents[0]['job_description']."</td></tr>";
		$html .= "<tr><td>Company name father</td><td>".$parents[0]['company_name']."</td></tr>";
		$html .= "<tr><td>Location job father</td><td>".$parents[0]['location_job']."</td></tr>";
		$html .= "<tr><td>Father works on the following days</td><td>".$parents[0]['work_days']."</td></tr>";
		$html .= "<tr><td>Father travels for work</td><td>".$parents[0]['travel_work']."</td></tr>";
		$html .= "<tr><td>Sports and interests father</td><td>".$parents[0]['sport_interest']."</td></tr>";
		$html .= "<tr><td>Character/traits father (?)</td><td>".$parents[0]['characteristics']."</td></tr>";
		$html .= "<tr><td>Job description mother</td><td>".$parents[1]['job_description']."</td></tr>";
		$html .= "<tr><td>Company name mother</td><td>".$parents[1]['company_name']."</td></tr>";
		$html .= "<tr><td>Location job mother</td><td>".$parents[1]['location_job']."</td></tr>";
		$html .= "<tr><td>Mother works on the following days</td><td>".$parents[1]['work_days']."</td></tr>";
		$html .= "<tr><td>Mother travels for work</td><td>".$parents[1]['travel_work']."</td></tr>";
		$html .= "<tr><td>Sports and interests mother</td><td>".$parents[1]['sport_interest']."</td></tr>";
		$html .= "<tr><td>Character/traits mother (?)</td><td>".$parents[1]['characteristics']."</td></tr>";
		$html .= "<tr><td>Number of kids</td><td>".$family['number_kids']."</td></tr>";
		
		foreach ($kids as $key => $kid) {
			$html .= "<tr><td>Name child ".( $key + 1 )."</td><td>".$kid['name']."</td></tr>";
			$html .= "<tr><td>Gender child ".( $key + 1 )."</td><td>".$kid['gender']."</td></tr>";
			$html .= "<tr><td>Birth date child ".( $key + 1 )."</td><td>".$kid['birthday']."</td></tr>";
			$html .= "<tr><td>Age child ".( $key + 1 )."</td><td>".$kid['age']."</td></tr>";
			$html .= "<tr><td>School/daycare child ".( $key + 1 )."</td><td>".$kid['school']."</td></tr>";
			$html .= "<tr><td>Monday</td><td>".$kid['monday']."</td></tr>";
			$html .= "<tr><td>Tuesday</td><td>".$kid['tuesday']."</td></tr>";
			$html .= "<tr><td>Wednesday</td><td>".$kid['wednesday']."</td></tr>";
			$html .= "<tr><td>Thursday</td><td>".$kid['thursday']."</td></tr>";
			$html .= "<tr><td>Friday</td><td>".$kid['friday']."</td></tr>";
			$html .= "<tr><td>How do the kid".( $key + 1 )." go to school?</td><td>".$kid['commute']."</td></tr>";
			
		}		

		$html .= "<tr><td>House</td><td>".$family['living_situation']."</td></tr>";
		// $html .= "<tr><td>Description of your home and surroundings</td><td>".$family[]."</td></tr>";
		$html .= "<tr><td>How many bed rooms?</td><td>".$family['number_bedrooms']."</td></tr>";
		$html .= "<tr><td>How many bathrooms?</td><td>".$family['number_bathrooms']."</td></tr>";
		$html .= "<tr><td>Religion</td><td>".$family['religion']."</td></tr>";
		$html .= "<tr><td>Practising</td><td>".$family['practising']."</td></tr>";
		$html .= "<tr><td>Pets</td><td>".$family['pets']."</td></tr>";
		$html .= "<tr><td>How many hours do you have a housekeeper?</td><td>".$family['household_help']."</td></tr>";
		$html .= "<tr><td>Does anyone smoke in the house?</td><td>".$family['cooking']."</td></tr>";
		$html .= "<tr><td>Who cooks most of the time?</td><td>".$family['cook']."</td></tr>";
		$html .= "<tr><td>Do you dinner together?</td><td>".$family['eating']."</td></tr>";
		$html .= "<tr><td>Are there any family members with an allergy, chronic illness or a physical/mental handicap?</td><td>".$family['ilness']."</td></tr>";
		$html .= "<tr><td>If yes, does this have an e ect on the au-pair duties?</td><td>".$family['illness_influence']."</td></tr>";
		$html .= "</table>";

		$html .= '<h2 style="color: #542a44;">3. Preferences</h2>';
		$html .= '<table style="width: 100%; color: #542a44;">';		
		$html .= "<tr><td style='width: 50%'>Au-pair needs to be available from</td><td>".$family['aupair_from']."</td></tr>";
		$html .= "<tr><td>Until</td><td>".$family['aupair_until']."</td></tr>";
		$html .= "<tr><td>Main reason for welcoming an au- pair?</td><td>".$family['reason']."</td></tr>";
		$html .= "<tr><td>Which culture/country do you have a nity with?</td><td>".$family['culture_country']."</td></tr>";
		$html .= "<tr><td>Which characteristics do you find most important?</td><td>".$family['aupair_characteristics']."</td></tr>";
		$html .= "<tr><td>Would you accept a vegetarian au-pair or other diet?</td><td>".$family['aupair_diet']."</td></tr>";
		$html .= "<tr><td>Do you accept a smoker?</td><td>".$family['aupair_smoker']."</td></tr>";
		$html .= "<tr><td>Does the au-pair need to have a driverslicense?</td><td>".$family['aupair_drivers_license']."</td></tr>";
		$html .= "<tr><td>Which skills do you find most important?</td><td>".$family['aupair_skills']."</td></tr>";
		$html .= "<tr><td>Did you have an au-pair before?</td><td>".$family['aupair_experience']."</td></tr>";
		$html .= "<tr><td>Possible tasks regarding the kids:</td><td>".$family['aupair_responsibilities']."</td></tr>";
		$html .= "<tr><td>Possible tasks regarding the household:</td><td>".$family['aupair_household']."</td></tr>";
		$html .= "<tr><td>How many hours do you need her to do household tasks per week?</td><td>".$family['aupair_household_hours']."</td></tr>";
		$html .= "<tr><td>How often would you like the au- pair to babysit at night per week?</td><td>".$family['aupair_household_nights']."</td></tr>";
		$html .= "</table>";

		$html .= '<h2 style="color: #542a44;">4. Costs</h2>';
		$html .= '<table style="width: 100%; color: #542a44;">';		
		$html .= "<tr><td style='width: 50%'>Gaan jullie akkoord met het maandelijkse zakgeld en de verplichte verzekering?</td><td>".$family['pocketmoney_insurance']."</td></tr>";
		$html .= "<tr><td>Vervoer - de au-pair krijgt de beschikking over een</td><td>".$family['travel']."</td></tr>";
		$html .= "<tr><td>Talencursus - zijn jullie bereid één cursus te betalen voor de au-pair?</td><td>".$family['language_course']."</td></tr>";
		$html .= "<tr><td>EHBO cursus - Wij vinden het belangrijk dat uw au-pair een EHBO certi caat heeft in het geval van ongelukken. Zijn jullie bereid €70,- te betalen voor de EHBO cursus voor de au-pair?</td><td>".$family['first_aid']."</td></tr>";
		$html .= "<tr><td>HBN club - 3 keer per jaar organiseert HBN een DUTCH-EVENT met alle au-pairs. Zijn jullie bereid €42,- per event te betalen zodat de au-pair hieraan deel kan nemen?</td><td>".$family['hbn_club']."</td></tr>";
		$html .= "<tr><td>Telefoon - De au-pair krijgt een telefoonkosten vergoeding van minimaal €10,- per maand. Gaan jullie hiermee akkoord?</td><td>".$family['phone_expenses']."</td></tr>";
		$html .= "<tr><td>Retourticket - Tot welk bedrag zijn jullie bereid bij te dragen aan een eventueel retourticket?</td><td>".$family['return_ticket']."</td></tr>";
		$html .= "</table>";
		
		return array($header, $html);
	}

	private function get_aupair_content($id){
		$aupair = $this->aupair_model->get_aupair($id);
		$header =  '<img src="'.base_url('assets/img/login_logo.jpg').'" width="150" />';
		$header .= "<h1 style='color: #542a44;'>Initial registeration aupair $aupair[full_name]</h1>";

		// $hmtl = '<h2>1. General Info</h2>';
		$html = '<table style="width: 100%; color: #542a44;">';
		$html .= "<tr><td style='width: 50%'>Full name</td><td>$aupair[full_name]</td></tr>";
		$html .= "<tr><td>Gender</td><td>$aupair[gender]</td></tr>";
		$html .= "<tr><td>Date of birth</td><td>$aupair[date_of_birth]</td></tr>";
		$html .= "<tr><td>Nationality</td><td>$aupair[nationality]</td></tr>";
		$html .= "<tr><td>Address</td><td>$aupair[address]</td></tr>";
		$html .= "<tr><td>Email address</td><td>$aupair[email]</td></tr>";
		$html .= "<tr><td>Phone number</td><td>$aupair[phone]</td></tr>";
		$html .= "<tr><td>Skype name</td><td>$aupair[skype]</td></tr>";
		$html .= "<tr><td>Height in cm</td><td>$aupair[height]</td></tr>";
		$html .= "<tr><td>Weight in kg</td><td>$aupair[weight]</td></tr>";
		$html .= "<tr><td>When are you available to start?</td><td>$aupair[start_date]</td></tr>";
		$html .= "<tr><td>Period of stay</td><td>$aupair[period_of_stay]</td></tr>";
		$html .= "<tr><td>How much are you willing to contribute to your hosts for your flight ticket?</td><td>$aupair[contribution_flight]</td></tr>";
		$html .= "<tr><td>Will care for children under 2 years of age</td><td>$aupair[children_under_2]</td></tr>";
		$html .= "<tr><td>Max amount of children</td><td>$aupair[max_amount_children]</td></tr>";
		$html .= "<tr><td>Religion</td><td>$aupair[religion]</td></tr>";
		$html .= "<tr><td>interests/Hobbies</td><td>$aupair[interests]</td></tr>";
		$html .= "<tr><td>Do you smoke?</td><td>$aupair[smoker]</td></tr>";
		$html .= "<tr><td>Do you have tattoos?</td><td>$aupair[tattoos]</td></tr>";
		$html .= "<tr><td>Do you have piercings?</td><td>$aupair[piercings]</td></tr>";
		$html .= "<tr><td>What kind of education did you have and for how many years?</td><td>$aupair[education]</td></tr>";
		$html .= "<tr><td>What is yoru current occupation?</td><td>$aupair[current_job]</td></tr>";
		$html .= "<tr><td>What kind of experience with child care do you have and for how many years?</td><td>$aupair[experience]</td></tr>";
		$html .= "<tr><td>Did you work as an au-pair before?</td><td>$aupair[aupair_experience]</td></tr>";
		$html .= "<tr><td>Do you know how to swim?</td><td>$aupair[swimming]</td></tr>";
		$html .= "<tr><td>Do you have a drivers license?</td><td>$aupair[drivers_license]</td></tr>";
		$html .= "<tr><td>What language do you speak?</td><td>$aupair[languages]</td></tr>";
		$html .= "<tr><td>Disclaimer service fee</td><td>$aupair[disclaimer_service_fee]</td></tr>";
		$html .= "<tr><td>Place</td><td>$aupair[place]</td></tr>";
		$html .= "<tr><td>Date</td><td>$aupair[ap_date]</td></tr>";
		$html .= "<tr><td>I hereby accept the terms and conditions of the HBN Au Pair program</td><td>$aupair[dislaimer_terms_conditions]</td></tr>";
		$html .= '</table>';

		return array($header, $html);
	}
	 
}