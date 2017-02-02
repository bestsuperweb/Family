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
                $query = $this->db->query("SELECT * FROM schedules WHERE user_type = '".$data['user_type']."' AND user_id = ".$data['user_id']." AND schedule_date = ".$data['schedule_date']." AND start_time >= '".$data['start_time']."' AND end_time <= '".$data['end_time']."'");

                if($query->num_rows() < 1){
                        $this->db->insert('schedules', $data);
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }
                
        }

        public function update_schedule()
        {
                $data = array(
                                'schedule_date' => $this->input->post('sd_date'),
                                'start_time'    => $this->input->post('sd_start_time'),
                                'end_time'      => $this->input->post('sd_end_time'),
                                'title'         => $this->input->post('sd_title'),
                                'content'       => $this->input->post('sd_content'),
                                'schdule_type'  => $this->input->post('sd_type'),
                                'user_type'     => $this->input->post('sd_user_type'),
                                'user_id'       => $this->input->post('sd_user_id')
                        );
                $this->db->update('schedules', $data, array('id' => $this->input->post('schedule_id')));
        }

        public function get_schedule($user_type, $user_id)
        {
                $query = $this->db->get_where('schedules', array('user_type' => $user_type, 'user_id' => $user_id));
                return $query->result_array();
        }

        public function delete_schedule()
        {
                $this->db->delete('families', $this, array('id' => $this->input->post('family_id')));
        }

}