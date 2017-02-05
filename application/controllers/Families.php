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

    public function create( $page = 1 ){
    	
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

    			if ($this->form_validation->run() === TRUE)
	    		{

	    			$data['family_id'] = $this->family_model->insert_family();
		        	$this->parent_model->insert_parent($data['family_id']);
		        	$page += 1;
		        	$data['page'] = $page;	        			        
		        	$this->load->view('templates/header', $data);
	    			$this->load->view('templates/navbar', $data);
	    			$this->load->view('families/create', $data);

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);

	    		}
    			break;

    		case 2:
    			$this->form_validation->set_rules('fa_kids', 'Number of childs', 'trim|required');
    			$this->form_validation->set_rules('fa_k1_name', 'Name of child', 'trim|required');

    			$data['family_id'] = $this->input->post('family_id');
		        	
    			if ($this->form_validation->run() === TRUE)
	    		{

	    			$this->family_model->update_family(1);
		        	$this->parent_model->update_parent(1);
		        	$this->kid_model->insert_kid();
		        	$page += 1;
		        	$data['page'] = $page;	        			        
		        	$this->load->view('templates/header', $data);
	    			$this->load->view('templates/navbar', $data);
	    			$this->load->view('families/create', $data);

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		echo 'This is Ghost2';
		    		$this->load->view('families/create', $data);

	    		}
    			break;

    		case 3:
    			$this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');

    			$data['family_id'] = $this->input->post('family_id');
		        	
    			if ($this->form_validation->run() === TRUE)
	    		{

	    			$this->family_model->update_family(2);
	    			$data['family_id'] = $this->input->post('family_id');
		        	$page += 1;
		        	$data['page'] = $page;	        			        
		        	$this->load->view('templates/header', $data);
	    			$this->load->view('templates/navbar', $data);
	    			$this->load->view('families/create', $data);

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);

	    		}
    			break;

    		case 4:
    			$this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');

    			$data['family_id'] = $this->input->post('family_id');
		        	
    			if ($this->form_validation->run() === TRUE)
	    		{

	    			$this->family_model->update_family(3);
	    			$userdata = array( 
					   'user_type'  => 'family', 
					   'user_id'    => $data['family_id']
					);  

					$this->session->set_userdata($userdata);
		        	redirect('index/profile');

	    		}else{

	    			$data['page'] = $page;
			    	$this->load->view('templates/header', $data);
		    		$this->load->view('templates/navbar', $data);
		    		$this->load->view('families/create', $data);

	    		}
    			break;

    		default:
    			
    			break;
    	}

    	$this->load->view('templates/footer');

    }	

}