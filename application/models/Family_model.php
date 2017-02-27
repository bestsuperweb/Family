<?php
class Family_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_family()
        {
                $data = array(
                                'phone_number'  => $this->input->post('fa_phone'),
                                'contact_email' => $this->input->post('fa_email'),
                                'postal_code'   => $this->input->post('fa_zipcode'),
                                'house_number'  => $this->input->post('fa_housenumber'),
                                'street'        => $this->input->post('fa_street'),
                                'place'         => $this->input->post('fa_place'),
                                'status'        => '1. intake'
                        );
                $query = $this->db->get_where('families', array('contact_email' => $this->input->post('fa_email')));

                if($query->num_rows() < 1){
                        $this->db->insert('families', $data);
                        $insert_id = $this->db->insert_id();

                        return  $insert_id;
                }
                
        }

        public function update_family($step = 1, $family_id)
        {
                switch ($step) {
                        case 1:
                                $data = array(
                                        'number_kids'           => $this->input->post('fa_kids'),
                                        'living_situation'      => $this->input->post('fa_living_situation'),
                                        'number_bedrooms'       => $this->input->post('fa_number_of_rooms'),
                                        'number_bathrooms'      => $this->input->post('fa_bathrooms'),
                                        'religion'              => $this->input->post('fa_religion'),
                                        'practising'            => $this->input->post('fa_practising'),
                                        'pets'                  => $this->input->post('fa_pets'),
                                        'household_help'        => $this->input->post('fa_household_help'),
                                        'cooking'               => $this->input->post('fa_cooking'),
                                        'cook'                  => $this->input->post('fa_cook'),
                                        'eating'                => $this->input->post('fa_eating'),
                                        'ilness'                => $this->input->post('fa_ilness'),
                                        'illness_influence'     => $this->input->post('fa_ilness_influence'),
                                        'reason'                => $this->input->post('fa_reason')                                        
                                );
                                break;

                        case 2:
                                $responsibilities = is_array($this->input->post('fa_aupair_responsibilities')) ? implode(', ', $this->input->post('fa_aupair_responsibilities')) : '';
                                $household = is_array( $this->input->post('fa_aupair_household')) ? implode(', ', $this->input->post('fa_aupair_household')) : '';
                                $data = array(
                                        'aupair_from'               => $this->input->post('fa_aupair_from'),
                                        'aupair_until'              => $this->input->post('fa_aupair_untill'),
                                        'culture_country'           => $this->input->post('fa_culture_country'),
                                        'aupair_characteristics'    => $this->input->post('fa_aupair_characteristics'),
                                        'aupair_diet'               => $this->input->post('fa_aupair_diet'),
                                        'aupair_smoker'             => $this->input->post('fa_aupair_smoker'),
                                        'aupair_drivers_license'    => $this->input->post('fa_aupair_drivers_license'),
                                        'aupair_skills'             => $this->input->post('fa_aupair_skills'),
                                        'aupair_experience'         => $this->input->post('fa_aupair_experience'),
                                        'aupair_responsibilities'   => $responsibilities,
                                        'aupair_household'          => $household,
                                        'aupair_household_nights'   => $this->input->post('fa_aupair_household_nights'),
                                        'aupair_household_hours'    => $this->input->post('fa_aupair_household_hours')
                                );
                                break;
                        case 3:
                                $data = array(
                                        'pocketmoney_insurance'         => $this->input->post('fa_pocketmoney_insurance'),
                                        'travel'                        => $this->input->post('fa_travel'),
                                        'language_course'               => $this->input->post('fa_language_course'),
                                        'first_aid'                     => $this->input->post('fa_first_aid'),
                                        'hbn_club'                      => $this->input->post('fa_hbn_club'),
                                        'phone_expenses'                => $this->input->post('fa_phone_expenses'),
                                        'return_ticket'                 => $this->input->post('fa_return_ticket')
                                );
                                break;
                        case 4:
                                $data = array(
                                        'place'    => $this->input->post('fa_place'),
                                        'pets'     => $this->input->post('fa_pets'),
                                        'overview' => $this->input->post('fa_overview')
                                        );
                                break;
                        case 5:
                                $data = array(
                                        'overview'    => $this->input->post('fa_overview')
                                        );
                                break;
                        case 6:
                                $data = array(
                                        'photo'    => md5($_FILES["file"]['name'].$family_id).$_FILES["file"]['name']
                                        );
                                break;
                        
                        default:
                                $data = array(
                                        'number_kids'           => $this->input->post('fa_kids'),
                                        'living_situation'      => $this->input->post('fa_living_situation'),
                                        'number_bedrooms'       => $this->input->post('fa_number_of_rooms'),
                                        'number_bathrooms'      => $this->input->post('fa_bathrooms'),
                                        'religion'              => $this->input->post('fa_religion'),
                                        'practising'            => $this->input->post('fa_practising'),
                                        'pets'                  => $this->input->post('fa_pets'),
                                        'household_help'        => $this->input->post('fa_household_help'),
                                        'cooking'               => $this->input->post('fa_cooking'),
                                        'cook'                  => $this->input->post('fa_cook'),
                                        'eating'                => $this->input->post('fa_eating'),
                                        'ilness'                => $this->input->post('fa_ilness'),
                                        'illness_influence'     => $this->input->post('fa_illness_influence')
                                );
                                break;
                }
                
                $result = $this->db->update('families', $data, array('id' => $family_id));

                return $result;
        }

        public function get_family($family_id)
        {
                $query = $this->db->get_where('families', array('id' => $family_id));

                return $query->row_array();
        }

        public function get_all_families($sort = 'id', $sort_direction = 'asc'){
                $query = $this->db->order_by("$sort $sort_direction")->get('families');
                return $query->result_array();
        }

        public function delete_family($family_id)
        {
                $result = $this->db->delete('families', array('id' => $family_id));

                return $result;
        }

}