<?php
class Schedule extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('schedule_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){
        if($this->schedule_model->insert_schedule()){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    public function update($id, $mod = 1 ){
        if($this->schedule_model->update_schedule($id, $mod)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    public function get($user_type, $user_id, $date){
        if($schedules = $this->schedule_model->get_schedule($user_type, $user_id)){
            $data['schedules'] = $schedules;                        
        }else{
            $schedules = array();
            $data['schedules'] = $schedules;
        }
        $data['date'] = $date;
        $this->load->view('templates/schedule', $data);
    }

    public function delete($id){
        if($this->schedule_model->delete_schedule($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }
}
