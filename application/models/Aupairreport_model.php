<?php
class Aupairreport_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_aupairreport( $data, $aupair_id){

        	
                $query = $this->db->get_where('aupair_reports', array('aupair_id' => $aupair_id));

                if($query->num_rows() < 1){
                        $this->db->insert('aupair_reports', $data);
                }else{
                        $this->db->update('aupair_reports', $data, array('aupair_id' => $aupair_id));
                }
                return true;

        }

        public function get_aupairreport($aupair_id){
            $query = $this->db->get_where('aupair_reports', array('aupair_id' => $aupair_id));
            return $query->row_array();
        }
    }