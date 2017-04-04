<?php
class Families extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    	$this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
        $this->load->model('aupair_model');
        $this->load->model('document_model');
        $this->load->model('update_model');
        $this->load->model('task_model');
        $this->load->model('familyreport_model');
        $this->load->library('session');
        $this->load->library('mpdf60/mpdf');
    }

    public function create( $page )
    {
    	$data['title'] = 'Family | Register';
    	$data['register'] = 'family';

    	switch ($page) {
    		case 1:
    			$this->form_validation->set_rules('fa_pa1_first_name', 'First name of parent1', 'trim|required');
    			$this->form_validation->set_rules('fa_pa1_last_name', 'Last name of parent1', 'trim|required');
    			$this->form_validation->set_rules('fa_pa2_first_name', 'First name of parent2', 'trim|required');
    			$this->form_validation->set_rules('fa_pa2_last_name', 'Last name of parent2', 'trim|required');
    			$this->form_validation->set_rules('fa_pa1_email', 'Email of Parent1', 'trim|required|valid_email|is_unique[parents.email]');
    			$this->form_validation->set_rules('fa_pa2_email', 'Email of Parent2', 'trim|required|valid_email|is_unique[parents.email]');
    			$this->form_validation->set_rules('fa_email', 'Contact email', 'trim|required|valid_email|is_unique[families.contact_email]');
    			if ($this->form_validation->run() === TRUE)
	    		{
	    			$family_id = $this->family_model->insert_family();
		        	$this->parent_model->insert_parent($family_id);
		        	$page += 1;
		        	$data['page'] = $page;	
	    			$userdata = array( 
						   'user_type'  => 'family',
						   'email'		=> $this->input->post('fa_email'),
						   'user_id'    => $family_id
						);  

					$this->session->set_userdata($userdata);
	    			redirect('families/create/2');

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);
		    		$this->load->view('templates/footer');

	    		}
    			break;

    		case 2:
    			$this->form_validation->set_rules('fa_kids', 'Number of childs', 'trim|required');
    			$this->form_validation->set_rules('fa_k1_name', 'Name of child', 'trim|required');

    				
    			if ($this->form_validation->run() === TRUE)
	    		{

	    			$this->family_model->update_family(1, $this->session->userdata('user_id'));
		        	$this->parent_model->update_parent(1, $this->session->userdata('user_id'));
		        	$this->kid_model->insert_kid($this->session->userdata('user_id'));
		        	$page += 1;
		        	$data['page'] = $page;    
		      		redirect('families/create/3');

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);
		    		$this->load->view('templates/footer');

	    		}
    			break;

    		case 3:
    			$this->form_validation->set_rules('fa_aupair_from', 'Family Date from', 'trim|required');

    				
    			if ($this->form_validation->run() === TRUE)
	    		{
	    			$this->family_model->update_family(2, $this->session->userdata('user_id'));
	    			$page += 1;
		        	$data['page'] = $page;	        			        
		      		redirect('families/create/4');

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);
		    		$this->load->view('templates/footer');

	    		}
    			break;

    		case 4:
    			$this->form_validation->set_rules('fa_pocketmoney_insurance', 'Family Pocket Insurance', 'trim|required');

    			     	
    			if ($this->form_validation->run() === TRUE)
	    		{

	    			if($this->family_model->update_family(3, $this->session->userdata('user_id'))){
	    				
						redirect(base_url('session_controller/sign_up'), 'refresh');						
	    			}
	    			

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);
		    		$this->load->view('templates/footer');      	

	    		}
    			break;
    	}    	

    }

    function delete($id){
    	
		$this->family_model->delete_family($id);
    	$this->parent_model->delete_parent($id);
    	$this->kid_model->delete_kid($id);
		$array_items = array('user_type', 'user_id', 'email');
		$this->session->unset_userdata($array_items);    	


    	redirect('session_controller/log_in');		
    }

    function send_skype(){
    	$this->load->model('aupair_model');
    	$this->load->library('email');
    	$parents = $this->parent_model->get_parent($this->input->post('sk_fa_id'));
    	$aupair = $this->aupair_model->get_aupair($this->input->post('sk_ap_id'));
    	$message = "Dear $aupair[full_name],<br> The ".$parents[0]['lastname']." family would love to plan a Skype call with you. They've includd the following message:<br> \"".$this->input->post('sk_content')."\" <br> The family suggests teh following dates and times:".$this->input->post('sk_start_date')." ".$this->input->post('sk_start_time')." ~ ".$this->input->post('sk_end_date')." ".$this->input->post('sk_end_time')."<br> Please let the family know the date and time you prefer by replying to this email.<br> Kind regards,<br> HBN The Netherlands";

		
		$this->email->from('hbn@example.com');
		$this->email->reply_to($parents[0]['email']);
		$this->email->to($aupair['email']);
		$this->email->subject('Dear '.$aupair['full_name']);
		$this->email->message($message);
		if($this->email->send()){

			$this->task_model->insert_task(
						"De familie ".$parents[0]['lastname']." heeft een au-pair uitgenodigd voor een skype gesprek.",
						"1. Maak een match aan in stap 3 van het stappenplan als jullie de perfecte kandidaat hebben gevonden.",
						'',
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);

			$this->update_model->insert_update(
						"De familie ".$parents[0]['lastname']." heeft een au-pair uitgenodigd voor een skype gesprek.",
						"Jullie uitnodiging voor het skype gesprek is verstuurd!",
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);
			$this->familyreport_model->insert_familyreport(array('Skype_call_planned' => 1), $this->input->post('sk_fa_id'));
			redirect(base_url('index/roadmap_profile/3'));
		}
    }

    function generate_document($step){ 

    	
    	switch ($step) {
    		case 1:
    			$html = $this->get_agreement($this->input->post('fa_id'), $this->input->post('ap_id'));
    			$name = md5('agree'.$this->input->post('fa_id').$this->input->post('ap_id'));
    			$this->family_model->update_family(7, $this->input->post('fa_id'));
    			$this->aupair_model->update_aupair(3, $this->input->post('ap_id'));
    			$this->_gen_pdf($html, "$name.pdf");

    			$parents = $this->parent_model->get_parent($this->input->post('fa_id'));
    			$task_id = $this->task_model->insert_task(
						"De familie ".$parents[0]['lastname']." heeft een match aangemaakt en de agreement ondertekend. Controleer de agreement in de documenten van de familie.",
						"1. Upload de ondertekende awareness-declaration en keur de timeschedule definitief goed.",
						'',
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);

				$update_id = $this->update_model->insert_update(
						"De familie ".$parents[0]['lastname']." heeft een match aangemaakt en de agreement ondertekend.",
						"Jullie match en agreement zijn aangemaakt. Jullie ontvangen een melding wanneer ook de au-pair de agreement heeft getekend.",
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);

				$this->document_model->insert_document("$name.pdf", "Agreement", $parents[0]['lastname'], $this->aauth->get_user()->id, $task_id, $update_id);
				redirect(base_url('index/roadmap_profile/3'));
    			break;
    		case 2:
    			$imagedata = base64_decode($_POST['imgdata']);
				$filename = md5(uniqid(rand(), true));
				//path where you want to upload image
				$file = 'files/schedules/'.$filename.'.jpg';
				$imageurl  = base_url('files/schedules/'.$filename.'.jpg');
				file_put_contents($file,$imagedata);

				$family_id = $_POST['familyId'];
				$parents = $this->parent_model->get_parent($family_id);
				
				$html = $this->get_timeschedule($family_id, $imageurl);

				$name = md5('timeschedule'.$family_id);
				$this->_gen_pdf($html, "$name.pdf");
				
				$task_id = $this->task_model->insert_task(
						"De familie ".$parents[0]['lastname']." heeft document TimeSchedule aangeleverd. Het bestand staat klaar voor goedkeuring.",
						"1. Ga verder met de ‘dear au-pair letter’.",
						'',
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);

				$update_id = $this->update_model->insert_update(
						"De familie ".$parents[0]['lastname']." heeft document TimeSchedule aangeleverd.",
						"Jullie timeschedule is aangeleverd en staat klaar voor goedkeuring.",
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);
				$this->familyreport_model->insert_familyreport(array('Timeschedule_submitted' => 1), $family_id);
				if( $this->document_model->insert_document("$name.pdf", "TimeSchedule", $parents[0]['lastname'], $this->aauth->get_user()->id, $task_id, $update_id)){
					echo 'success';
				}else{
					echo 'failure';
				}

    			break;

    		case 3:
    			$family_id = $this->aauth->get_user()->name;
    			$parents = $this->parent_model->get_parent($family_id);
    			$name = md5('income'.$family_id);
				if($this->generate_income("$name.pdf")){
					$task_id = $this->task_model->insert_task(
						"De familie ".$parents[0]['lastname']." heeft document Inkomenstoetsing aangeleverd. Het bestand staat klaar voor goedkeuring.",
						"1. Ga verder met stap 3 van het stappenplan.",
						'',
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);

					$update_id = $this->update_model->insert_update(
						"De familie ".$parents[0]['lastname']." heeft document Inkomenstoetsing aangeleverd.",
						"Jullie inkomenstoetsing is aangeleverd en staat klaar voor goedkeuring.",
						$this->aauth->get_user()->id,
						$parents[0]['lastname']
					);
					if( $this->document_model->insert_document("$name.pdf", "Inkomenstoetsing", $parents[0]['lastname'], $this->aauth->get_user()->id, $task_id, $update_id)){
						$this->familyreport_model->insert_familyreport(array('All_documents_submitted' => 1), $family_id);
						echo 'success';
					}else{
						echo 'failure';
						unlink("files/$name.pdf");
					}
				}else{
					echo 'failure';
				}
    			break;

    		default:
    			# code...
    			break;
    	}
    											
		    
	}

    private function _gen_pdf($html, $name, $paper='A4')
    {
        
        $mpdf = new mPDF('utf-8',$paper);
        $mpdf->SetHTMLHeader($html[0]);
        if ($html[2] ) {
            $mpdf->SetHTMLFooter($html[2]);
            $mpdf->AddPage('', '', '', '', '', 10, 10, 35, 20, 10, 0); 
        }else{
            $mpdf->AddPage('', '', '', '', '', 10, 10, 50, 10, 10, 0); 
        }                
        $mpdf->WriteHTML($html[1]);
        $filename= "files/$name";                   
        $mpdf->Output($filename, 'F');
    }

    private function generate_income($name, $paper = 'A4'){
    	
    	$pdf = new mPDF('utf-8',$paper);
	    $pdf->SetImportUse();

    	$docuemtns = $this->document_model->get_document($this->aauth->get_user()->id);
    	
    	foreach ($docuemtns as $key => $document) {
    		if (
    			($document['title'] == 'Loondienst-1') || 
    			($document['title'] == 'Loondienst-2') || 
    			($document['title'] == 'Loondienst-3') || 
    			($document['title'] == 'Zelfstandig ondernemer-1') || 
    			($document['title'] == 'Zelfstandig ondernemer-2') || 
    			($document['title'] == 'Zelfstandig ondernemer-3') ||
    			($document['title'] == 'Eigen vermogen-1') || 
    			($document['title'] == 'Eigen vermogen-2') || 
    			($document['title'] == 'Eigen vermogen-3') ||
    			($document['title'] == 'DGA-1') || 
    			($document['title'] == 'DGA-2') || 
    			($document['title'] == 'DGA-3') ||
    			($document['title'] == 'DGA-4') || 
    			($document['title'] == 'DGA-5')
    			) 
    		{
    			$file = 'files/'.$document['name'];
    			$pagecount = $pdf->SetSourceFile($file);
		        for ($i=1; $i<=$pagecount; $i++) {
		            $import_page = $pdf->ImportPage($i);
		            $pdf->UseTemplate($import_page);
		            $pdf->AddPage();
		        }
		        $this->document_model->delete_document($document['id']);
    		}
    	}
	    $filename= "files/$name";    
	    if(!$pdf->Output($filename, 'F')){
	        return 1;
	    }
    }

    private function get_timeschedule($family_id, $image_url){

    	$parents 	= $this->parent_model->get_parent($family_id);

    	$header = '<div style="text-align: center; " ><img src="'.base_url('assets/img/login_logo.jpg').'" width="150" /></div>';
    	$footer = '<div style="text-align: center; font-size: 12px; padding: 10px 0;">Huisje Boompje Nanny Au pair services, Leidsevaartweg 1 2106 NA The Netherlands<br> phone:+31 23 3020311 e-mail: <a href="#">support@hbnaupairservices.com</a><br> ABN AMRO 403737311 Chamber of Commerce 52888991</div>';
    	$html = "<div style='text-align:center;'><img src='$image_url' width='650' /></div><br>";
    	$html .= "Signature of Family ".$parents[0]['lastname']." :";

    	return array($header, $html, $footer);
    }

    private function get_agreement($family_id, $aupair_id){

        $this->load->model('aupair_model');
        $family 	= $this->family_model->get_family($family_id);
        $parents 	= $this->parent_model->get_parent($family_id);
        $kids 		= $this->kid_model->get_kid($family_id);
        $boys 	= array();
        $girls 	= array();
        foreach ($kids as $key => $kid) {
        	if ($kid['gender'] == 'Boy') {
        		$boys[] = $kid;
        	}else{
        		$girls[] = $kid;
        	}
        }
    	$aupair 	= $this->aupair_model->get_aupair($aupair_id);

    	$header = '<div style="text-align: center; " ><img src="'.base_url('assets/img/login_logo.jpg').'" width="150" /></div>';
    	$footer = '<div style="text-align: center; font-size: 12px; padding: 20px 0;">Huisje Boompje Nanny Au pair services, Leidsevaartweg 1 2106 NA The Netherlands<br> phone:+31 23 3020311 e-mail: <a href="#">support@hbnaupairservices.com</a><br> ABN AMRO 403737311 Chamber of Commerce 52888991</div>';

    	$html = "<div style='text-align:center;'><h3>AGREEMENT BETWEEN AU PAIR AND HOST</h3></div>";
    	$html .= "This agreement relating to an Au Pair placement is concluded between:<br><br>
					- (Mr) or (Mrs) ".$parents[0]['lastname']." <br>
					- Place of residence<br><br>
					Hereinafter referred to ".$parents[0]['lastname']." as “the Host” and <br><br>
					".$aupair['full_name']."<br><br> Hereinafter referred to as “the Au Pair”<br><br>
					- Born on ".$aupair['date_of_birth']."<br>
					- In..................................................................................................................... <br>
					- Nationality ".$aupair['nationality']."<br>
					- Place of residence ".$aupair['address']."<br><br>
					<h3>I. GENERAL CONDITIONS:</h3>
					The Au Pair, ".$aupair['full_name'].", will be received by the Host, Family . ".$parents[0]['lastname'].", for a period of 12 months under the conditions laid down hereafter. During this period, the Au Pair will be given the opportunity to improve her education and to increase her general cultural development. After the contract period the Au Pair returns to her country of origin.<br><br>
					The agreement takes effect from: ".$family['aupair_from']."<br>
					<h3>II. DUTIES OF THE HOST:</h3>
					II. 1. The Host undertakes to receive the Au Pair into the family and let her share in the daily family life. In this condition the Host makes the following declaration of which the Au Pair takes note that:<br><br>
					• The family consists of ".(count($kids)+2)." persons, including:<br>
					2 adults, ".$parents[0]['firstname']." and ".$parents[1]['firstname'].", and ".count($boys)." son(s) of ";
		foreach ($boys as $key => $boy) {
			$html .= $boy['age']." years old and ";
		}
		$html .= count($girls)." dauter(s) of ";
		foreach ($girls as $key => $girl) {
			if ($key == (count($girls) - 1)) {
				$html .= $girl['age']." years old.";
			}else{
				$html .= $girl['age']." years old and";
			}			
		}		
		$html .="<br><br>• The family lives at the following address: ".$family['house_number']." ".$family['street']." ".$family['place'].".<br>
					The house consists of ".$family['number_bedrooms']." rooms and ".$family['number_bathrooms']." bathrooms situated nearby a town where an educational institute is located at which appropriate language courses are available.<br><br>
					• Occupation of Host father: <br>".$parents[0]['job_description']."<br><br>
					• Occupation of Host mother: <br>".$parents[1]['job_description']." <br><br>
					• The Host is aware that the Au Pair can only be asked to do light household tasks according to the conditions and weekly time schedule approved by HBN and signed by Host and Au Pair.<br><br>
					The language normally spoken in the household is: Dutch.<br><br>
					II.2. The Host shall provide board and lodging for the Au Pair and shall place at her disposal a separate bedroom and bathroom under the conditions stated in the general terms and conditions of HBN.<br><br>
					II.3. ln addition, the Host shall pay the Au Pair pocket money amounting to € 340,00 per month at the end of each month for a maximum of 30 hours of childcare and light housework per week with a maximum of 8 hours per day, a maximum of 5 days a week and a maximum of 3 babysit evenings. The Au Pair will also receive € 10,00 phone allowance per month for personal calls. The Au Pair will need to pay for any calls that are made outside of this allowance. The Host will also provide a computer/laptop, a mobile phone and a bike for personal use during the contract period. If the Host will be away for a certain period or does not need the Au Pair to perform her tasks, the Host will continue to pay the Au Pair her monthly pocket money at all time and will provide the Au Pair of the daily sustenance.<br><br>
					II.4. The Au Pair's hours of duty shall be organized in such a way that the Au Pair is able to follow a language course and is able to improve the general cultural development and knowledge. The Host agrees to pay for a Dutch Course (or another course in agreement with the Hosts) to a maximum of € 300 Euro per annum provided that the Au Pair finishes the course and stays at least 6 months.<br><br>
					II.5. The weekly time schedule has been set up by the Host, according to the Dutch regulation that applies to the Au Pair program.<br><br>
					The schedule is signed and approved by both Host and Au Pair and will be adhered to by both parties during the whole Au Pair program.<br><br>
					II.6. The Au Pair will have at least two free days per week and will have full opportunity to take part in religious worship. The Au Pair shall have at least one full weekend off per month; from Friday evening 20:00 pm until Sunday evening 24:00 pm.<br><br>
					II.7. The Au Pair is entitled to 2 weeks of paid leave per 12 months, or a pro- rata portion for a shorter period of stay. The Au Pair should discuss any agreements with regard to paid leave well in advance with the Host, preferably but not obliged to be taken in the Host’s holiday.<br><br>
					II.8.The Host has agreed to take out an insurance that covers general medical costs, personal liability and
					repatriation, This includes urgent unforeseen medical treatment, general practitioner visits, pharmacy and hospital care. The insurance needs to be taken out at the day of departure from the country of origin. In addition, the Host is responsible for paying all urgent unforeseen medical costs not covered by the insurance with the exception of medical costs for treatment of pre-existing conditions, precautionary care, self inflicted sickness and pregnancy or abortion. In the event of the Au Pair's falling ill, the Host shall continue to provide board and lodging and shall give the appropriate care until necessary arrangements have been made.<br><br>
					II.9.The Host is not dependent on the Au Pair and has at all times -where applicable - an alternative available for those activities expected of the Au Pair.<br><br>
					II.10. The Host has agreed to pay €72,60 for the Au Pair to do a first aid training focused on children.<br><br>
					II.11.The Host has agreed to pay €42,- euro in cash for every HBN reunions/outings the Au Pair would like to join (through the year +/- 3 times).<br><br>
					II.12. Travel costs:<br>
					The Host and Au Pair have agreed that they will share go and return costs.<br>
					<h3>III. DUTIES OF THE AU PAIR:</h3>
					III.1. The Au Pair undertakes to participate for a maximum of 30 hours a week in day to day family duties by doing the following services: taking care of the children and doing light housework.<br><br>
					III.2. The Au Pair agrees to comply with any formality necessary on her part to enable the Host to fulfill her obligations concerning the aforementioned insurance under II.10.<br><br>
					III.3. The Au Pair will not perform duties outside the Host community. During the Au Pair's period of residence with the Host, she will always act in accordance with the house rules of the family and these house rules will (where possible) apply to all members of the family without distinguishing between the Au Pair and Host. The house rules will be made known to the Au Pair upon arrival in the Netherlands.<br>
					<h3>IV. TERMINATION:</h3>
					IV.1. The agreement terminates ipso jure at the end date mentioned under article I of this	agreement.<br><br>
					IV.2. Either party may terminate the agreement with a four weeks notice period. In such event both parties should make sure to inform HBN as soon as possible and latest within 1 week after they have agreed to end the agreement.<br>
					a) In the event of serious misconduct (e.g. mental or physical abuse, mental or physical disorder, stealing, and compulsive lying) by one of the parties, the other party may terminate the agreement with immediate effect.<br>
					b) Either party may also terminate the agreement with immediate effect if serious circumstances make such instant termination necessary.<br>
					c) If Au Pair or Host has not adhered to the Au Pair program or in case of serious misconduct or circumstances, the party who has not adhered to the Au Pair program or has caused the serious misconduct, is responsible for the payment of the Au Pair's return travel to her country of origin and rebook/change costs of the flight.<br><br>
					IV. 3. lf the Au Pair chooses to terminate the agreement:<br>
					a) a four weeks notice period must be adhered to;<br>
					b) HBN should be notified in writing immediately in this situation;<br>
					c) lf replacement of the Au Pair is not possible within these four weeks, the Au Pair will be responsible for the payment of her own returnticket to her country of origin.<br><br>
					IV. 4. The Host can request for a replacement of the Au Pair if:<br>
					a) au pair does not adhere to the Au Pair program and/or if there are problems between the Au Pair and family and/or there is simply no \"match\" between them.<br>
					b) If such situation occurs, the Host should immediately inform HBN.<br>
					c) If HBN is not able to replace the Au Pair within four weeks after notification, the Host is responsible for the payment of the Au Pair's return travel to her country of origin.<br><br>
					IV.5. After the contract period, at the end of the Au Pair program, the Host is responsible for the departure of the Au Pair to the country of origin and needs to inform HBN of the exact date of departure. Next to this the Au Pair needs to provide HBN with proof of arrival in her country of origin within four days after arrival.<br><br>
					IV.6. In case of structural changes during the Au Pair program, the Host and Au Pair are obliged to inform HBN immediately. Considered to be a structural change are(amongst others) ; changes in the weekly time schedule, changes in the family composition/status (divorce/birth/movement), changes in the income position, changes in the residence status of the Au Pair.<br>
					<h3>V. MISCELLANAOUS PROVISIONS</h3>
					The parties also agree on the following:<br>
					To have read, understood and agreed upon the HBN general terms and conditions, complementary conditions and household tasks conditions.<br><br>
					This agreement has been drawn up in 3 copies, one to be retained by the Au Pair, and one to be retained by the Host, and one for HBN.<br><br>
					Date: ".date("Y-m-d")."<br><br>
					Name: ".$parents[0]['firstname']." ".$parents[0]['lastname']."<br><br><br>
					Signatures of Host:<br><br><br>                         Signature of Au Pair:";

			return array($header, $html, $footer);

    }	

}