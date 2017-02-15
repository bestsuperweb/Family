<?php
class Document_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_document($file_name, $title, $uploader, $user_id, $status = 'review'){

        	$data = array(
                            'name'  		=> $file_name,
                            'title'         => $title,
                            'uploader'      => $uploader,
                            'upload_date'   => date("Y-m-d"),
                            'approved_date' => '',
                            'user_id'       => $user_id,
                            'status'        =>  $status      
                        );
                $query = $this->db->get_where('documents', array('name' => $file_name, 'user_id' => $user_id));

                if($query->num_rows() < 1){
                        $this->db->insert('documents', $data);
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }

        }

        public function update_document($step = 1, $document_id){

        	switch ($step) {
        		case 1:
        			$data = array(
                            'name'          => $this->input->post('doc_name'),
                            'uploader'      => $this->input->post('doc_uploader'),
                            'upload_date'   => $this->input->post('doc_upload_date'),
                            'approved_date' => $this->input->post('doc_approved_date'),
                            'status'        =>  'normal'
                        );
        			break;
        		case 2:
                   
        			$data = array(
                            'name'          => $this->input->post('doc_name'),
                            'uploader'      => $this->input->post('doc_uploader'),
                            'upload_date'   => $this->input->post('doc_upload_date'),
                            'approved_date' => $this->input->post('doc_approved_date'),
                            'status'        =>  'normal'
                        );
        			break;
        		
        		default:
        			# code...
        			break;
        	}

        	$result = $this->db->update('documents', $data, array('id' => $document_id));

            return $result;

        }

        public function get_document($user_id){
            $query = $this->db->get_where('documents', array('user_id' => $user_id));
            return $query->result_array();
        }

        public function delete_document($document_id){
            $document = $this->db->get_where('documents', array('id' => $document_id))->row_array();
            unlink('files/'.$document['name']);            
            $result = $this->db->delete('documents', array('id' => $document_id));
            return $result;
        }
    }