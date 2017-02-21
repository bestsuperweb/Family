<?php
class Families extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    	$this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
        $this->load->library('session');
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
			redirect(base_url('index/roadmap_profile/3'));
		}
    }	

}