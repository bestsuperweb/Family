<?php
class Update_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_update( $hbn_update, $user_update, $user_id, $user_name){

        	$data = array(
                            'hbn_update'    => $hbn_update,
                            'user_update'   => $user_update,
                            'created_date'  => date("Y-m-d"),
                            'user_id'       => $user_id,
                            'user_name'     => $user_name  
                        );
                $query = $this->db->get_where('updates', array('hbn_update' => $hbn_update, 'user_id' => $user_id));

                if($query->num_rows() > 0){
                        $this->db->delete('updates', array('hbn_update' => $hbn_update, 'user_id' => $user_id));
                }
                $this->db->insert('updates', $data);
                $insert_id = $this->db->insert_id();
                return  $insert_id;

        }

        public function update_update($step = 1, $update_id){

        	switch ($step) {
        		case 1:
        			$data = array(
                            'status' => 'complete'
                        );
        			break;
        		case 2:
                   
        			$data = array(
                           
                        );
        			break;
        		
        		default:
        			# code...
        			break;
        	}

        	$result = $this->db->update('updates', $data, array('id' => $update_id));

            return $result;
        }

        public function get_update($user_id){
            $query = $this->db->order_by("created_date DESC")->get_where('updates', array('user_id' => $user_id));
            return $query->result_array();
        }

        public function get_updates_by_hbn(){
            $query = $this->db->order_by("created_date DESC")->get('updates');
            return $query->result_array();
        }

        public function delete_update($update_id){
                       
            $result = $this->db->delete('updates', array('id' => $update_id));
            return $result;
        }
    }