<?php
/**
* 
*/
class Aupairs extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('custom_helper');
        $this->load->model('aupair_model');
        $this->load->library('session');
	}

	function create(){
		$data['title'] = 'Au-Pair | Register';
		$data['register'] = 'aupair';

		$this->form_validation->set_rules('ap_full_name', 'Full name', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{

			$result = $this->aupair_model->insert_aupair();
        	if( $result ){
        		$userdata = array( 
					   'user_type'  => 'aupair', 
					   'user_id'    => $result,
					   'email'		=> $this->input->post('ap_email')
					);  

				$this->session->set_userdata($userdata);
        		redirect('session_controller/sign_up');
        	}

		}else{
			$this->load->view('templates/header', $data);
    		$this->load->view('templates/navbar', $data);
    		$this->load->view('aupairs/create', $data);
		}
		$this->load->view('templates/footer');
	}

	function delete($id){
		
    	$this->aupair_model->delete_aupair($id);
		$array_items = array('user_type', 'user_id', 'email');
		$this->session->unset_userdata($array_items);    	

    	redirect('session_controller/log_in');
    	
	}
	
}