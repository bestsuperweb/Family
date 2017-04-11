<!-- views/index/roadmap_profile.php  -->
<?php
		$li_class = array();
		$li_class['first'] 	= 'roadmap-top-bar-first';
		$li_class['second'] = 'roadmap-top-bar';
		$li_class['third'] 	= 'roadmap-top-bar';
		$li_class['forth'] 	= 'roadmap-top-bar';
		$li_class['fifth'] 	= 'roadmap-top-bar';
		$li_class['sixth'] 	= 'roadmap-top-bar';
		$li_class['seventh']= 'roadmap-top-bar';
		$li_class['eighth'] = 'roadmap-top-bar';
		$li_class['ninth'] = 'roadmap-top-bar';
		switch ($tab) {
			case 1:
				$li_class['first'] = 'roadmap-top-bar-first-active';
				break;
			case 2:
				$li_class['second'] = 'roadmap-top-bar-active';
				break;
			case 3:
				$li_class['third'] = 'roadmap-top-bar-active';
				break;
			case 4:
				$li_class['forth'] = 'roadmap-top-bar-active';
				break;
			case 5:
				$li_class['fifth'] = 'roadmap-top-bar-active';
				break;
			case 6:
				$li_class['sixth'] = 'roadmap-top-bar-active';
				break;
			case 7:
				$li_class['seventh'] = 'roadmap-top-bar-active';
				break;
			case 8:
				$li_class['eighth'] = 'roadmap-top-bar-active';
				break;
			case 9:
				$li_class['ninth'] = 'roadmap-top-bar-active';
				break;
			
			default:
				$li_class['first'] = 'roadmap-top-bar-first-active';
				break;
		}
?>
<div id="page-content-wrapper" class="roadmap_profile">
    <div class="container-fluid">
    
    <nav class="navbar roadmap-top-nav">
      <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytopbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	    </div>
        <div class="collapse navbar-collapse" id="mytopbar">
		    <ul class="nav navbar-nav">
		      <li class="<?php echo $li_class['first'];?>"><a href="<? echo base_url('index/roadmap_profile/1');?>">
		      <span>&#10112;</span> Application</a></li>
		      <li class="<?php echo $li_class['second'];?>"><a href="<? echo base_url('index/roadmap_profile/2');?>">
		      <span>&#10113;</span> Interview</a></li>
		      <li class="<?php echo $li_class['third'];?>"><a href="<? echo base_url('index/roadmap_profile/3');?>">
		      <span>&#10114;</span> Documents</a></li>
		      <li class="<?php echo $li_class['forth'];?>"><a href="<? echo base_url('index/roadmap_profile/4');?>">
		      <span>&#10115;</span> Matching</a></li>
		      <li class="<?php echo $li_class['fifth'];?>"><a href="<? echo base_url('index/roadmap_profile/5');?>">
		      <span>&#10116;</span> Visa</a></li>
		      <li class="<?php echo $li_class['sixth'];?>"><a href="<? echo base_url('index/roadmap_profile/6');?>">
		      <span>&#10117;</span> Preparing</a></li>
		      <li class="<?php echo $li_class['seventh'];?>"><a href="<? echo base_url('index/roadmap_profile/7');?>">
		      <span>&#10118;</span> Arrival</a></li>
		      <li class="<?php echo $li_class['eighth'];?>"><a href="<? echo base_url('index/roadmap_profile/8');?>">
		      <span>&#10119;</span> Stay</a></li>
		      <li class="<?php echo $li_class['ninth'];?>"><a href="<? echo base_url('index/roadmap_profile/9');?>">
		      <span>&#10120;</span> Return</a></li>
			</ul>
		</div>
	  </div>
    </nav>
