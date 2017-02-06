<?php
class Kid_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_kid()
        {
                for ($i=1; $i <= $this->input->post('fa_kids'); $i++) { 
                        $data = array(
                                'name'     => $this->input->post('fa_k'.$i.'_name'), 
                                'gender'   => $this->input->post('fa_k'.$i.'_gender'),
                                'birthday' => $this->input->post('fa_k'.$i.'_date_of_birth'),
                                'age'      => $this->input->post('fa_k'.$i.'_age'),
                                'school'   => $this->input->post('fa_k'.$i.'_school'),
                                'monday'   => $this->input->post('fa_k'.$i.'_monday'),
                                'tuesday'  => $this->input->post('fa_k'.$i.'_tuesday'),
                                'wednesday'=> $this->input->post('fa_k'.$i.'_wednesday'),
                                'thursday' => $this->input->post('fa_k'.$i.'_thursday'),
                                'friday'   => $this->input->post('fa_k'.$i.'_friday'),
                                'commute'  => $this->input->post('fa_k'.$i.'_commute'),
                                'family_id'=> $this->input->post('family_id')
                        );
                        $query = $this->db->get_where('kids', array('name' => $this->input->post('fa_k'.$i.'_name'), 
                                                                        'family_id' => $this->input->post('family_id')));
                        
                        if($query->num_rows() < 1){
                                $this->db->insert('kids', $data);
                        }
                        
                }                

                
        }

        public function update_kid($tab = 1, $family_id)
        {
                $query = $this->db->get_where('kids', array('family_id' => $family_id));
                $kids = $query->result_array();
                foreach ($kids as $k => $value) {
                        $key = $k + 1;
                        switch ($tab) {
                                case 1:
                                        $data = array(
                                                'name'     => $this->input->post('fa_k'.$key.'_name'), 
                                                'gender'   => $this->input->post('fa_k'.$key.'_gender'),
                                                'birthday' => $this->input->post('fa_k'.$key.'_date_of_birth'),
                                                'age'      => $this->input->post('fa_k'.$key.'_age'),
                                                'school'   => $this->input->post('fa_k'.$key.'_school'),
                                                'monday'   => $this->input->post('fa_k'.$key.'_monday'),
                                                'tuesday'  => $this->input->post('fa_k'.$key.'_tuesday'),
                                                'wednesday'=> $this->input->post('fa_k'.$key.'_wednesday'),
                                                'thursday' => $this->input->post('fa_k'.$key.'_thursday'),
                                                'friday'   => $this->input->post('fa_k'.$key.'_friday'),
                                                'commute'  => $this->input->post('fa_k'.$key.'_commute')
                                        );
                                        break;
                                case 2:
                                        $data = array(
                                                'name'     => $this->input->post('fa_k'.$key.'_name')
                                        );
                                        break;
                                
                                default:
                                        $data = array(
                                                'name'     => $this->input->post('fa_k'.$key.'_name'), 
                                                'gender'   => $this->input->post('fa_k'.$key.'_gender'),
                                                'birthday' => $this->input->post('fa_k'.$key.'_date_of_birth'),
                                                'age'      => $this->input->post('fa_k'.$key.'_age'),
                                                'school'   => $this->input->post('fa_k'.$key.'_school'),
                                                'monday'   => $this->input->post('fa_k'.$key.'_monday'),
                                                'tuesday'  => $this->input->post('fa_k'.$key.'_tuesday'),
                                                'wednesday'=> $this->input->post('fa_k'.$key.'_wednesday'),
                                                'thursday' => $this->input->post('fa_k'.$key.'_thursday'),
                                                'friday'   => $this->input->post('fa_k'.$key.'_friday'),
                                                'commute'  => $this->input->post('fa_k'.$key.'_commute')
                                        );
                                        break;
                        }                

                        $this->db->update('kids', $data, array('id' => $value['id']));
                }               

        }

        public function get_kid($family_id)
        {
                $query = $this->db->get_where('kids', array('family_id' => $family_id));
                return $query->result_array();
        }

        public function delete_kid()
        {
                

                $this->db->delete('kids', $data, array('id' => $this->input->post('family_id')));
        }

}