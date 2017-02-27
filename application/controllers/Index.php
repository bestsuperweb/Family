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

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }

    }

    public function home()
    {
    	$data['title'] = "Home";
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
                    $data['aupairs'] = $this->aupair_model->get_all_aupairs();
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
        $this->load->view('index/roadmap_profile_'.$data['user_type'], $data);
        $this->load->view('templates/footer');	
    }

    public function profile($tab = 1, $user_data=0){
    	$data['title']     = "Profile";
    	$data['tab']       = $tab;

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
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['family']['contact_email']));
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['aupair']['email']));                    
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
                break;

            case 'aupair':
                $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['aupair']['email']));                    
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
                            redirect('index/profile/1/'.$data['param']);
                        }else{
                            redirect('index/roadmap_profile/1/'.$data['param']);
                        } 
                        break;
                    case 5:
                        if (upload($data['user_id']))
                        {
                            if($this->family_model->update_family(6, $data['user_id'])){
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
                    break;

                case 'aupair':
                    $data['aupair']    = $this->aupair_model->get_aupair($data['user_id']);
                    $data['documents'] = $this->document_model->get_document($this->aauth->get_user_id($data['aupair']['email']));                    
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