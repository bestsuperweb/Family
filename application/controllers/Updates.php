<?php
class Updates extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('update_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){
        if ($this->update_model->insert_update($_POST['hbn_update'], $_POST['user_update'], $_POST['user_id'], $_POST['user_name'])) {
            echo "success";
        }else{
            echo "failure";
        }               
    }

    public function update($step, $update_id){
        if($this->update_model->update_update($step, $update_id)){
            echo 'success';
        }else{
            echo 'failure';
        }
    }

    public function get($user_id){
        if($updates = $this->update_model->get_update($user_id)){
            $data['updates'] = $updates;                        
        }else{
            $updates = array();
            $data['updates'] = $updates;
        }
        return $data['updates'];
    }

    public function delete($id){
        if($this->update_model->delete_update($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    
}