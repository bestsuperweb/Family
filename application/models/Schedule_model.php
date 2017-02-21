<?php
class Schedule_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_schedule()
        {
                $data = array(
                                'schedule_date' => $this->input->post('sd_date'),
                                'start_time'    => $this->input->post('sd_start_time'),
                                'end_time'      => $this->input->post('sd_end_time'),
                                'title'         => $this->input->post('sd_title'),
                                'content'       => $this->input->post('sd_content'),
                                'schedule_type' => $this->input->post('sd_type'),
                                'user_type'     => $this->input->post('sd_user_type'),
                                'user_id'       => $this->input->post('sd_user_id')
                        );
                $query = $this->db->query("SELECT * FROM schedules WHERE user_type = '".$data['user_type']."' AND user_id = ".$data['user_id']." AND schedule_date = '".$data['schedule_date']."' AND NOT(( start_time >= '".$data['start_time']."' AND start_time >= '".$data['end_time']."') OR ( end_time <= '".$data['start_time']."' AND end_time <= '".$data['end_time']."')) ");
                if($query->num_rows() < 1){
                        if($this->is_valid($data)){
                                $this->db->insert('schedules', $data);
                                $insert_id = $this->db->insert_id();
                                return  $insert_id;
                        }                        
                }
                
        }

        public function update_schedule($id, $mod)
        {
                switch ($mod) {
                    case 1:
                        $data = array(
                                'schedule_date' => $this->input->post('sd_date'),
                                'start_time'    => $this->input->post('sd_start_time'),
                                'end_time'      => $this->input->post('sd_end_time'),
                                'title'         => $this->input->post('sd_title'),
                                'content'       => $this->input->post('sd_content'),
                                'schedule_type' => $this->input->post('sd_type')
                        );
                        break;
                    case 2:
                        $data = array(
                                'schedule_date' => $this->input->post('sd_date'),
                                'start_time'    => $this->input->post('sd_start_time'),
                                'end_time'      => $this->input->post('sd_end_time')
                        );
                        break;
                    
                    default:
                        $data = array(
                                'schedule_date' => $this->input->post('sd_date'),
                                'start_time'    => $this->input->post('sd_start_time'),
                                'end_time'      => $this->input->post('sd_end_time'),
                                'title'         => $this->input->post('sd_title'),
                                'content'       => $this->input->post('sd_content'),
                                'schedule_type' => $this->input->post('sd_type')
                        );
                        break;
                }
                
                $result = $this->db->update('schedules', $data, array('id' => $id));
                return $result;
        }

        public function get_schedule($user_type, $user_id)
        {
                $query = $this->db->get_where('schedules', array('user_type' => $user_type, 'user_id' => $user_id));
                return $query->result_array();
        }

        public function delete_schedule($id)
        {
                $result = $this->db->delete('schedules', array('id' => $id));
                return $result;
        }

        function is_valid($data){
                $monday = date('Y-m-d', strtotime('monday this week', strtotime($data['schedule_date'])));
                $saturday = date('Y-m-d', strtotime('saturday this week', strtotime($data['schedule_date'])));
                        
                $query1 = $this->db->query("SELECT CAST(( SUM( TIME_TO_SEC(end_time) - TIME_TO_SEC(start_time) ) + TIME_TO_SEC('".$data['end_time']."') - TIME_TO_SEC('".$data['start_time']."'))/3600 AS DECIMAL(4,2)) AS `result` FROM schedules WHERE user_type = '".$data['user_type']."' AND user_id = ".$data['user_id']." AND ( schedule_date BETWEEN '".$monday."' AND '".$saturday."')");

                $condition1 = $query1->row_array();

                $query = $this->db->query("SELECT * FROM schedules WHERE user_type = '".$data['user_type']."' AND user_id = ".$data['user_id']." AND schedule_date = '".$data['schedule_date']."' ");                

                if($query->row_array() == NULL){
                        $query2 = $this->db->query("SELECT CAST((TIME_TO_SEC('".$data['end_time']."') - TIME_TO_SEC('".$data['start_time']."'))/3600 AS DECIMAL(4,2)) AS `result` ");
                        
                }else{
                       $query2 = $this->db->query("SELECT CAST(( SUM( TIME_TO_SEC(end_time) - TIME_TO_SEC(start_time) ) + TIME_TO_SEC('".$data['end_time']."') - TIME_TO_SEC('".$data['start_time']."'))/3600 AS DECIMAL(4,2)) AS `result` FROM schedules WHERE user_type = '".$data['user_type']."' AND user_id = ".$data['user_id']." AND schedule_date = '".$data['schedule_date']."' "); 
                }
                

                $condition2 = $query2->row_array();
                
                if (( $condition1['result'] <= 30.00) and ($condition2['result'] <= 8.00)) {
                        return true;
                }
        }

}