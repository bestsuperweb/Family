<?php
class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('family_model');
        $this->load->model('parent_model');
        $this->load->model('kid_model');
    }

    public function home()
    {
    	$data['title'] = "Home";
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/home', $data);
        $this->load->view('templates/footer');
    }

    public function roadmap(){
    	$data['title'] = "Stappenplan";
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap', $data);
        $this->load->view('templates/footer');
    }

    public function roadmap_profile($tab = 1){
    	$data['title'] = "Stappenplan | Profiel";
    	$data['tab'] = $tab;
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/roadmap_profile', $data);
        $this->load->view('templates/footer');	
    }

    public function profile($tab = 1){
    	$data['title']     = "Profile";
    	$data['tab']       = $tab;
        $family_id         = $this->input->get('family_id');
        if ($family_id) {

            $data['family']    = $this->family_model->get_family($family_id);
            $data['parents']   = $this->parent_model->get_parent($family_id);
            $data['kids']      = $this->kid_model->get_kid($family_id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('index/profile', $data);
            $this->load->view('templates/footer');

        }else{

            redirect('families/create');

        }   	
    }

    public function edit_profile($tab = 1){
        $data['title']     = "Edit Profile";
        $data['tab']       = $tab;
        $data['family_id'] = $this->input->get('family_id');
       
        $data['family']    = $this->family_model->get_family($data['family_id']);
        $data['parents']   = $this->parent_model->get_parent($data['family_id']);
        $data['kids']      = $this->kid_model->get_kid($data['family_id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('index/edit_profile', $data);
        $this->load->view('templates/footer');
        
    }

    public function save_profile($tab){
        switch ($tab) {
            case 1:
                $this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');
                $this->form_validation->set_rules('fa_pa1_first_name', 'First name of parent1', 'trim|required');
                $this->form_validation->set_rules('fa_pa1_last_name', 'Last name of parent1', 'trim|required');
                $this->form_validation->set_rules('fa_pa2_first_name', 'First name of parent2', 'trim|required');
                $this->form_validation->set_rules('fa_pa2_last_name', 'Last name of parent2', 'trim|required');
                if ($this->form_validation->run() === TRUE)
                {
                    $this->family_model->update_family(4);
                    $this->parent_model->update_parent(2);
                    $this->kid_model->update_kid(2);
                    redirect('index/profile/1?family_id='.$this->input->post('family_id'));
                }else{
                    redirect('index/edit_profile/1?family_id='.$this->input->post('family_id'));
                }         
                break;

            case 2:
                $this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');
                if ($this->form_validation->run() === TRUE)
                {
                    $this->family_model->update_family(1);
                    $this->parent_model->update_parent(1);
                    $this->kid_model->update_kid(1);
                    redirect('index/profile/2?family_id='.$this->input->post('family_id'));
                }else{
                    redirect('index/edit_profile/2?family_id='.$this->input->post('family_id'));
                } 
                break;

            case 3:
                $this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');
                if ($this->form_validation->run() === TRUE)
                {
                    $this->family_model->update_family(2);
                    redirect('index/profile/3?family_id='.$this->input->post('family_id'));
                }else{
                    redirect('index/edit_profile/3?family_id='.$this->input->post('family_id'));
                } 
                break;

            case 4:
                $this->form_validation->set_rules('family_id', 'Family ID', 'trim|required');
                if ($this->form_validation->run() === TRUE)
                {
                    redirect('index/profile/4?family_id='.$this->input->post('family_id'));
                }else{
                    redirect('index/edit_profile/4?family_id='.$this->input->post('family_id'));
                } 
                break;
            
            default:
                if ($this->form_validation->run() === TRUE)
                {
                    $this->family_model->update_family(4);
                    $this->parent_model->update_parent(2);
                    $this->kid_model->update_kid(2);
                    redirect('index/profile/1?family_id='.$this->input->post('family_id'));
                }else{
                    redirect('index/edit_profile/1?family_id='.$this->input->post('family_id'));
                } 
                break;
        }

    }

    public function matches(){
    	$data['title'] = "Matches";
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/navbar', $data);
        $this->load->view('index/matches', $data);
        $this->load->view('templates/footer');
    }

}