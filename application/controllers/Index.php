<?php
class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('custom_helper');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
        $this->load->model('schedule_model');
        $this->load->model('aupair_model');

        
        $userdata = array( 
                       'user_type'  => 'aupair', 
                       'user_id'    => 2
                    );  
        if($this->session->userdata('user_type') == 'family'){
            $this->session->set_userdata($userdata);
        }     
        
    }

    public function home()
    {
    	$data['title'] = "Home";
        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');

    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/home', $data);
        $this->load->view('templates/footer');
    }

    public function roadmap(){
    	$data['title'] = "Stappenplan";
        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');

    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap', $data);
        $this->load->view('templates/footer');
    }

    public function roadmap_profile($tab = 1){
    	$data['title'] = "Stappenplan | Profiel";
    	$data['tab'] = $tab;
        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');

        $this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap_profile', $data);
        $this->load->view('templates/footer');	
    }

    public function profile($tab = 1){
    	$data['title']     = "Profile";
    	$data['tab']       = $tab;

        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');

        if ($data['user_id']) {

            switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    break;
                
                default:
                    # code...
                    break;
            }    

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('index/profile_'.$data['user_type'], $data);
            $this->load->view('templates/footer');

        }else{

            redirect('families/create');

        }   	
    }

    public function edit_profile($tab = 1){
        $data['title']      = "Edit Profile";
        $data['tab']        = $tab;

        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');
        
        switch ($data['user_type']) {
            case 'family':
                $data['family']    = $this->family_model->get_family($data['user_id']);
                $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                break;

            case 'aupair':
                $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                break;
            
            default:
                # code...
                break;
        }        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('index/edit_profile_'.$data['user_type'], $data);
        $this->load->view('templates/footer');
        
    }

    public function save_profile($tab){

        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');

        if ( $data['user_type'] == 'family' ){

            switch ($tab) {
                    case 1:
                        $this->form_validation->set_rules('fa_pa1_first_name', 'First name of parent1', 'trim|required');
                        $this->form_validation->set_rules('fa_pa1_last_name', 'Last name of parent1', 'trim|required');
                        $this->form_validation->set_rules('fa_pa2_first_name', 'First name of parent2', 'trim|required');
                        $this->form_validation->set_rules('fa_pa2_last_name', 'Last name of parent2', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(4, $data['user_id']);
                            $this->parent_model->update_parent(2, $data['user_id']);
                            $this->kid_model->update_kid(2, $data['user_id']);
                            redirect('index/profile/1');
                        }else{
                            redirect('index/edit_profile/1');
                        }         
                        break;

                    case 2:
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(1, $data['user_id']);
                            $this->parent_model->update_parent(1, $data['user_id']);
                            $this->kid_model->update_kid(1);
                            redirect('index/profile/2');
                        }else{
                            redirect('index/edit_profile/2');
                        } 
                        break;

                    case 3:
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(2, $data['user_id']);
                            redirect('index/profile/3');
                        }else{
                            redirect('index/edit_profile/3');
                        } 
                        break;

                    case 4:
                        if ($this->form_validation->run() === TRUE)
                        {
                            redirect('index/profile/4');
                        }else{
                            redirect('index/edit_profile/4');
                        } 
                        break;
                    
                    default:
                        
                        break;
                }

        }else if($data['user_type'] == 'aupair'){

                switch ($tab) {
                    case 1:
                        $this->form_validation->set_rules('ap_full_name', 'Name', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->aupair_model->update_aupair(1, $data['user_id']);
                            redirect('index/profile/1');
                        }else{
                            redirect('index/edit_profile/1');
                        }         
                        break;

                    case 2:
                        $this->form_validation->set_rules('ap_english_level', 'English Level', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->aupair_model->update_aupair(2, $data['user_id']);
                            redirect('index/profile/2');
                        }else{
                            redirect('index/edit_profile/2');
                        } 
                        break;         
                    
                    default:
                        
                        break;
                }
        }


    }

    public function matches(){
    	$data['title'] = "Matches";
        $data['user_type'] = $this->session->userdata('user_type');
        $data['user_id']   = $this->session->userdata('user_id');
        
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/matches', $data);
        $this->load->view('templates/footer');
    }

}