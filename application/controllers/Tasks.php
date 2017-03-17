<?php
class Tasks extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('task_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){
        if ($this->task_model->insert_task($_POST['task_title'], $_POST['task_deadline'], $_POST['user_id'], $_POST['user_name'])) {
            echo "success";
        }else{
            echo "failure";
        }               
    }

    public function update($step, $task_id){
        if($this->task_model->update_task($step, $task_id)){
            echo 'success';
        }else{
            echo 'failure';
        }
    }

    public function get($user_id){
        if($tasks = $this->task_model->get_task($user_id)){
            $data['tasks'] = $tasks;                        
        }else{
            $tasks = array();
            $data['tasks'] = $tasks;
        }
        return $data['tasks'];
    }

    public function delete($id){
        if($this->task_model->delete_task($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    
}