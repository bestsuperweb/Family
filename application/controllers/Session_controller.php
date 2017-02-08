<?php 
/**
* 
*/
class Session_controller extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
	}

	function log_in(){
		$this->load->view('session/login');

	}

	function forget_password(){
		$this->load->view('session/forget_password');
	}

	function log_out(){

	}
}