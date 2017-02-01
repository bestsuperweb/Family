<?php
class Parent_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_parent($family_id)
        {
                $data1 = array(
                                'firstname'     => $this->input->post('fa_pa1_first_name'), 
                                'lastname'      => $this->input->post('fa_pa1_last_name'),
                                'birthday'      => $this->input->post('fa_pa1_date_of_birth'),
                                'marital_status'=> $this->input->post('fa_pa1_marital_status'),
                                'nationality'   => $this->input->post('fa_pa1_nationality'),
                                'mobile_number' => $this->input->post('fa_pa1_mobile'),
                                'email'         => $this->input->post('fa_pa1_email'),
                                'gender'        => 1,
                                'family_id'     => $family_id
                        );

                $data2 = array(
                                'firstname'     => $this->input->post('fa_pa2_first_name'), 
                                'lastname'      => $this->input->post('fa_pa2_last_name'),
                                'birthday'      => $this->input->post('fa_pa2_date_of_birth'),
                                'marital_status'=> $this->input->post('fa_pa2_marital_status'),
                                'nationality'   => $this->input->post('fa_pa2_nationality'),
                                'mobile_number' => $this->input->post('fa_pa2_mobile'),
                                'email'         => $this->input->post('fa_pa2_email'),
                                'gender'        => 0,
                                'family_id'     => $family_id
                        );
                $query = $this->db->get_where('parents', array('email' => $this->input->post('fa_pa1_email')));
                if($query->num_rows() < 1){
                        $this->db->insert('parents', $data1);
                        $this->db->insert('parents', $data2);
                }

        }

        public function update_parent($step = 1)
        {
                switch ($step) {
                        case 1:
                                $work_days1 = is_array( $this->input->post('fa_pa1_work_days')) ? implode(', ', $this->input->post('fa_pa1_work_days')) : '';
                                $work_days2 = is_array( $this->input->post('fa_pa2_work_days')) ? implode(', ', $this->input->post('fa_pa2_work_days')) : '';

                                $data1 = array(
                                        'job_description'   => $this->input->post('fa_pa1_job'), 
                                        'company_name'      => $this->input->post('fa_pa1_company'),
                                        'location_job'      => $this->input->post('fa_pa1_work_location'),
                                        'work_days'         => $work_days1,
                                        'travel_work'       => $this->input->post('fa_pa1_commute'),
                                        'sport_interest'    => $this->input->post('fa_pa1_interests'),
                                        'characteristics'   => $this->input->post('fa_pa1_character')
                                );

                                $data2 = array(
                                        'job_description'   => $this->input->post('fa_pa2_job'), 
                                        'company_name'      => $this->input->post('fa_pa2_company'),
                                        'location_job'      => $this->input->post('fa_pa2_work_location'),
                                        'work_days'         => $work_days2,
                                        'travel_work'       => $this->input->post('fa_pa2_commute'),
                                        'sport_interest'    => $this->input->post('fa_pa2_interests'),
                                        'characteristics'   => $this->input->post('fa_pa2_character')
                                );
                                break;

                        case 2:
                                $data1 = array(
                                        'firstname'   => $this->input->post('fa_pa1_first_name'), 
                                        'lastname'    => $this->input->post('fa_pa1_last_name')
                                );

                                $data2 = array(
                                        'firstname'   => $this->input->post('fa_pa2_first_name'), 
                                        'lastname'    => $this->input->post('fa_pa2_last_name')
                                );
                                break;
                        
                        default:
                                $work_days1 = is_array( $this->input->post('fa_pa1_work_days')) ? implode(', ', $this->input->post('fa_pa1_work_days')) : '';
                                $work_days2 = is_array( $this->input->post('fa_pa2_work_days')) ? implode(', ', $this->input->post('fa_pa2_work_days')) : '';

                                $data1 = array(
                                        'job_description'   => $this->input->post('fa_pa1_job'), 
                                        'company_name'      => $this->input->post('fa_pa1_company'),
                                        'location_job'      => $this->input->post('fa_pa1_work_location'),
                                        'work_days'         => $work_days1,
                                        'travel_work'       => $this->input->post('fa_pa1_commute'),
                                        'sport_interest'    => $this->input->post('fa_pa1_interests'),
                                        'characteristics'   => $this->input->post('fa_pa1_character')
                                );

                                $data2 = array(
                                        'job_description'   => $this->input->post('fa_pa2_job'), 
                                        'company_name'      => $this->input->post('fa_pa2_company'),
                                        'location_job'      => $this->input->post('fa_pa2_work_location'),
                                        'work_days'         => $work_days2,
                                        'travel_work'       => $this->input->post('fa_pa2_commute'),
                                        'sport_interest'    => $this->input->post('fa_pa2_interests'),
                                        'characteristics'   => $this->input->post('fa_pa2_character')
                                );
                                break;
                }
                

                $this->db->update('parents', $data1, array('family_id' => $this->input->post('family_id'), 'gender' => 1));
                $this->db->update('parents', $data2, array('family_id' => $this->input->post('family_id'), 'gender' => 0));
        }

        public function get_parent($family_id)
        {
                $query = $this->db->get_where('parents', array('family_id' => $family_id));
                return $query->result_array();
        }

        public function delete_parent()
        {
                

                $this->db->delete('parents', $data, array('id' => $_POST['id']));
        }

}