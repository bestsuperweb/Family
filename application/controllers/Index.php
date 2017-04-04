<?php
class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('custom_helper');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
        $this->load->model('schedule_model');
        $this->load->model('aupair_model');
        $this->load->model('document_model');
        $this->load->model('notity_model');
        $this->load->model('task_model');
        $this->load->model('update_model');
        $this->load->model('familyreport_model');
        $this->load->model('aupairreport_model');          

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }

    }

    public function home()
    {
    	$data['title'] = "Home";
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        // if($data['user_type'] == 'HBN'){
        //     $user = unserialize(urldecode($user_data));
        //     $data['user_type'] = $user[0];
        //     $data['user_id']   = $user[1];
        //     $data['param']     = $user_data;
        // }
        switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);
                    $data['tasks']     = $this->task_model->get_task($this->aauth->get_user()->id);
                    $data['updates']   = $this->update_model->get_update($this->aauth->get_user()->id);
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);
                    $data['tasks']     = $this->task_model->get_task($this->aauth->get_user()->id);
                    $data['updates']   = $this->update_model->get_update($this->aauth->get_user()->id);                    
                    break;
                case 'HBN':

                    $data['updates']   = $this->update_model->get_updates_by_hbn();
                    $data['tasks']     = $this->task_model->get_tasks_by_hbn();
                    break;
                
                default:
                    # code...
                    break;
            }
       
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/home', $data);
        $this->load->view('templates/footer');
    }

    public function roadmap(){
    	$data['title'] = "Stappenplan";
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;

        switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);                    
                    break;
                
                default:
                    # code...
                    break;
            }

    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap_'.$data['user_type'], $data);
        $this->load->view('templates/footer');
    }

    public function roadmap_profile($tab = 1){
    	$data['title'] = "Stappenplan | Profiel";
    	$data['tab'] = $tab;
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;

        switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);
                    $data['aupairs']   = $this->aupair_model->get_all_aupairs();
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user()->id);
                    $data['family']    = $this->family_model->get_family($data['aupair']['family_name']);
                    $data['family_documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['family']['contact_email']));               
                    break;
                
                default:
                    # code...
                    break;
            }

        $this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap_profile_'.$data['user_type'], $data);
        $this->load->view('templates/footer');	
    }

    public function profile($tab = 1, $user_data=0){
    	$data['title']     = "Profile";
    	$data['tab']       = $tab;

        $data['search'] = isset($_POST['search_key']) ? $_POST['search_key'] : '';
        $data['sort'] = isset($_POST['sort']) ? $_POST['sort'] : 'id';
        $data['sort_direction'] = isset($_POST['sort_direction']) ? $_POST['sort_direction'] : 'desc';
        $data['sort_direction'] = ($data['sort_direction'] == 'asc') ? 'desc' : 'asc';

        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        $data['param']     = '';
        if($data['user_type'] == 'HBN'){
            $user = unserialize(urldecode($user_data));
            $data['user_type'] = $user[0];
            $data['user_id']   = $user[1];
            $data['param']     = $user_data;
        }
        if ($data['user_id']) {

            switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    $data['documents'] = $this->document_model->get_document(   
                                                                                $this->aauth->get_user_id($data['family']['contact_email']), 
                                                                                $data['search'],
                                                                                $data['sort'],
                                                                                $data['sort_direction']
                                                                            );
                    $data['notities']  = $this->notity_model->get_notity($this->aauth->get_user_id($data['family']['contact_email']));
                    $data['tasks']     = $this->task_model->get_task($this->aauth->get_user_id($data['family']['contact_email']));
                    $data['reports']   = $this->familyreport_model->get_familyreport($data['user_id']);
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document(   
                                                                                $this->aauth->get_user_id($data['aupair']['email']), 
                                                                                $data['search'],
                                                                                $data['sort'],
                                                                                $data['sort_direction']
                                                                            );
                    $data['notities']  = $this->notity_model->get_notity($this->aauth->get_user_id($data['aupair']['email']));  
                    $data['tasks']     = $this->task_model->get_task($this->aauth->get_user_id($data['aupair']['email']));
                    $data['reports']   = $this->aupairreport_model->get_aupairreport($data['user_id']);            
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
            redirect('index/home');
        }   	
    }

    public function edit_profile($tab = 1, $user_data=0){
        $data['title']      = "Edit Profile";
        $data['tab']        = $tab;
        
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        $data['param']     = '';

        if($data['user_type'] == 'HBN'){
            $user = unserialize(urldecode($user_data));            
            $data['user_type'] = $user[0];
            $data['user_id']   = $user[1];
            $data['param']     = $user_data;
        }
        switch ($data['user_type']) {
            case 'family':
                $data['family']    = $this->family_model->get_family($data['user_id']);
                $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['family']['contact_email']));
                $data['notities']  = $this->notity_model->get_notity($this->aauth->get_user_id($data['family']['contact_email'])); 
                $data['tasks']     = $this->task_model->get_task($this->aauth->get_user_id($data['family']['contact_email']));
                $data['reports']   = $this->familyreport_model->get_familyreport($data['user_id']);                 
                break;

            case 'aupair':
                $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['aupair']['email']));
                $data['notities']  = $this->notity_model->get_notity($this->aauth->get_user_id($data['aupair']['email'])); 
                $data['tasks']     = $this->task_model->get_task($this->aauth->get_user_id($data['aupair']['email']));     
                $data['reports']   = $this->aupairreport_model->get_aupairreport($data['user_id']);                         
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

    public function save_profile($tab, $user_data=0){

        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        $data['param']     = '';

        if($data['user_type'] == 'HBN'){
            $user = unserialize(urldecode($user_data));            
            $data['user_type'] = $user[0];
            $data['user_id']   = $user[1];
            $data['param']     = $user_data;
        }

        if ( $data['user_type'] == 'family' ){

            $family = $this->family_model->get_family($data['user_id']);
            $parents = $this->parent_model->get_parent($data['user_id']);

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
                            redirect('index/profile/1/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/1/'.$data['param']);
                        }         
                        break;

                    case 2:
                        $this->form_validation->set_rules('fa_kids', 'Number of childs', 'trim|required');
                        $this->form_validation->set_rules('fa_k1_name', 'Name of child', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(1, $data['user_id']);
                            $this->parent_model->update_parent(1, $data['user_id']);
                            $this->kid_model->update_kid(1);
                            redirect('index/profile/2/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/2/'.$data['param']);
                        } 
                        break;

                    case 3:
                        $this->form_validation->set_rules('fa_aupair_from', 'Family Date from', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(2, $data['user_id']);
                            redirect('index/profile/3/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/3/'.$data['param']);
                        } 
                        break;

                    case 4:
                        $this->form_validation->set_rules('fa_overview', 'Text Box', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(5, $data['user_id']);
                            $this->update_model->insert_update(
                                    'De familie '.$parents[0]['lastname'].' heeft de ‘dear au-pair letter’ toegevoegd aan hun profiel.',
                                    'Jullie dear au-pair letter is toegevoegd aan het profiel.',
                                    $this->aauth->get_user()->id,
                                    $parents[0]['lastname']
                                    );
                            $this->task_model->insert_task(
                                    'De familie '.$parents[0]['lastname'].' heeft de ‘dear au-pair letter’ toegevoegd aan hun profiel. Controleer de brief op hun profiel en voorzie de familie waar nodig van tips.',
                                    '1. Upload foto’s om jullie profiel compleet te maken.',
                                    '',
                                    $this->aauth->get_user()->id,
                                    $parents[0]['lastname']
                                    );
                            $this->familyreport_model->insert_familyreport(array('Dear_au-pair_letter_submitted' => 1), $data['user_id']);
                            redirect('index/profile/1/'.$data['param']);
                        }else{
                            redirect('index/roadmap_profile/1/'.$data['param']);
                        } 
                        break;
                    case 5:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(6, $data['user_id'])){
                                $this->update_model->insert_update(
                                    'De familie '.$parents[0]['lastname'].' heeft foto’s toegevoegd aan hun profiel.',
                                    'De foto’s zijn toegevoegd aan jullie profiel.',
                                    $this->aauth->get_user()->id,
                                    $parents[0]['lastname']
                                    );
                                $this->task_model->insert_task(
                                    'De familie '.$parents[0]['lastname'].' heeft foto’s toegevoegd aan hun profiel.',
                                    '1. Ga verder met stap 2 van het stappenplan.',
                                    '',
                                    $this->aauth->get_user()->id,
                                    $parents[0]['lastname']
                                    );
                                $this->familyreport_model->insert_familyreport(array('Photos_uploaded' => 1), $data['user_id']);
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 6:
                        $this->form_validation->set_rules('fa_pa1_first_name', 'First name of parent1', 'trim|required');
                        $this->form_validation->set_rules('fa_pa1_last_name', 'Last name of parent1', 'trim|required');
                        $this->form_validation->set_rules('fa_pa2_first_name', 'First name of parent2', 'trim|required');
                        $this->form_validation->set_rules('fa_pa2_last_name', 'Last name of parent2', 'trim|required');

                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->family_model->update_family(8, $data['user_id']);
                            $this->parent_model->update_parent(3, $data['user_id']);
                            redirect('index/profile/5/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/5/'.$data['param']);
                        } 

                        break;
                    case 7:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(9, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 8:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(10, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 9:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(11, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 10:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(12, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;

                    default:
                        
                        break;
                }

        }else if($data['user_type'] == 'aupair'){

                $aupair = $this->aupair_model->get_aupair($data['user_id']);

                switch ($tab) {
                    case 1:
                        $this->form_validation->set_rules('ap_full_name', 'Name', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->aupair_model->update_aupair(1, $data['user_id']);
                            redirect('index/profile/1/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/1/'.$data['param']);
                        }         
                        break;

                    case 2:
                        $this->form_validation->set_rules('ap_english_level', 'English Level', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->aupair_model->update_aupair(2, $data['user_id']);
                            redirect('index/profile/2/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/2/'.$data['param']);
                        } 
                        break;
                    case 3:
                        $this->form_validation->set_rules('ap_overview', 'Overview', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->update_model->insert_update(
                                    'De au-pair '.$aupair['full_name'].' heeft de ‘dear host family letter’ toegevoegd aan haar profiel.',
                                    'Your ‘dear host family letter’ is added to your profile.',
                                    $this->aauth->get_user()->id,
                                    $aupair['full_name']
                                    );
                            $this->task_model->insert_task(
                                    'De au-pair '.$parents[0]['lastname'].' heeft de ‘dear host family letter’ toegevoegd aan haar profiel. Controleer de brief op haar profiel en voorzie de au-pair waar nodig van tips.',
                                    '1. Upload some pictures to enhance your profile.',
                                    '',
                                    $this->aauth->get_user()->id,
                                    $aupair['full_name']
                                    );
                            $this->aupair_model->update_aupair(4, $data['user_id']);
                            redirect('index/profile/1/'.$data['param']);
                        }else{
                            redirect('index/roadmap_profile/1/'.$data['param']);
                        } 
                        break;  
                    case 4:
                        if (upload($data['user_id']))
                        {
                            if($this->aupair_model->update_aupair(5, $data['user_id'])){
                                $this->update_model->insert_update(
                                    'De au-pair '.$aupair['full_name'].' heeft foto’s toegevoegd aan haar profiel.',
                                    'The pictures have been added to your profile.',
                                    $this->aauth->get_user()->id,
                                    $aupair['full_name']
                                    );
                                $this->task_model->insert_task(
                                    'De au-pair '.$aupair['full_name'].' toegevoegd aan haar profiel. Controleer de foto’s en voorzie haar van tips waar nodig.',
                                    '1. Proceed with the next step of your journey.',
                                    '',
                                    $this->aauth->get_user()->id,
                                    $aupair['full_name']
                                    );
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 5:
                        $this->form_validation->set_rules('ap_status', 'Aupair email', 'trim|required');
                        $this->form_validation->set_rules('ap_email', 'Aupair email', 'trim|required');
                        $this->form_validation->set_rules('ap_skype', 'Aupair skype', 'trim|required');
                        $this->form_validation->set_rules('ap_phone', 'Aupair Mobile', 'trim|required');
                        $this->form_validation->set_rules('ap_date_of_birth', 'Aupair Date of birth', 'trim|required');
                        $this->form_validation->set_rules('ap_nationality', 'Natinality', 'trim|required');
                        $this->form_validation->set_rules('ap_start_date', 'Aupair start date', 'trim|required');
                        if ($this->form_validation->run() === TRUE)
                        {
                            $this->aupair_model->update_aupair(6, $data['user_id']);
                            redirect('index/profile/5/'.$data['param']);
                        }else{
                            redirect('index/edit_profile/5/'.$data['param']);
                        }
                        break;
                    case 6:
                        if (upload($data['user_id']))
                        {
                            if($this->aupair_model->update_aupair(7, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 7:
                        if (upload($data['user_id']))
                        {
                            if($this->aupair_model->update_aupair(8, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 8:
                        if (upload($data['user_id']))
                        {
                            if($this->aupair_model->update_aupair(9, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    case 9:
                        if (upload($data['user_id']))
                        {
                            if($this->aupair_model->update_aupair(10, $data['user_id'])){
                                echo 'sucess';
                            }else{
                                echo 'failure';                            
                            }                 

                        }else{
                            echo 'failure';                            
                        } 
                        break;
                    
                    default:
                        
                        break;
                }
        }


    }

    public function matches(){
    	$data['title'] = "Matches";
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;

        switch ($data['user_type']) {
                case 'family':
                    $data['family']    = $this->family_model->get_family($data['user_id']);
                    $data['parents']   = $this->parent_model->get_parent($data['user_id']);
                    $data['kids']      = $this->kid_model->get_kid($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['family']['contact_email']));
                    $data['aupairs']   = $this->aupair_model->get_all_aupairs();
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['aupair']['email']));
                    $data['families']  = $this->family_model->get_all_families();
                    foreach ($data['families'] as $key => $family) {
                        $parents = $this->parent_model->get_parent($family['id']);
                        $family_name =$parents[0]['lastname'];
                        $data['families'][$key]['name'] = $family_name;
                    }                
                    break;
                
                default:
                    # code...
                    break;
            }

    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/matches', $data);
        $this->load->view('templates/footer');
    }

    public function families(){
        $data['search'] = isset($_POST['search_key']) ? $_POST['search_key'] : '';
        $data['sort'] = isset($_POST['sort']) ? $_POST['sort'] : 'id';
        $data['sort_direction'] = isset($_POST['sort_direction']) ? $_POST['sort_direction'] : 'asc';
        $data['sort_direction'] = ($data['sort_direction'] == 'asc') ? 'desc' : 'asc';

        $data['title'] = "Families";
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        if ($data['sort'] != 'name') {
            $data['families'] = $this->family_model->get_all_families($data['sort'], $data['sort_direction']);
        }else{
            $data['families'] = $this->family_model->get_all_families();
        }        
        foreach ($data['families'] as $key => $family) {

            if ($data['search'] == '') {

                $parents = $this->parent_model->get_parent($family['id']);
                $family_name =$parents[0]['lastname'];
                $data['families'][$key]['name'] = $family_name;

            }else{

                $parents = $this->parent_model->get_parent($family['id']);

                if ( strpos(strtolower($parents[0]['lastname']), strtolower($data['search'])) === false ) {

                    echo strpos(strtolower($parents[0]['lastname']), strtolower($data['search']));
                    unset($data['families'][$key]);

                }else{

                    $family_name =$parents[0]['lastname'];
                    $data['families'][$key]['name'] = $family_name;

                }                
            }            
        }
        if ($data['sort'] == 'name') {
            if ($data['sort_direction'] == 'asc') {
                $data['families'] = $this->array_orderby($data['families'], 'name', SORT_ASC);            
            }else{
                $data['families'] = $this->array_orderby($data['families'], 'name', SORT_DESC);
            }            
        }

        foreach ($data['families'] as $key => $family) {
            if ($family['aupair_name']) {
                $family_aupair = $this->aupair_model->get_aupair($family['aupair_name']);
                $data['families'][$key]['family_aupair'] = $family_aupair['full_name'];    
            }else{
                $data['families'][$key]['family_aupair'] = '';    
            }
            
        }

        $data['sort_direction'] = ($data['sort_direction'] == 'asc') ? 'desc' : 'asc';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('index/families', $data);
        $this->load->view('templates/footer');        
    }

    public function aupairs(){
        $data['search'] = isset($_POST['search_key']) ? $_POST['search_key'] : '';
        $data['sort'] = isset($_POST['sort']) ? $_POST['sort'] : 'id';
        $data['sort_direction'] = isset($_POST['sort_direction']) ? $_POST['sort_direction'] : 'asc';
        $data['title'] = "Aupairs";
        $data['user_type'] = $this->aauth->get_user_groups()[1]->name;
        $data['user_id']   = $this->aauth->get_user()->name;
        $data['aupairs'] = $this->aupair_model->get_all_aupairs($data['search'], $data['sort'], $data['sort_direction']);
        $data['sort_direction'] = ($data['sort_direction'] == 'asc') ? 'desc' : 'asc';
        // foreach ($data['aupairs'] as $key => $aupair) {
        //     $user_id = $this->aauth->get_user_id($aupair['email']);
        //     $documents = $this->document_model->get_document($user_id);
        //     $data['aupairs'][$key]['document_name'] = $documents[0]['name'];
        // }
        foreach ($data['aupairs'] as $key => $aupair) {
            if ($aupair['family_name']) {
                $aupair_family = $this->parent_model->get_parent($aupair['family_name']);
                $data['aupairs'][$key]['aupair_family'] = $aupair_family[0]['lastname'];
            }else{
                $data['aupairs'][$key]['aupair_family'] = '';
            }
            
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('index/aupairs', $data);
        $this->load->view('templates/footer');
    }

    private function array_orderby()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = array();
                foreach ($data as $key => $row)
                    $tmp[$key] = $row[$field];
                $args[$n] = $tmp;
                }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }

}