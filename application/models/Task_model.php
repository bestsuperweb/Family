<?php
class Task_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_task( $hbn_task, $user_task, $deadline, $user_id, $user_name){

        	$data = array(
                            'hbn_task'      => $hbn_task,
                            'user_task'     => $user_task,
                            'deadline'      => $deadline, 
                            'created_date'  => date("Y-m-d"),
                            'user_id'       => $user_id,
                            'user_name'     => $user_name    
                        );
                $query = $this->db->get_where('tasks', array('hbn_task' => $hbn_task, 'user_id' => $user_id));

                if($query->num_rows() > 0){
                    $this->db->delete('tasks', array('hbn_task' => $hbn_task, 'user_id' => $user_id));
                }
                $this->db->insert('tasks', $data);
                $insert_id = $this->db->insert_id();
                return  $insert_id;

        }

        public function update_task($step = 1, $task_id){

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

        	$result = $this->db->update('tasks', $data, array('id' => $task_id));

            return $result;
        }

        public function get_task($user_id){
            $query = $this->db->get_where('tasks', array('user_id' => $user_id));
            return $query->result_array();
        }

        public function get_tasks_by_hbn(){
            $query = $this->db->get('tasks');
            return $query->result_array();
        }

        public function delete_task($task_id){
            // $task = $this->db->get_where('tasks', array('id' => $task_id))->row_array();
            // if($task['attachment']){
            //     unlink('files/'.$task['attachment']);
            // }            
            $result = $this->db->delete('tasks', array('id' => $task_id));
            return $result;
        }
    }