<?php
class Familyreport_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_familyreport( $data, $family_id){

            
                $query = $this->db->get_where('family_reports', array('family_id' => $family_id));

                if($query->num_rows() < 1){
                        $this->db->insert('family_reports', $data);
                }else{
                        $this->db->update('family_reports', $data, array('family_id' => $family_id));
                }
                return true;

        }

        public function get_familyreport($family_id)
        {
            $query = $this->db->get_where('family_reports', array('family_id' => $family_id));
            return $query->row_array();
        }
    }