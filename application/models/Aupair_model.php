<?php
class Aupair_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_aupair(){

        	$data = array(
                            'full_name'  				=> $this->input->post('ap_full_name'),
                            'gender' 					=> $this->input->post('ap_gender'),
                            'date_of_birth'   			=> $this->input->post('ap_date_of_birth'),
                            'nationality'  				=> $this->input->post('ap_nationality'),
                            'address'        			=> $this->input->post('ap_address'),
                            'email'         			=> $this->input->post('ap_email'),
                            'phone' 					=> $this->input->post('ap_phone'),
                            'skype'   					=> $this->input->post('ap_skype'),
                            'height'  					=> $this->input->post('ap_height'),
                            'weight'        			=> $this->input->post('ap_weight'),
                            'start_date'         		=> $this->input->post('ap_start_date'),
                            'period_of_stay' 			=> $this->input->post('ap_period_of_stay'),
                            'contribution_flight'   	=> $this->input->post('ap_contribution_flight'),
                            'children_under_2'  		=> $this->input->post('ap_children_under_2'),
                            'max_amount_children'   	=> $this->input->post('ap_max_amount_children'),
                            'religion'         			=> $this->input->post('ap_religion'),
                            'interests' 				=> $this->input->post('ap_interests'),
                            'smoker'   					=> $this->input->post('ap_smoker'),
                            'tattoos'  					=> $this->input->post('ap_tattoos'),
                            'piercings'        			=> $this->input->post('ap_piercings'),
                            'education'         		=> $this->input->post('ap_education'),
                            'current_job' 				=> $this->input->post('ap_current_job'),
                            'experience'   				=> $this->input->post('ap_experience'),
                            'aupair_experience'  		=> $this->input->post('ap_aupair_experience'),
                            'swimming'        			=> $this->input->post('ap_swimming'),
                            'drivers_license'       	=> $this->input->post('ap_drivers_license'),
                            'languages' 				=> $this->input->post('ap_languages'),
                            'disclaimer_service_fee'	=> $this->input->post('ap_disclaimer_service_fee'),
                            'place'  					=> $this->input->post('ap_place'),
                            'ap_date'        			=> $this->input->post('ap_date'),
                            'dislaimer_terms_conditions'=> $this->input->post('ap_dislaimer_terms_conditions'),
                            'status'                    => '1. intake'
                        );
                $query = $this->db->get_where('aupairs', array('email' => $this->input->post('ap_email')));

                if($query->num_rows() < 1){
                        $this->db->insert('aupairs', $data);
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }

        }

        public function update_aupair($step = 1, $aupair_id){

        	switch ($step) {
        		case 1:
        			$data = array(
                            'full_name'  				=> $this->input->post('ap_full_name'),
                            'gender' 					=> $this->input->post('ap_gender'),
                            'date_of_birth'   			=> $this->input->post('ap_date_of_birth'),
                            'nationality'  				=> $this->input->post('ap_nationality'),
                            'email'         			=> $this->input->post('ap_email'),
                            'phone' 					=> $this->input->post('ap_phone'),
                            'skype'   					=> $this->input->post('ap_skype'),
                            'relationship_status'		=> $this->input->post('ap_relationship_status'),
                            'children'  		        => $this->input->post('ap_children'),
                            'current_job' 				=> $this->input->post('ap_current_job'),
                            'education'         		=> $this->input->post('ap_education'),
                            'height'  					=> $this->input->post('ap_height'),
                            'weight'        			=> $this->input->post('ap_weight'),
                            'mental_condition'			=> $this->input->post('ap_mental_condition'),
                            'physical_condition'		=> $this->input->post('ap_physical_condition'),
                            'condition_family'			=> $this->input->post('ap_condition_family'),
                            'allergies'					=> $this->input->post('ap_alergies'),
                            'diet'						=> $this->input->post('ap_diet'),
                            'smoker'   					=> $this->input->post('ap_smoker'),
                            'medicine'					=> $this->input->post('ap_medicine'),
                            'tattoos'					=> $this->input->post('ap_tattoos'),
                            'piercings'					=> $this->input->post('ap_piercings'),
                            'overview'                  => $this->input->post('ap_overview')
                        );
        			break;
        		case 2:
                    $experience_babies = is_array($this->input->post('ap_experience_babies')) ? implode(', ', $this->input->post('ap_experience_babies')) : '';
                    $experience_toddlers = is_array($this->input->post('ap_experience_toddlers')) ? implode(', ', $this->input->post('ap_experience_toddlers')) : '';
                    $experience_kids = is_array($this->input->post('ap_experience_kids')) ? implode(', ', $this->input->post('ap_experience_kids')) : '';
                    $experience_household =is_array($this->input->post('ap_experience_household')) ? implode(', ', $this->input->post('ap_experience_household')) : '';
        			$data = array(
                            'english_level'             => $this->input->post('ap_english_level'),
                            'other_languages'           => $this->input->post('ap_other_languages'),
                            'biking_experience'         => $this->input->post('ap_biking_experience'),
                            'drivers_license'           => $this->input->post('ap_drivers_license'),
                            'tickets'                   => $this->input->post('ap_tickets'),
                            'cooking_level'             => $this->input->post('ap_cooking_level'),
                            'first_aid'                 => $this->input->post('ap_first_aid'),
                            'swimming'                  => $this->input->post('ap_swimming'),
                            'school_university'         => $this->input->post('ap_school_university'),
                            'major'                     => $this->input->post('ap_major'),
                            'former_jobs'               => $this->input->post('ap_former_jobs'),
                            'kids_age'                  => $this->input->post('ap_kids_age'),
                            'kids_time'                 => $this->input->post('ap_kids_time'),
                            'experience_babies'         => $experience_babies,
                            'experience_toddlers'       => $experience_toddlers,
                            'experience_kids'           => $experience_kids,
                            'kids_sametime'             => $this->input->post('ap_kids_sametime'),
                            'experience_disability'     => $this->input->post('ap_experience_disability'),
                            'not_willing'               => $this->input->post('ap_not_willing'),
                            'most_liked'                => $this->input->post('ap_most_liked'),
                            'most_challenging'          => $this->input->post('ap_most_challenging'),
                            'favourite_activities'      => $this->input->post('ap_favourite_activities'),
                            'experience_household'      => $experience_household,
                            'personnel'                 => $this->input->post('ap_personnel'),
                            'extra_info'                => $this->input->post('ap_extra_info')
                        );
        			break;
        		
        		default:
        			# code...
        			break;
        	}

        	$result = $this->db->update('aupairs', $data, array('id' => $aupair_id));

            return $result;

        }

        public function get_aupair($aupair_id){
            $query = $this->db->get_where('aupairs', array('id' => $aupair_id));

            return $query->row_array();
        }

        public function get_all_aupairs($search = '', $sort = 'id', $sort_direction = 'asc'){
            $query = $this->db->like('full_name', $search)->order_by("$sort $sort_direction")->get('aupairs');
            return $query->result_array();
        }

        public function delete_aupair($aupair_id){
            $result = $this->db->delete('aupairs', array('id' => $aupair_id));

            return $result;
        }
    }