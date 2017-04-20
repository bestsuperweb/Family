<?php
class Test_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_test( $aupair_id){

        	$data = array(
                            'aupair_id'     => $aupair_id,
                            'tester'        => 'Luis Fabiano',
                            'description'   => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nullam tincidunt mattis pretium.Suspendisse vitae nibh ullamcorper, convallis ipsum et, tincidunt ligula. Suspendisse ut pulvinar elit. Nam at vulputate purus, scelerisque pharetra lectus. Curabitur tincidunt, risus nec condimentum tincidunt, turpis orci vulputate elit, ultricies pharetra metus nisl et est. Vestibulum ac velit eu mi sollicitudin fermentum. Ut sed sem dolor. Praesent sed velit ut dolor molestie gravida. Aliquam erat volutpat. Duis et nibh risus.<br><br>Donec efficitur molestie odio vel volutpat. In hac habitasse platea dictumst. Cras egestas vestibulum tinci- dunt. Fusce eget arcu nec nisi dictum ornare ac a odio. Proin bibendum lectus arcu, in maximus quam feu- giat ut. Sed pretium enim sit amet tristique scelerisque. Nulla massa felis, maximus sed libero sed, mollis blandit massa. Praesent volutpat, dui in vulputate lacinia, massa felis sodales justo, nec facilisis orci dolor auctor elit.'
                        );
                $query = $this->db->get_where('tests', array('aupair_id' => $aupair_id));

                if($query->num_rows() > 0){
                        $this->db->delete('tests', array('aupair_id' => $aupair_id));
                }
                $this->db->insert('tests', $data);
                $insert_id = $this->db->insert_id();
                return  $insert_id;

        }

        public function update_test( $aupair_id, $step = 1){

        	switch ($step) {
        		case 1:
        			$data = array(
                            'tester'        => $this->input->post('tester'),
                            'description'   => $this->input->post('description'),
                            'Enthusiastic'  => $this->input->post('Enthusiastic'),
                            'Outgoing'      => $this->input->post('Outgoing'),
                            'Proactive'     => $this->input->post('Proactive'),
                            'Energetic'     => $this->input->post('Energetic'),
                            'Caring'        => $this->input->post('Caring'),
                            'Flexible/adaptivel'    => $this->input->post('Flexible/adaptivel'),
                            'Active'        => $this->input->post('Active'),
                            'Sportive'      => $this->input->post('Sportive'),
                            'Organized'     => $this->input->post('Organized'),
                            'Responsible'   => $this->input->post('Responsible'),
                            'Smart'         => $this->input->post('Smart'),
                            'Independent'   => $this->input->post('Independent'),
                            'Emotional'     => $this->input->post('Emotional'),
                            'Modset'        => $this->input->post('Modset'),
                            'Honest/open'   => $this->input->post('Honest/open'),
                            'Quiet'         => $this->input->post('Quiet'),
                            'Self-reliant'  => $this->input->post('Self-reliant'),
                            'Partygirl'     => $this->input->post('Partygirl'),
                            'Creative'      => $this->input->post('Creative'),
                            'Patient'       => $this->input->post('Patient')
                        );
        			break;
        		case 2:                   
        			$data = array(
                            'Enthusiastic'  => $this->input->post('Enthusiastic'),
                            'Outgoing'      => $this->input->post('Outgoing'),
                            'Proactive'     => $this->input->post('Proactive'),
                            'Energetic'     => $this->input->post('Energetic'),
                            'Caring'        => $this->input->post('Caring'),
                            'Flexible/adaptivel'    => $this->input->post('Flexible/adaptivel'),
                            'Active'        => $this->input->post('Active'),
                            'Sportive'      => $this->input->post('Sportive'),
                            'Organized'     => $this->input->post('Organized'),
                            'Responsible'   => $this->input->post('Responsible'),
                            'Smart'         => $this->input->post('Smart'),
                            'Independent'   => $this->input->post('Independent'),
                            'Emotional'     => $this->input->post('Emotional'),
                            'Modset'        => $this->input->post('Modset'),
                            'Honest/open'   => $this->input->post('Honest/open'),
                            'Quiet'         => $this->input->post('Quiet'),
                            'Self-reliant'  => $this->input->post('Self-reliant'),
                            'Partygirl'     => $this->input->post('Partygirl'),
                            'Creative'      => $this->input->post('Creative'),
                            'Patient'       => $this->input->post('Patient')
                        );
        			break;
        		
        		default:
        			# code...
        			break;
        	}

        	$result = $this->db->update('tests', $data, array('aupair_id' => $aupair_id));

            return $result;
        }

        public function get_test($aupair_id){
            $query = $this->db->get_where('tests', array('aupair_id' => $aupair_id));
            return $query->row_array();
        }

        public function get_tests_by_hbn(){
            $query = $this->db->get('tests');
            return $query->result_array();
        }

        public function delete_test($test_id){
                       
            $result = $this->db->delete('tests', array('id' => $test_id));
            return $result;
        }
    }