<?php if($tab == 1) { ?>
<!-- start tab1 -->
    <h1><i><b>1. Application</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
	    			Welcome to HBN! At this stage, you have decided to become an au pair in the Netherlands and have filled out the registration form on our website. It is also possible that you already found a matching family, so congratulations. However, we still need you to go through the whole process. We are looking forward to guide you in this wonderful experience. We created this personal website to guide you through the different steps in the process. So you, your future Host Family and us will have a clear overview about your profile, documents, the whole process and legal obligations. HBN is here for you to assure you get all the information you need to make this an unforgettable experience.<br><br>
					As your agent, we guide you in gathering of all your documents, guide you in your visa application and especially, we are there for you during your whole exchange period. During your exchange period, we, as agents help you with any conflict, question, doubt you might have with your host family, the culture and or your schedule. We are the ones you can come to every time you feel you need to talk or solve any issue.					
	    		</p>
	    	</div>
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
	    			The process entails 8 steps; Application, Interview, Documents, Matching, Departure to The NL, Arrival in NL, During your Stay, Prepare leave.
					We, HBN NL and your local agents, will be in close contact with you during this whole process. During the period you are still in country of origin your agent can answer all your questions. And when you are here in the Netherlands HBN NL will assist you. However this custom made HBN system will lead you through every step in the process and will inform you about every detail.<br><br>
					So we first would like to get to know you better. Though it is handy to already look at the next step: documents, cause it is good to already start gathering these as soon as possible. If you do not have certain documents like your passport, it is wise to apply for it asap cause it will take some time. Also the application for your birth certificate will take time so you can already apply for them at the necessary official institutions. More information see Documents. If you have a question about this you can ask your agent.
	    		</p>
	    	</div>	    	
	    </div>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >
		        <img src="<?php 
		        		if ($reports['Registration_fee_paid'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 1. Registration fee</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		      			<p>
		      				So we first would like to get to know you better. Though it is handy to already look at the next step: documents, cause it is good to already start gathering these as soon as possible. If you do not have certain documents like your passport, it is wise to apply for it asap cause it will take some time. Also the application for your birth certificate will take time so you can already apply for them at the necessary official institutions. More information see Documents. If you have a question about this you can ask your agent.<br><br>
							In order to proceed with the process we would like you to pay your agent the registration fee of 34 euro you have a agreed upon and is according to the Dutch Law and regulations.
		      			</p>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		      			<h1>Confirm payment</h1>
		      			<br><br>
		      			<a href="#" class="btn next-button">CONFIRM PAYMENT</a>
		      		</div>		      		
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<a href="#collapse2" class="btn next-button update-report" data-step = "10">PROCEED</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Agreement_HBN_signed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 2. Agreement HBN</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		      			<p>
		      				This is a document where both (agency and au pair candidate) acknowledge to be aware of their obligations. You should download, print out, read and if you agree with everything, sign, scan and upload it back to us/here in your profile.
		      			</p>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		      			<h1>Agreement</h1>
		      			<div class="above-drop-file">
							<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Signed agreement') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD DOC</a>
						</div>
						<form action = "<?= base_url('document/upload_document/23') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>		      		
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<a href="#collapse3" class="btn next-button next-step" data-queue = "0" >SUBMIT</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Interview_form_filled_in'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 3. Interview form</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<b>[ FORM ]</b>
		      	<br><br>
		      	<a href="#collapse4" class="btn next-button update-report" data-step = "11" >SUBMIT</a>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Dear_host_family_letter_written'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 4. Dear host family letter </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      <form action="<?= base_url('index/save_profile/3') ?>" method="POST">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		      			<p>
		      				You can see the “Dear host family” letter as your introduction and motivation letter to a possible host family. A host family looking for an au pair will read your “Dear host family” letter to get to know you!
		      			</p>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
		      			<textarea name="ap_overview" class="form-control" rows="8"></textarea>
		      		</div>		      		
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<input type="submit" class="btn next-button" value="SUBMIT" >
		      		</div>
		      	</div>
		      </form>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Pictures_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 5. Pictures </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		      			<p>
		      				Pictures say more than a thousand words therefore you need to upload 4 pictures or you can make four collages. One of you and your family, one of you and your friends, one of you with children and one with pictures of you alone.<br><br>
							<b>Tips:</b> clear and sharp pictures, show your natural self. Pictures all dressed up and in make-up will not work cause you are going to take care of their kids. It is not a casting ;-). Please be aware of the MB's,do not make the collages to big)
		      			</p>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
		      			<form action = "<?= base_url('index/save_profile/4') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>		      		
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<a href="#collapse6" class="btn next-button next-step" data-queue = "1">UPLOAD</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
		        <img src="<?php 
		        		if ($reports['Video_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 6. Video </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		      			<p>
		      				If you feel you are able to present yourself and your life on a video, than this is a great way. However it is really important to be yourself and if you are nervous about filming yourself than try and put everything in the Dear Family letter.<br><br>
							<b>Not mandatory</b>
		      			</p>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
		      			<form action = "<?= base_url('document/upload_document/1') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>		      		
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<a href="#collapse7" class="btn next-button update-report" data-step = "28">UPLOAD</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>
        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/2') ?>" class="btn next-button">STAP 2</a>
        </div>
<!-- end tab1 -->
	<?php }elseif($tab == 2){?>
<!-- start tab2 -->
	<h1><i><b>2. Interview</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>
				To really get to know you, we like to do a personal interview with you. To really see who you are, so we can also see what kind of family would suit you best. You will have a interview with your agent and after this you will have a short interview/meeting with HBN NL.
				</p>
	    	</div>	    			    	
	    </div>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Personality_test_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Personality test </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Before the actual interview we ask you fill out an online personality test and send us the outcome of the test. More information on taking the test you will find on the website of the test itself.<br>
								<a href="#" class="btn next-button">TAKE THE TEST</a><br><br>
								There's no right or wrongs it is just a personality test that will give us an even better idea of your character and personality.<br><br>
								Pleae upload a pdf from the test results. You can make a pdf by “printing” the webpage. In stead of selecting you’re printer you can choose “Save as PDF” as an option.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Test results</h1>
		     				<form action = "<?= base_url('document/upload_document/24') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>	     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button next-step" data-queue = "0">PROCEED</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Interview_with_agent_scheduled'] != '0000-00-00 00:00:00') {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img"> 2. Interview with agent </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Your HBN agent will schedule an interview with you as soon as you have provided them the information in the prior step. In this interview we would like to get to know you better.<br><br>
								This interview is also a chance for you to ask us questions about the program and about your expectations. It is good to prepare yourself well, but it is most important to be yourself. Be open and honest and show us who you are. In this way we are able to do our job best and that is: finding you a nice matching family and prepare you best of what you need to expect from the program. After you have gather the documents in Step 4 your HBN gent will set up a meeting with HBN NL.<br><br>
								After having received your personality test results you and your agent will schedule an interview moment. We use Skype. Please make sure you are available and have a good environment to do a Skype interview.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Schedule interviewl</h1>
		     				<p>Please select one of the suggested times:</p>
		     				<a href="#" class="btn next-button"><?= date('Y-m-d H:i:s') ?></a><br>     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button update-report" data-step = "12">SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/3') ?>" class="btn next-button">STAP 3</a>
        </div>
<!-- end tab2 -->
	<?php }elseif($tab == 3){?>
<!-- start tab3 -->
	<h1><i><b>3. Documents</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				In order to apply for your Au Pair Residence Permit and VISA in the Netherlands, you need to gather the following documents for us to check and keep in file. Even if you have European citizenship and thus do not need a Au Pair Residence permit, you do need to go with an official agency (sponsor) and therefore you also need to gather these documents so we can check these and keep these in file. Some documents take a long time to arrange so please start this process a.s.a.p. 
				</p>
	    	</div>	  
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				Cause we need all these documents before we can apply for your visa or residence card.<br><br>
				We will check every document you upload and we will approve the document so it will appear green. If we have the most important documents approved, we will make your profile ready for matching.
				</p>
	    	</div>  			    	
	    </div>  
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Passport_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Passport pages </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					You need to have a valid passport that is at least valid for half a year when you depart from your country of origin. However it is better to have a valid passport for the whole year. We need to have clear scans of every page of your passport. Please make one clear pdf document of all the passport pages together. and Upload here.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Passport pages</h1>
		     				<form action = "<?= base_url('document/upload_document/25') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button next-step" data-queue = "0" >PROCEED</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Important_details_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Important details document </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					We find it important to have this important information about you in one separate document. We also give your future host family this document so they can use it in case of emergencies. Please fill out these details with care.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Important details</h1>
		     				<div class="above-drop-file">
								<a href="<?php
									foreach ($documents as $key => $document) {
										if ($document['title'] == 'Important Details') {
											echo base_url('files/'.$document['name']);
										}
									}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/26') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button next-step" data-queue = "1" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Criminal_clearance_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Criminal clearance </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					This is a certificate that you do not have a criminal record and you can apply for this at your local police department. Please apply for this clearance a.s.a.p. cause it might take a lot of time to receive it.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Criminal clearance</h1>
							<form action = "<?= base_url('document/upload_document/27') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse4" class="btn next-button next-step" data-queue = "2" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Antecedents_certificate_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Antecedents certificate IND (NON-EU ONLY) </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					In this form you confirm that you did not have any criminal record or have committed any illegal action. You confirm this by the CHECK and put your signature and date.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Antecedents doc</h1>
		     				<div class="above-drop-file">
								<a href="<?php
									foreach ($documents as $key => $document) {
										if ($document['title'] == 'NMNP Declaration') {
											echo base_url('files/'.$document['name']);
										}
									}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/28') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse5" class="btn next-button next-step" data-queue = "3" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Health_forms_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. Health forms </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					It is important to be in good physical and mental health before you start this au pair experience. Also we need to know if you have or had any physical or mental health problems.<br><br>
								The au pair program is a life-changing event and it can have a major affect on you. We, as the responsible agency, and your future host family need to know if you are in good health. That is why we need you to visit a doctor or hospital to do all the general health checks.<br><br>
								You also need to do some health tests such as Hepatitis A and B, pregnancy (preferably you do this test just before we apply for your VISA) and HIV. Your doctor need to fill out and sign this Health Check Form and give you the copies of all the test results so you can upload these.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Health forms</h1>
		     				<div class="above-drop-file">
								<a href="<?php
									foreach ($documents as $key => $document) {
										if ($document['title'] == 'Health Form') {
											echo base_url('files/'.$document['name']);
										}
									}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/29') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse6" class="btn next-button next-step" data-queue = "4" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
		        <img src="<?php 
		        		if ($reports['TBC_test_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  6. TBC test </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					For some countries you need to do a Tuberculosis test. Here you find the list of countries that are excluded from the list.<br><br>
								If your country of origin is not on it than it means you need to do the test before we can apply for your visa and another time when you will arrive in the Netherlands.<br>
								The results of the test you need to send to us.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>TBC test</h1>
							<form action = "<?= base_url('document/upload_document/30') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse7" class="btn next-button next-step" data-queue = "5" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
		        <img src="<?php 
		        		if ($reports['Birth_certificate_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  6. Unabridged birth certificate</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse7" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					The process of receiving, legalisation and translating this certificate can take very long, so please start with the application a.s.a.p. This certificate we do not need before we apply for your visa, however you need to bring this when you go to the Netherlands and hand it over to the city hall when you will register at the house of your Host Family.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Birth certificate</h1>
							<form action = "<?= base_url('document/upload_document/31') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse8" class="btn next-button next-step" data-queue = "6" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
		        <img src="<?php 
		        		if ($reports['Legalisation_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  7. Legalisation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse8" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					To verify the certificate authenticity, it needs to be legalised by the Foreign Ministry of Affairs. They check if it is correct and signed correct and than they stamp it.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Legalisation</h1>
							<form action = "<?= base_url('document/upload_document/32') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse9" class="btn next-button next-step" data-queue = "7" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
		        <img src="<?php 
		        		if ($reports['Apostille_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  8. Apostille </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse9" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					In some countries you need another legalisation. If you live in a country listed below you need the certificate issued by an Apostille by the Dutch Embassy in the country of origin.<br><br>
								<b>https://www.government.nl/topics/legalising-documents/contents/legalising-foreign-documents-per-c ountry</b>
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Apostille</h1>
							<form action = "<?= base_url('document/upload_document/33') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse10" class="btn next-button next-step" data-queue = "8" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
		        <img src="<?php 
		        		if ($reports['Translation_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  9. Translation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse10" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					If your birth certificate is not in English you need to translate the birth certificate by a certified translator. You need to do this preferably before the legalisation and Apostille.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Translation</h1>
							<form action = "<?= base_url('document/upload_document/34') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse11" class="btn next-button next-step" data-queue = "9" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  
        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/4') ?>" class="btn next-button">STAP 4</a>
        </div>
<!-- end tab3 -->
	<?php }elseif($tab == 4){?>
<!-- start tab4 -->
	<h1><i><b>4. Matching</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				Congratulations your profile is now ready for matching! In this stage we will propose you to Host Families whom we think could fit well with your profile. We will of course try and propose you to as many Host Families as possible. We will also propose you Host families if we would like to have your opinion upfront.<br><br>
				Please be aware that it can take a bit longer to find the right family. Sometimes it can go really fast and you will have a match after one skypecall! We feel that the click with a family is very important so we do our best to propose you to the right families. 
				</p>
	    	</div>	   
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				However it is also up to you to express your thoughts and feelings well and share with us. Be honest , open to different families and also keep your patience. It is good to set yuorself open to different families. A skypecall will help you to see if there is a click. So do not say no to a family profile too quickly. Cause meeting them will be best. It will be one entire year you spend with the family so it is important that it really feels good. You will defintely have up's and downs but it is important you are toally behind your match/decision.
				</p>
	    	</div> 			    	
	    </div>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Skypecall_scheduled'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Skypecall </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					When you are proposed to a Host Family and they would like to meet you, you will be notified by email that the profile of the Host Family is ready to be viewed.<br><br>
								When the Host Family has proposed 3 different date and times, you will be notified by email. and that you can<br><br>
								<b>Tips for your skypecall:</b><br><br>
								* Be in time and notify them per message that you are ready and there to start the call. If you are late, delayed or please notify the family in time by email.<br>
								* Be in a quiet and light place<br>
								* Camera position: You face and upper part of your body should be visible. The angle should be right,
								should be horizontally (so not from under or above)<br>
								* Look well your back ground is.<br>
								* Be yourself and open to all questions<br>
								* Show interest in the family. You can also ask them questions. But should be out of interest in the family.<br>
								* Listen well. If you do not hear the question well or do not understand it is perfectly normal so ask again and do not try to answer a question you do not understand well.<br>
								* In a second call you can ask more detailed questions. It is good to have the expectations clear of
								eachother.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Schedule interview</h1>
		     				<p>
		     					Please select one of the suggested times:
		     				</p>
		     				<a href="#" class="btn next-button "><?= date('Y-m-d H:i:s') ?></a>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button update-report" data-step = "13" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Agreement_signed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Agreement with family </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Congratulations! You have a match!<br><br>
								To make your match formal we will ask you to sign the following documents. After both you and your Host Family has signed we are ready to request your VISA/Residence Permit.<br><br>
								In this agreement you will find the general agreements between you and your Host Family. Please be aware that this is not a working contract, it is just a formal document for you and your host family to have a good understanding about the conditions of the program.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Family agreement</h1>
		     				<div class="above-drop-file">
								<a href="<?php 
								foreach ($family_documents as $key => $document) {
									if ($document['title'] == 'Agreement with Family') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/35') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button next-step" data-queue = "0" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Timeschedule_signed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Weekly timeschedule </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					This is the general weekly schedule your future Host Family has set up for you. it is set according Dutch regulations.<br><br>
								<b>- not more than 8 hours per day<br>
								- not more than 30 hours per week<br>
								- not more than 5 days per week<br>
								- one weekend off per month</b><br><br>
								It is important that there is consensus between you and your Host Family about the schedule, therefore you both need to agree on it and date and sign it before we apply for your visa.<br><br>
								Please be aware that in real life there might be slight changes from one week to another. It is good to talk about the schedule and expectations of the Host Family upfront.<br><br>
								If during your year here there are structural changes in the week schedule than both you and your host family need to sign the new schedule again.

		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Weekly timeschedule</h1>
		     				<div class="above-drop-file">
								<a href="<?php
									foreach ($documents as $key => $document) {
										if ($document['title'] == 'Weekly time schedule') {
											echo base_url('files/'.$document['name']);
										}
									}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/36') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse4" class="btn next-button next-step" data-queue = "1">SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Awareness_declaration_signed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Awareness declaration </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					This is a formal document of the IND that repeats all the regulation and conditions to make sure you are aware of those. Please read it carefully and sign and date it.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Awareness doc</h1>
		     				<div class="above-drop-file">
								<a href="<?php
									foreach ($documents as $key => $document) {
										if ($document['title'] == 'Awareness declaration') {
											echo base_url('files/'.$document['name']);
										}
									}
								?>" class="btn next-button">DOWNLOAD DOC</a>
							</div>
							<form action = "<?= base_url('document/upload_document/16') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse5" class="btn next-button next-step" data-queue = "2" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Payment_confirmed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. Contribution flight ticket & visa </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					In this stage you are asked to to do the payment for the contribution to the flight ticket.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Confirm payment</h1>
		     				<p>
		     					Name: HBN The Netherlands<br>
		     					IBAN: NL85RABO0121214321<br>
		     					Bank: Rabobank The Netherlands<br>
		     					Swift/BIC: RABOL2NU <br>
								Amount: €200,-
		     				</p><br><br>
		     				<a href="#" class="btn next-button">CONFIRM PAYMENT</a>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse6" class="btn next-button update-report" data-step = "14" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/5') ?>" class="btn next-button">STAP 5</a>
        </div>
<!-- end tab4 -->
	<?php }elseif($tab == 5){?>
<!-- start tab5 -->
	<h1><i><b>5. Visa</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>
				After we received the signed and dated documents of both you and your Host Family. We can start the VISA Procedure. Au pairs with the European, USA, Canada and Australian nationality (passport). Do not need a Visa to enter the Netherlands. This Visa is only valid for 6 months after issuing and it is meant to enter the Netherlands only. As soon as you arrive in the Netherlands you can pick up your Au PairResidence Card which is valid for the exact period of 1 year.
				</p>
	    	</div>	    			    	
	    </div>
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Application_visa_sent'] != '0000-00-00') {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Visa application </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					HBN sends in the request as soon as all documents are checked and completed. The approval will be send to your embassy after 10 working days.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		     				<div class="visa-panel">
				     			<h3><i>Application sent</i></h3>
				     			<img src="<?= base_url('assets/img/visa-check-approved.png') ?>" class='visa-status' />
				     			<p>Datum: <?= date('Y-m-d') ?></p>
				     		</div>	     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button update-report" data-step = "15" >PROCEED</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Date_first_embassy_appointment'] != '0000-00-00') {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. First embassy appointment </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					For most countries you need to make an appointment upfront. Please make the appointment take 12 working days, to be on the safe side.<br><br>
								<b class="text-danger">[ TO BE DETERMINED ]</b>
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>First appointment</h1>
		     				<br>
		     				<div class="input-group date schedule-date">
			        	  	<input type="text" name="sk_start_date" class="form-control" autocomplete='off'>
			        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			        	  	</div><br>
		     				<!-- <a href="#" class="btn next-button">SUBMIT</a>		     				 -->
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button update-report" data-step = "16" >PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Date_first_embassy_appointment'] != '0000-00-00') {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Second embassy appointment  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					When you visit the embassy they will keep your passport. They will put your visa in your passport. This mostly takes about 5-10 working days.<br><br>
							Enter the date when you can pick up your VISA. Then we can start looking for flight tickets together with your Host Family.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Date of visa pickup</h1>
	     				<br>
	     				<div class="input-group date schedule-date">
		        	  	<input type="text" name="sk_start_date" class="form-control" autocomplete='off'>
		        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		        	  	</div><br>
	     				<a href="#" class="btn next-button tubercolose-button">BEVESTIGEN</a>	     				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse4" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Visa_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Visa pickup </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					When you have picked up your visa, please upload a picture of the visa.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Picture of visa</h1>
	     				<form action = "<?= base_url('document/upload_document/37') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>	     				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse5" class="btn next-button next-step" data-queue = "0">SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/6') ?>" class="btn next-button">STAP 6</a>
        </div>
<!-- end tab5 -->
	<?php }elseif($tab == 6){?>
<!-- start tab6 -->
	<h1><i><b>6. Prepare departure</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>
				It is not going to be long anymore before you will travel to the Netherlands. It is time to prepare yourself for your departure and arrival in the Netherlands. Most of the below will be organised by your Host family and HBN. But it is good to be tuned in and be informed about these subjects.
				</p>
	    	</div>	    			    	
	    </div>
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Insurance_documents_downloaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Au-pair insurance </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					As is stated in the agreement between you and your Host Family, your Host Family is responsible to take out an insurance that covers general medical costs, personal liability and repatriation, this includes urgent unforeseen medical treatment, general practitioner visits, pharmacy and hospital care. The insurance needs to be taken out at the day of departure from the country of origin. HBN makes sure that your Host Family will take out the au pair insurance for the date that you leave your country. Most of the families will take out an au pair ISIS insurance. You can find the conditions here. After your arrival the Polis will be uploaded here and you will receive a notification.<br><br>
								If your Host Family took out another insurance please check with them for the conditions.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Au-pair insurance</h1>
		     				<a href="#" class="btn next-button">DONWLOAD</a>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button update-report" data-step = "17" >PROCEED</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Healthcare_insurance_downloaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Basic healthcare insurance </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					According to the Dutch Law every citizen needs to take out a basic health insurance. This insurance you can only take out from the moment that you are registered in the Netherlands at the city hall as a " Dutch" citizen. As you are insured with the special Au Pair Insurance, so you do not have to be worried that you are not insured. This other insurance is just a formal obligation. You are entitled to receive care allowance from the government for these costs so here you can read: How to apply for the Basic Health Insurance and the Care Allowance.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Healthcare insurance</h1>
		     				<a href="#" class="btn next-button">DONLOAD</a>		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button update-report" data-step = "18">PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Flight_ticket_downloaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Ticket information </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					HBN will book your Go and Return ticket together with your Host Family. HBN works together with a Travel Agency Otravo that is specialized in these Year-Return tickets. For most countries you need a return ticket to leave the country. Next to this a Year Return ticket is more economical than 2 separate tickets.<br><br>
							* Please note that in the year return ticket the return date is still set on around 11 months after arrival. This is thus not the final return date. This date will be changed immediately to 12 months after arrival whenever the airline has their flight schedule ready.<br><br>
							* Payment and what about my contribution to the ticket? In most cases HBN will pay for the ticket and will invoice your Host Family the amount minus your contribution to the ticket.
							When your ticket is booked, we will upload it here and you will get a notification in your email.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Flight ticket</h1>
	     				<a href="#" class="btn next-button ticketinfo-button">DOWNLOAD</a>	     				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse4" class="btn next-button update-report" data-step = "19">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Au-pair_manual_downloaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4 Au-pair manual </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					We have prepared an Au Pair manual for you to help you and advice you in your new life as an Au Pair. In this manual you will find next to the important list of legal obligations also all the advice and information you may need during your au pair year. Maybe print it so you can read it in the plane. You will receive a hard copy as soon as you arrive in the Netherlands though. In the welcome's training we will go through all the aspects discussed in the manual together.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Au-pair Mannual</h1>
	     				<a href="#" class="btn next-button">DOWNLOAD</a>   				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse5" class="btn next-button update-report" data-step = "20">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Au-pair_manual_downloaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. Packing tips </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<p>
	     					* If you have a laptop it is handy to bring it. The family can provide you with a computer but because of the fact that most au pairs now bring their own laptop. Families do not have a spare computer by hand. If you do not have one, please communicate upfront to your Hosts so they can organise something for you.<br><br>
							* If you bring your phone it is handy to check if it is simlocked. If so make sure that the sim lock is taken off so you can use your pharmacyone here with another simcard. * Clothes: In the Netherlands you have different seasons.
	     				</p>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse6" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/7') ?>" class="btn next-button">STAP 7</a>
        </div>
<!-- end tab6 -->
	<?php }elseif($tab == 7){?>
<!-- start tab7 -->
	<h1><i><b>7. Arrival</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>
				Welcome in the Netherlands! We hope you had a good flight and had a nice welcome by your Host Family.<br> There are some important legal obligations to fulfill immediately when you arrive.
				</p>
	    	</div>	    			    	
	    </div>   
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Registered_at_city_hall'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Welcome package  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<p>
		     					We have send you a welcome's package; Some welcome presents like; a keyring for your new house, bike seatcover and some Dutch sweetness. For your host kids we have a cute HBN childrens apron for you to use when baking /cooking! I hope you like it :-)!.
		     				</p><br><br>
		     				<a href="#collapse2" class="btn next-button next-step">PROCEED</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Registered_at_city_hall'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Registration city hall </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					You need to register at city hall together with one of the Hosts. You need to bring your passport and your unabridged legalised birth certificate. In most cities and villages you need to make an appointment upfront. Please discuss with your host when to go together.<br><br>
								Within 5 days you will receive a letter from the city hall with you BS number notifying you are registered at the Host Family's address.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Proof of registration</h1>
		     				<form action = "<?= base_url('document/upload_document/38') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button next-step" data-queue = "0">SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['BRP_extract_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. BRP Extract  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					After you received the letter from the city hall that notifies you that you are registered on the Host Family's address, you need to visit the city hall with your host again. Yes sorry again;-).<br><br>
							You need to ask for a BRP (extract from city hall registration) proving that both you and the whole family are registered on the address. We need a copy of this extract. This extract is really important for us to have in final as this is part of the legal duties and we can get fined for it if we do not have it documented.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>BRP Extract</h1>
	     				<form action = "<?= base_url('document/upload_document/39') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>		     				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse4" class="btn next-button next-step" data-queue = "1">SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Welcome_training_confirmed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Welcome training </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					Every month we organize a welcome training for all the girls that have arrived in this month. We do this to interexchange experiences, give you more guidance and advice for your Au pair year. We discuss all the things that are explained in the manual, we discuss the importance of communication and explain you techniques and much more.
	     				</p><br>
	     				<a href="#" class="btn next-button">DOWNLOAD</a><br>
	     				<p>
	     					Joining this meeting is compulsory, your host family needs to give you the opportunity to join.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Welcome training</h1>
	     				<a href="#" class="btn next-button">CONFIRM PRESENCE</a>   				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse5" class="btn next-button update-report" data-step = "21" >SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Welcome_training_confirmed'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. First Aid training </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<p class="text-danger">[ TBD ]</p>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse6" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/8') ?>" class="btn next-button">STEP 8</a>
        </div>
<!-- end tab7 -->
	<?php }elseif($tab == 8){?>
<!-- start tab8 -->
	<h1><i><b>8. Stay</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				During your stay in the Netherlands HBN (your agent and NL) will always be there to assist you with doubts, problems or issues. Please come to us in time, do not wait until it is too late. Many issues, we as your agents have come across due to our long and broad experience. So we can always help you or give you advice. We keep information confidential.<br><br>
				We have the care and information duty towards the Dutch government so we need you to inform us of any structural changes, stated below or any other issues that concern your wellbeing and stay as an au pair with your host family.<br><br>
				Legal rules and obligation to inform HBN during your stay:<br><br>
				• You are not allowed to perform other paid activities during your stay as an Au Pair in the Netherlands<br>
				• Legal rules according to the weekly time schedule always need to be respected.<br>
				• Max. 30 hours per week, Max. 8 hours per day, max 5 days per week, max 3 nights (babysitting) per week, 1 weekend off per totally month (FRI evening  20.00-SUN night 24.00)<br>
				• You are not allowed to stay longer than 1 year as an Au Pair in the Netherlands.<br>
				• After this year you are illegal in the country and you may not perform any  activities as Au Pair.<br>
				• You are obliged to always carry your identification card (residence permit) in and  outside the Netherlands.<br>
				• Always inform HBN of your well-being during your stay. If there are serious  problems/issues, if you feel abused or not respected you are legally obliged to  inform us immediately. This is for your own good!
				</p>
	    	</div>
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p>
				• Always inform HBN immediately if plans during your Au Pair year change<br>
				• Always inform HBN as soon as you know the exact date of your departure from  the Netherlands!<br>
				• Always inform HBN if structural changes in the weekly schedule have been made!<br>
				• Always inform HBN immediately as soon as you have other plans than going back  to your country of origin like study/partnership visa or going to another country than your own. Next to informing you need to provide HBN the evidence (e.g. new visa application, ticket to another country, and stamp in your passport).<br>
				• If you have a drivers license please note you can not drive more than 185 days after arrival in the Netherlands. You will also need to be insured for this.<br>
				• Any changes now or in the near future need to instantly inform HBN: there any changes in the family situation, such as;<br><br>
				Marital state of the hosts (marriage/divorce) <br>
				Job change of one of the hosts<br>
				Change of home address<br>
				Family expansion<br><br>
				<b>Evaluations</b><br>
				We will send you several evaluations during this year to see how you are doing and to remind you of the duty to inform us of changes. You are obliged to answer these and if you do not answer you will receive another reminder, and another and so on. You will receive an evaluation after 1 month, 4 months, 7 months, 9 months (prepare departure) and 11 months (goodbye).
				</p>
	    	</div>	    			    	
	    </div>
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Evaluation_1_finished'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Evaluation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<b>[ FORM ]</b>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button update-report" data-step = "22" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Evaluation_2_finished'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Evaluation</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<b>[ FORM ]</b>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button update-report" data-step = "23">SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Evaluation_3_finished'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Evaluation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<b>[ FORM ]</b>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse4" class="btn next-button update-report" data-step = "24">SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Evaluation_4_finished'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Evaluation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<b>[ FORM ]</b>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse5" class="btn next-button update-report" data-step = "25">SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Evaluation_5_finished'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. Evaluation </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<b>[ FORM ]</b>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse6" class="btn next-button update-report" data-step = "26">SUBMIT</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/9') ?>" class="btn next-button">STEP 9</a>
        </div>
<!-- end tab8 -->
	<?php }elseif($tab == 9){?>
<!-- start tab9 -->
	<h1><i><b>9. Return</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>
				As the au pair program is going towards the end, we need to inform you on the following instructions.<br>
				These instructions must be strictly followed up both by au pair and host family before ending the au pair program and after au pair's return to the country of origin:
				</p>
	    	</div>	    			    	
	    </div>    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php 
		        		if ($reports['Return_ticket_uploaded'] != '0000-00-00') {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/reload-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  1. Return ticket </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse in">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					It might be clear already, but if not you need to upload the changed return or the return ticket asap. Upload return ticket<br><br>
								<b>Other Plans:</b>
								If au pair decides to stay in the Netherlands to study or with a partner visa or leaves to another country than country of origin, you need to inform HBN immediately about it. On the date you APPLY for the new request and unsubscribe of the family residence you are no longer participating in the au pair program and this date HBN needs to communicate to the IND. Next to this we need to have proof of the new visa application and/or ticket to another country) need to be send to us immediately.<br><br>
								<b>NOTE:</b>
								-IF HBN is not informed in time (latest the day of departure/request other visa) about the date of departure/new request date, we will risk a fine of the IND which is then according to our general conditions forwarded to the host family due to lack of information.<br><br>
								-The residence permit of au pair is valid for exactly 1 year, which means that au pair cannot stay longer than 365 days in the Netherlands. After 365 days the residence permit is no longer valid! If au pair under any circumstances stays in the Netherlands after the expiration date of her permit, she/he will be considered illegal in the country.<br><br>
								- If au pair chooses to leave Schengen area after her residence permit is expired and come back to the Netherlands as a tourist (this possibility is only applicable to a number of countries!), you should be aware that performing any activity as au pair with a tourist visum by the host family is illegal, against the Dutch law and therefore punishable.

		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Return ticket</h1>
		     				<div class="input-group date schedule-date">
			        	  	<input type="text" name="sk_start_date" class="form-control" autocomplete='off'>
			        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			        	  	</div><br>
		     				<form action = "<?= base_url('document/upload_document/23') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse2" class="btn next-button update-report" data-step = "27" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  2. Deregister at city hall </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Deregister from the city hall not more than 1 week before your return date. Do not do it earlier because unsubscribing at the family's residence means your residence permit will be invalid/withdrawn!<br><br>
								This can be done with a deregister form (to be collected at the city hall). You can fill it out and sign the form. Add a copy of your passport ID, bring it to the city hall and send HBN the proof.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Proof of deregistration</h1>
		     				<form action = "<?= base_url('document/upload_document/41') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>	     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse3" class="btn next-button next-step" data-queue = "1" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  3. Close basic health insurance </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<p>
	     					If you have taken out one, we cannot do this for you, but ask help of your hosts.<br><br>
	     					Your au pair insurance ends by it self; we have taken care of this.
	     				</p><br><br>
	     				<a href="#collapse4" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  4. Close bank account </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<p>
	     					Close your bank account
	     				</p><br><br>
	     				<a href="#collapse5" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  5. Return residence card </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<p>
	     					Send back your residence card to the IND. Before you leave, a day before departure, please take a picture of your residence card in advance than cut the residence card in 2 and send this back to the IND.<br><br>
							IND Bureau Documenten<br>
							Postbus 7025<br>
							8007 HA Zwolle
	     				</p>
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#collapse6" class="btn next-button next-step">PROCEED</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  6. Deregister at city hall </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Congratulations! You have almost finished your au pair program successfully! You will receive your HBN certificate by post in the coming month :-)<br><br>
								We will send you an end evaluation just to know how you experienced this whole year and also to know if you have tips for the next au pair or the Host Family for their future au pair experience.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>HBN Certificate</h1>
		     				<a href="#" class="btn next-button">DOWNLOAD</a>     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse7" class="btn next-button next-step">PROCEED</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
		        <img src="<?php 
		        		if ($reports['Proof_of_deregistration_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  7. Leave your room tidy </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse7" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<p>
		     					When you arrived your room was nice, tidy and clean. Please make sure you leave your room tidy and clean before you leave, just the way you entered it. If there are things broken or stained, please notify your host, discuss how to fix it. Also please check the baggage allowance for your flight back and make sure you do not leave things with the family (there are always other Au Pairs to whom you can give clothes to, there's even a Facebook page for this.
		     				</p><br><br>
		     				<a href="#collapse8" class="btn next-button next-step">SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
		        <img src="<?php 
		        		if ($reports['Proof_of_return_uploaded'] == 1) {
		        			echo base_url('assets/img/check-green.png');
				        }else{
				        	echo base_url('assets/img/close-icon.png'); 
				        }		        	
		        	?>" class="collapse-img">  8. Safe arrival </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse8" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					When you are back in your country of origin (or outside the Schengen area) please send us an update that you arrived (home) safely. If you receive a stamp in your passport, please send us the scan of the page of your passport where the stamp is visible. In case you don't receive a stamp at the customs, send us the copy of your boarding pass.<br><br>
								We wish you all the best in the future and please let us knowif we can help you with anything. It was a pleasure accompanying you during your Au Pair Program, and if you would have any tips regarding our guidance in the Program, please let us know so we can improve for the next Au Pairs!
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Proof of return</h1>
		     				<form action = "<?= base_url('document/upload_document/42') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>	     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#collapse9" class="btn next-button next-step" data-queue = "2" >SUBMIT</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

        </div>
<!-- end tab9 -->
	<?php }?>
    </div>
</div>
