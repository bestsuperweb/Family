<?php
class Document extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('document_model');
        $this->load->model('aupair_model');
        $this->load->model('parent_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){

        $status = "";
        $msg = "";
        $file_element_name = 'doc_file';
         
        if (empty($_POST['doc_title']))
        {
            $status = "error";
            $msg = "Please enter a title";
        }
         
        if ($status != "error")
        {
            $config['upload_path'] = 'files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
     
            $this->load->library('upload', $config);
     
            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $uploader = $this->get_uploader();
                $file_id = $this->document_model->insert_document($data['file_name'], $_POST['doc_title'], $uploader, $this->aauth->get_user()->id);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo $status;
        
    }

    public function update($id){
        if($this->document_model->update_document($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    public function get($user_id){
        if($documents = $this->document_model->get_document($user_id)){
            $data['documents'] = $documents;                        
        }else{
            $documents = array();
            $data['documents'] = $documents;
        }
        $data['date'] = $date;
        $this->load->view('templates/document', $data);
    }

    public function delete($id){
        if($this->document_model->delete_document($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    private function get_uploader(){
        if($this->aauth->is_member(4)){
            $parents = $this->parent_model->get_parent($this->aauth->get_user()->name);
            $uploader = $parents[0]['lastname'];
        }
        if($this->aauth->is_member(5)){
            $aupair = $this->aupair_model->get_aupair($this->aauth->get_user()->name);
            $uploader = $aupair['full_name'];
        }
        return $uploader;
    }
    
}