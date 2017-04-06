<?php
class Document extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('document_model');
        $this->load->model('aupair_model');
        $this->load->model('parent_model');
        $this->load->model('update_model');
        $this->load->model('task_model');
        $this->load->model('familyreport_model');
        $this->load->model('aupairreport_model');  

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){

        $status = "";
        $msg = "";
        $file_element_name = 'doc_file';
         
        if (empty($_POST['doc_title']))
        {
            $status = "error";
            $msg = "Please enter a title";
        }
         
        if ($status != "error")
        {
            $config['upload_path'] = 'files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
     
            $this->load->library('upload', $config);
     
            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $uploader = $this->get_uploader();
                $file_id = $this->document_model->insert_document($data['file_name'], $_POST['doc_title'], $uploader, $_POST['user_id']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo $status;
        
    }

    public function update($id, $step = 1){
        if ($step == 3) {
            $config['upload_path'] = 'files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $document = $this->document_model->get_document_by_id($id);

            if (!$this->upload->do_upload('doc_file'))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                if($this->document_model->new_version($id, $data['file_name']))
                {
                    unlink('files/'.$document['name']);
                    echo "success";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                }
            }
        }elseif($step == 2){
            if($this->document_model->update_document($id, $step)){
                $document = $this->document_model->get_document_by_id($id);
                $this->task_model->update_task(1, $document['task_id']);
                echo 'success';
            }else{
                echo "failure";
            }
        }        
    }

    public function get($user_id){
        if($documents = $this->document_model->get_document($user_id)){
            $data['documents'] = $documents;                        
        }else{
            $documents = array();
            $data['documents'] = $documents;
        }
        $data['date'] = $date;
        $this->load->view('templates/document', $data);
    }

    public function delete($id){
        if($result = $this->document_model->delete_document($id)){
            $this->update_model->delete_update($result['update_id']);
            $this->task_model->delete_task($result['task_id']);
            echo 'success';
        }else{
            echo "failure";
        }
    }

    private function get_uploader(){
        if($this->aauth->is_member(4)){
            $parents = $this->parent_model->get_parent($this->aauth->get_user()->name);
            $uploader = $parents[0]['lastname'];
        }
        if($this->aauth->is_member(5)){
            $aupair = $this->aupair_model->get_aupair($this->aauth->get_user()->name);
            $uploader = $aupair['full_name'];
        }
        if($this->aauth->is_member(6)){
            $uploader = 'HBN-'.$this->aauth->get_user()->name;
        }
        return $uploader;
    }

    function upload_document($kind){
        if ($this->aauth->is_member(4)) {
            $parents = $this->parent_model->get_parent($this->aauth->get_user()->name);
        }elseif ($this->aauth->is_member(5)) {
            $aupair = $this->aupair_model->get_aupair($this->aauth->get_use()->name);
        }
        switch ($kind) {
            case 1:
                $file_title     = 'Loondienst-1';
                break;
            case 2:
                $file_title     = 'Loondienst-2';
                break;
            case 3:
                $file_title     = 'Loondienst-3';
                break;
            case 4:
                $file_title     = 'Zelfstandig ondernemer-1';
                break;
            case 5:
                $file_title     = 'Zelfstandig ondernemer-2';
                break;
            case 6:
                $file_title     = 'Zelfstandig ondernemer-3';
                break;
            case 7:
                $file_title     = 'DGA-1';
                break;
            case 8:
                $file_title     = 'DGA-2';
                break;
            case 9:
                $file_title     = 'DGA-3';
                break;
            case 10:
                $file_title     = 'DGA-4';
                break;
            case 11:
                $file_title     = 'DGA-5';
                break;
            case 12:
                $file_title     = 'Eigen vermogen-1';
                break;
            case 13:
                $file_title     = 'Eigen vermogen-2';
                break;
            case 14:
                $file_title     = 'Eigen vermogen-3';
                break;
            case 15:
                $file_title     = 'Agreement';
                $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft een match aangemaakt en de agreement ondertekend.';
                $user_update    = 'Jullie match en agreement zijn aangemaakt. Jullie ontvangen een melding wanneer ook de au-pair de agreement heeft getekend.';
                $hbn_task       = '1. “De familie '.$parents[0]['lastname'].' heeft een match aangemaakt en de agreement ondertekend. Controleer de agreement in de documenten van de familie.”';
                $user_task      = '1. Upload de ondertekende awareness-declaration en keur de timeschedule definitief goed.';
                break;
            case 16:
                $file_title     = 'Awareness declaration';
                if ($this->aauth->is_member(4)) {
                    $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft de awareness declaration en timeschedule ingediend.';
                    $user_update    = 'Jullie hebben de awareness declaration en timeschedule ingediend!';
                    $hbn_task       = '1. “De familie '.$parents[0]['lastname'].' heeft de awareness declaration en timeschedule ingediend. Controleer de awareness declaration en timeschedule in de documenten van de familie.”';
                    $user_task      = '1. Upload de ondertekende awareness-declaration en keur de timeschedule definitief goed.';
                    
                    $this->familyreport_model->insert_familyreport(
                                                                    array('Signed_awareness_declaration_and_timeschedule' => 1), 
                                                                    $this->aauth->get_user()->name
                                                                    );
                }elseif ($this->aauth->is_member(5)) {
                    $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Awareness declaration aangeleverd.';
                    $user_update    = 'You’ve uploaded the awareness declaration. HBN will review and approve the document.';
                    $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Awareness declaration aangeleverd. Het bestand staat klaar voor goedkeuring.';
                    $user_task      = '1. Proceed with step 5 of your journey.';
                }                
                break;
            case 17:
                $file_title     = 'Au-Pair verzekering';
                $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft de aanvraag voor de au-pair verzekering ingediend.';
                $user_update    = 'Jullie aanvraagformulier is ingediend. Na goedkeuring ontvangen jullie terugkoppeling van de verzekeraar.';
                $hbn_task       = '1. “De familie '.$parents[0]['lastname'].' heeft de aanvraag voor de au-pair verzekering ingediend. Sluit de verzekering af bij de verzekeraar.”';
                $user_task      = '1. Download de familie briefing.';
                $this->familyreport_model->insert_familyreport(
                                                                array('Au-pair_insurance_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 18:
                $file_title     = 'Family routine setup';
                $hbn_update     = ' “De familie '.$parents[0]['lastname'].' heeft het family routine setup document ingediend.”';
                $user_update    = 'Jullie family routine setup is ingediend. HBN controleert het document en stuurt het naar de au-pair.';
                $hbn_task       = '1. De familie '.$parents[0]['lastname'].' heeft het family routine setup document ingediend. Het document staat klaar voor goedkeuring.';
                $user_task      = '1. Upload het aangepaste important info doc uit stap 5 van het stappenplan.';
                $this->familyreport_model->insert_familyreport(
                                                                array('Family_routine_doc_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 19:
                $file_title     = 'Important info';
                $hbn_update     = ' “De familie '.$parents[0]['lastname'].' heeft het Important info document ingediend.”';
                $user_update    = 'Jullie Imoprtant info is ingediend. HBN controleert het document en stuurt het naar de au-pair.';
                $hbn_task       = '1. De familie '.$parents[0]['lastname'].' heeft het Important info document ingediend. Het document staat klaar voor goedkeuring.';
                $user_task      = '1. Upload het aangepaste advies cursessen doc uit stap 5 van het stappenplan.';
                $this->familyreport_model->insert_familyreport(
                                                                array('Important_info_doc_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 20:
                $file_title     = 'BRP';
                $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft het bsn nummer en uittreksel van de gemeente ingediend.';
                $user_update    = 'Jullie hebben het bsn-nummer en uittreksel ingediend. HBN controleert het bsn nummer en document.';
                $hbn_task       = '1. “De familie '.$parents[0]['lastname'].' heeft het bsn nummer en uittreksel van de gemeente ingediend. Het document staat klaar voor goedkeuring.”';
                $user_task      = '1. Ga verder met het bevestigen van de tuberculose test.';
                $this->familyreport_model->insert_familyreport(
                                                                array('BSN_extract_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 21:
                $file_title     = 'Terugvlucht au-pair';
                $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft de datum van terugkeer bevestigd en het ticket geüpload.';
                $user_update    = 'Jullie hebben de datum van terugkeer bevestigd en het ticket geüpload';
                $hbn_task       = 'De familie '.$parents[0]['lastname'].' heeft de datum van terugkeer bevestigd en het ticket geüpload. Het ticket staat klaar voor goedkeuring.';
                $user_task      = '1. Ga verder met het bewijs van terugkeer uit stap 8 van het stappenplan.';
                $this->familyreport_model->insert_familyreport(
                                                                array('Return_ticket_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 22:
                $file_title     = 'Bewijs van terugkeer';
                $hbn_update     = 'De familie '.$parents[0]['lastname'].' heeft het bewijs van terugkeer geüpload.';
                $user_update    = 'Jullie hebben het bewijs van terugkeer geüpload. Het document is voor goedkeuring naar HBN verstuurd.';
                $hbn_task       = 'De familie '.$parents[0]['lastname'].' heeft het bewijs van terugkeer geüpload. Het document staat klaar voor goedkeuring.';
                $this->familyreport_model->insert_familyreport(
                                                                array('Proof_of_return_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 23:
                $file_title     = 'Signed agreement';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft de getekende agreement geüpload.';
                $user_update    = 'Your agreement is submitted and sent to HBN for review.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft de getekende agreement geüpload. Het bestand staat klaar voor goedkeuring';
                $user_task      = '1. Proceed with the interview form from step 1 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Agreement_HBN_signed' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 24:
                $file_title     = 'Personality Test';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Personality Test aangeleverd.';
                $user_update    = 'You’ve uploaded the results of the 16 personalities test. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Personality Test aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with scheduling an interview with an agent.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Personality_test_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 25:
                $file_title     = 'Passport';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Passport aangeleverd.';
                $user_update    = 'You’ve uploaded the scan of your passport. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Passport aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the important details document.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Passport_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 26:
                $file_title     = 'Important Details';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Important Details aangeleverd.';
                $user_update    = 'You’ve uploaded the important details doc. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Important Details aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the scan of your passport.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Important_details_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 27:
                $file_title     = 'Criminal Clearance';
                $hbn_update     = ' De au-pair '.$aupair['full_name'].' heeft document Criminal Clearance aangeleverd.';
                $user_update    = 'You’ve uploaded all the criminal clearance forms. HBN will review and approve the documents.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Criminal Clearance aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the important details doc.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Criminal_clearance_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 28:
                $file_title     = 'NMNP Declaration';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document NMNP Declaration aangeleverd.';
                $user_update    = 'You’ve uploaded the non marital/non pregnancy declaration. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document NMNP Declaration aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the test and health form.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Antecedents_certificate_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 29:
                $file_title     = 'Health Form';
                $hbn_update     = ' De au-pair '.$aupair['full_name'].' heeft document "Health Form" aangeleverd.';
                $user_update    = 'You’ve uploaded the test and health form. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document "Health Form" aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the next step of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Health_forms_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 30:
                $file_title     = 'TBC test';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document TBC test aangeleverd.';
                $user_update    = 'You’ve uploaded the tbc test form. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document TBC test aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the unabridged birth certificate step of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('TBC_test_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 31:
                $file_title     = 'Unabridged birth certificate';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Unabridged birth certificate aangeleverd.';
                $user_update    = 'You’ve uploaded the birth certificate. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Unabridged birth certificate aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the legalisation step of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Birth_certificate_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 32:
                $file_title     = 'Legalisation';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Legalisation aangeleverd.';
                $user_update    = 'You’ve uploaded the legalisation. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Legalisation aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the apostille step of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Legalisation_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 33:
                $file_title     = 'Apostille';
                $hbn_update     = ' De au-pair '.$aupair['full_name'].' heeft document Apostille aangeleverd.';
                $user_update    = 'You’ve uploaded the apostille. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Apostille aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the translation step of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Apostille_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 34:
                $file_title     = 'Translation Birth documentation';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Translation Birth documentation aangeleverd.';
                $user_update    = 'You’ve uploaded the translation. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Translation Birth documentation aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with step 4 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Translation_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 35:
                $file_title     = 'Agreement with Family';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Agreement with Family aangeleverd.';
                $user_update    = 'You’ve uploaded the agreement. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Agreement with Family aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the time schedule from step 4 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Agreement_signed' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 36:
                $file_title     = 'Weekly time schedule';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Weekly time schedule aangeleverd.';
                $user_update    = 'You’ve uploaded the time schedule. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Weekly time schedule aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the awareness declaration from step 4 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Timeschedule_signed' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 37:
                $file_title     = 'Visa';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft een foto van haar visum geüpload.';
                $user_update    = 'You’ve uploaded the picture of your visa. HBN will check and approve the document.';
                $hbn_task       = '1. De au-pair '.$aupair['full_name'].' heeft een foto van haar visum geüpload. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with step 6 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Visa_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 38:
                $file_title     = 'Registration city hall';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Registration city hall aangeleverd.';
                $user_update    = 'You’ve uploaded your registration document from city hall. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Registration city hall aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the BRP extract from step 7 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Registered_at_city_hall' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 39:
                $file_title     = 'BRP extract';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document BRP extract aangeleverd.';
                $user_update    = 'You’ve uploaded the BRP extract from city hall. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document BRP extract aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with step 8 of your journey.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('BRP_extract_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 40:
                $file_title     = 'Residence Permit';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Residence Permit aangeleverd.';
                $user_update    = 'You’ve uploaded your residence permit. HBN will review and approve the document.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Residence Permit aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the registration at the city hall.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Residence_card_picked_up' => date("Y-m-d")), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 41:
                $file_title     = 'Proof of deregistration';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Proof of deregistration aangeleverd.';
                $user_update    = 'You’ve uploaded your proof of de-registration.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Proof of deregistration aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = '1. Proceed with the departure process.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Proof_of_deregistration_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
            case 42:
                $file_title     = 'Proof of return';
                $hbn_update     = 'De au-pair '.$aupair['full_name'].' heeft document Proof of return aangeleverd.';
                $user_update    = 'You’ve uploaded your proof of return.';
                $hbn_task       = 'De au-pair '.$aupair['full_name'].' heeft document Proof of return aangeleverd. Het bestand staat klaar voor goedkeuring.';
                $user_task      = 'Review all steps again.';
                $this->aupairreport_model->insert_aupairreport(
                                                                array('Proof_of_return_uploaded' => 1), 
                                                                $this->aauth->get_user()->name
                                                                );
                break;
                       
            default:
                # code...
                break;
        }        
        $documents = $this->document_model->get_document($this->aauth->get_user()->id);
        $document_id = '';
        $document_name = '';
        foreach ($documents as $key => $document) {
            if ($document['title'] == $file_title) {
                $document_name = $document['name'];
                $document_id   = $document['id'];
                unlink('files/'.$document['name']);
            }
        }        
        $file_name = md5($_FILES["file"]['name'].$this->aauth->get_user()->id.$kind).$_FILES["file"]['name'];
        $uploader = $this->get_uploader();

        $task_id = $this->task_model->insert_task( $hbn_task, $user_task, '', $this->aauth->get_user()->id, $uploader );
        $update_id = $this->update_model->insert_update( $hbn_update, $user_update, $this->aauth->get_user()->id, $uploader );
        
        if (upload($this->aauth->get_user()->id, $kind))
        {      
            if ($document_id != '') {
                if($this->document_model->upgrade_document($document_id, $file_name, $uploader, $this->aauth->get_user()->id)){
                    echo 'sucess';
                }else{
                    echo 'failure';                            
                }
            }else{
                if($this->document_model->insert_document($file_name, $file_title, $uploader, $this->aauth->get_user()->id, $task_id, $update_id)){
                    echo 'sucess';
                }else{
                    echo 'failure';                            
                } 
            }                            

        }else{
            echo 'failure';                            
        } 
    }
    
}