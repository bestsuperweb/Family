<?php 
/**
* 
*/
class Session_controller extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
	}

	function log_in(){

	}

	function log_out(){

	}
}