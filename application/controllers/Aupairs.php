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
	}

	function create(){
		$data['title'] = 'Au-Pair | Register';
		$data['register'] = 'aupair';

		$this->form_validation->set_rules('ap_full_name', 'Full name', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{

			$data['family_id'] = $this->aupair_model->insert_aupair();
        	if( $this->aupair_model->insert_parent($data['family_id']) ){

        		redirect('index/profile');
        	}

		}else{
			$this->load->view('templates/header', $data);
    		$this->load->view('templates/navbar', $data);
    		$this->load->view('aupairs/create', $data);
		}
		$this->load->view('templates/footer');
	}
	
}