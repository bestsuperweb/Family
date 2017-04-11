<!-- views/index/roadmap.php  -->   

    <!-- Page Content -->
    <div id="page-content-wrapper" >
        <div class="container-fluid">
            <h1><i><b>Journey</b></i></h1>

            <div class="panel-group roadmap-panel-group" id="accordion">
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			        <img src="<?php

			        if (
			        	($reports['Registration_fee_paid'] == 1) &&
			        	($reports['Agreement_HBN_signed'] == 1) &&
			        	($reports['Interview_form_filled_in'] == 1) &&
			        	($reports['Dear_host_family_letter_written'] == 1) &&
			        	($reports['Pictures_uploaded'] == 1) &&
			        	($reports['Video_uploaded'] == 1)
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/reload-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 1. Application</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse in">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Registration_fee_paid'] == 1) &&
			        	($reports['Agreement_HBN_signed'] == 1) &&
			        	($reports['Interview_form_filled_in'] == 1) &&
			        	($reports['Dear_host_family_letter_written'] == 1) &&
			        	($reports['Pictures_uploaded'] == 1) &&
			        	($reports['Video_uploaded'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/'); ?>">GO TO STEP 1</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
			        <img src="<?php

			        if (
			        	($reports['Personality_test_uploaded'] == 1) &&
			        	($reports['Interview_with_agent_scheduled'] != '0000-00-00 00:00:00')
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 2. Interview</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse2" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Personality_test_uploaded'] == 1) &&
			        	($reports['Interview_with_agent_scheduled'] != '0000-00-00 00:00:00')
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/2'); ?>">GO TO STEP 2</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
			        <img src="<?php

			        if (
			        	($reports['Passport_uploaded'] == 1) &&
			        	($reports['Important_details_uploaded'] == 1) &&
			        	($reports['Criminal_clearance_uploaded'] == 1) &&
			        	($reports['Antecedents_certificate_uploaded'] == 1) &&
			        	($reports['Health_forms_uploaded'] == 1) &&
			        	($reports['TBC_test_uploaded'] == 1) &&
			        	($reports['Birth_certificate_uploaded'] == 1) &&
			        	($reports['Legalisation_uploaded'] == 1) &&
			        	($reports['Apostille_uploaded'] == 1) &&
			        	($reports['Translation_uploaded'] == 1)
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 3. Documents</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse3" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Passport_uploaded'] == 1) &&
			        	($reports['Important_details_uploaded'] == 1) &&
			        	($reports['Criminal_clearance_uploaded'] == 1) &&
			        	($reports['Antecedents_certificate_uploaded'] == 1) &&
			        	($reports['Health_forms_uploaded'] == 1) &&
			        	($reports['TBC_test_uploaded'] == 1) &&
			        	($reports['Birth_certificate_uploaded'] == 1) &&
			        	($reports['Legalisation_uploaded'] == 1) &&
			        	($reports['Apostille_uploaded'] == 1) &&
			        	($reports['Translation_uploaded'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/3'); ?>">GO TO STEP 3</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
			        <img src="<?php

			        if (
			        	($reports['Skypecall_scheduled'] == 1) &&
			        	($reports['Agreement_signed'] == 1) &&
			        	($reports['Timeschedule_signed'] == 1) &&
			        	($reports['Awareness_declaration_signed'] == 1) &&
			        	($reports['Payment_confirmed'] == 1) 
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 4. Matching</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > HBN
			        </span>
			      </h4>
			    </div>
			    <div id="collapse4" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Skypecall_scheduled'] == 1) &&
			        	($reports['Agreement_signed'] == 1) &&
			        	($reports['Timeschedule_signed'] == 1) &&
			        	($reports['Awareness_declaration_signed'] == 1) &&
			        	($reports['Payment_confirmed'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/4'); ?>">GO TO STEP 4</a>
			      </div>
			    </div>
			  </div>
			
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
			        <img src="<?php

			        if (
			        	($reports['Application_visa_sent'] != '0000-00-00') &&
			        	($reports['Date_first_embassy_appointment'] != '0000-00-00') &&
			        	($reports['Visa_uploaded'] == 1) 
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 5. Visa</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse5" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Application_visa_sent'] != '0000-00-00') &&
			        	($reports['Date_first_embassy_appointment'] != '0000-00-00') &&
			        	($reports['Visa_uploaded'] == 1) 
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/5'); ?>">GO TO STEP 5</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
			        <img src="<?php

			        if (
			        	($reports['Insurance_documents_downloaded'] == 1) &&
			        	($reports['Healthcare_insurance_downloaded'] == 1) &&
			        	($reports['Flight_ticket_downloaded'] == 1) &&
			        	($reports['Au-pair_manual_downloaded'] == 1)
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 6. Preparing</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse6" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Insurance_documents_downloaded'] == 1) &&
			        	($reports['Healthcare_insurance_downloaded'] == 1) &&
			        	($reports['Flight_ticket_downloaded'] == 1) &&
			        	($reports['Au-pair_manual_downloaded'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/6'); ?>">GO TO STEP 6</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
			        <img src="<?php

			        if (
			        	($reports['Registered_at_city_hall'] == 1) &&
			        	($reports['BRP_extract_uploaded'] == 1) &&
			        	($reports['Welcome_training_confirmed'] == 1)
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 7. Arrival</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse7" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Registered_at_city_hall'] == 1) &&
			        	($reports['BRP_extract_uploaded'] == 1) &&
			        	($reports['Welcome_training_confirmed'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/7'); ?>">GO TO STEP 7</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
			        <img src="<?php

			        if (
			        	($reports['Evaluation_1_finished'] == 1) &&
			        	($reports['Evaluation_2_finished'] == 1) &&
			        	($reports['Evaluation_3_finished'] == 1) &&
			        	($reports['Evaluation_4_finished'] == 1) &&
			        	($reports['Evaluation_5_finished'] == 1)
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 8. Stay</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse8" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Evaluation_1_finished'] == 1) &&
			        	($reports['Evaluation_2_finished'] == 1) &&
			        	($reports['Evaluation_3_finished'] == 1) &&
			        	($reports['Evaluation_4_finished'] == 1) &&
			        	($reports['Evaluation_5_finished'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/8'); ?>">GO TO STEP 8</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
			        <img src="<?php

			        if (
			        	($reports['Return_ticket_uploaded'] != '0000-00-00') &&
			        	($reports['Proof_of_deregistration_uploaded'] == 1) &&
			        	($reports['Proof_of_return_uploaded'] == 1) 
			        	){
			        	echo base_url('assets/img/check-green.png'); 
			        }else{
			        	echo base_url('assets/img/close-icon.png');
			        }
			        
			        ?>" class="collapse-img"> 9. Return</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse9" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<?php 
			      	if (
			        	($reports['Return_ticket_uploaded'] != '0000-00-00') &&
			        	($reports['Proof_of_deregistration_uploaded'] == 1) &&
			        	($reports['Proof_of_return_uploaded'] == 1)
			        	){
			        ?>

			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All info has been submitted and approved by HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	All documents have been submitted and approved by HBN<br>

			        <?php }else{ ?>

			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	There is still information missing<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Not all documents have been submitted and approved by HBN<br>

			      	<?php } ?>
			      	
			      	<a class="btn next-button" href="<?php echo base_url('index/roadmap_profile/9'); ?>">GO TO STEP 9</a>
			      </div>
			    </div>
			  </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

