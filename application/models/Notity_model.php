<?php
class Notity_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_notity( $title, $content, $attachment, $user_id){

        	$data = array(
                            'title'         => $title,
                            'content'       => $content,                            
                            'attachment'    => $attachment,
                            'created_date'  => date("Y-m-d"),
                            'user_id'       => $user_id,
                            'hbn_id'        => $this->aauth->get_user()->id 
                        );
                $query = $this->db->get_where('notities', array('title' => $title, 'user_id' => $user_id, 'hbn_id' => $this->aauth->get_user()->id));

                if($query->num_rows() < 1){
                        $this->db->insert('notities', $data);
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }

        }

        public function update_notity($notity_id, $step = 1){

        	switch ($step) {
        		case 1:
        			$data = array(
                            
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

        	$result = $this->db->update('notities', $data, array('id' => $notity_id));

            return $result;
        }

        public function get_notity($user_id){
            $query = $this->db->get_where('notities', array('user_id' => $user_id, 'hbn_id' => $this->aauth->get_user()->id));
            return $query->result_array();
        }

        public function delete_notity($notity_id){
            $notity = $this->db->get_where('notities', array('id' => $notity_id))->row_array();
            if($notity['attachment']){
                unlink('files/'.$notity['attachment']);
            }            
            $result = $this->db->delete('notities', array('id' => $notity_id));
            return $result;
        }
    }