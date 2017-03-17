<?php
class Notities extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('notity_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){

        $status = "";
        $msg = "";
        $file_element_name = 'notity_file';
         
        if (empty($_POST['notity_title'])||empty($_POST['notity_content']))
        {
            $status = "error1";
            $msg = "Please enter a title";
        }

        if ($status != "error1")
        {
            $config['upload_path'] = 'files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
     
            $this->load->library('upload', $config);
     
            if (!$this->upload->do_upload($file_element_name))
            {
                $notity_id = $this->notity_model->insert_notity(  
                                                                $_POST['notity_title'], 
                                                                $_POST['notity_content'], 
                                                                NULL, 
                                                                $_POST['user_id']
                                                            );
                if($notity_id)
                {
                    $status = "success";
                }else{
                    $status = 'error3';
                }
            }
            else
            {
                $data       = $this->upload->data();
                $notity_id  = $this->notity_model->insert_notity(  
                                                                $_POST['notity_title'], 
                                                                $_POST['notity_content'], 
                                                                $data['file_name'], 
                                                                $_POST['user_id']
                                                            );
                if($notity_id)
                {
                    $status = "success";
                    $msg    = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error2";
                    $msg    = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo $status;
        
    }

    public function get($user_id){
        if($notities = $this->notity_model->get_notity($user_id)){
            $data['notities'] = $notities;                        
        }else{
            $notities = array();
            $data['notities'] = $notities;
        }
        return $data['notities'];
    }

    public function delete($id){
        if($this->notity_model->delete_notity($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    
}