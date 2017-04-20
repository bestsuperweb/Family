<!-- views/index/matches.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">    
    <h1><i><b>Voorgestelde Matches</b></i></h1><br>
	   <div class="row">
	   <?php if($user_type == 'family'){ ?>
	   	<?php foreach ($aupairs as $key => $aupair) { ?>
	   		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	   			<div class="match-card">
	   				<img src="<?php 
	                  if($aupair['photo1']){
	                    echo base_url('files/photos/'.$aupair['photo1']); 
	                  }else{
	                    echo base_url('assets/img/aupair.jpg'); 
	                  }
	                ?>">
	                <div class="match-details">
	                	<div class="row">
		                	<div class="col-lg-12">
		                		<h2><?= $aupair['full_name'] ?></h2>			     
		                	</div>		                	
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Nationality
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $aupair['nationality'] ?>	
		                	</div>	                		
	                	</div>
	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Date of Birth
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $aupair['date_of_birth'] ?>	
		                	</div>	                		
	                	</div>
	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		E-mail
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $aupair['email'] ?>	
		                	</div>	                		
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Phone number
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $aupair['phone'] ?>	
		                	</div>	                		
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Skype
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $aupair['skype'] ?>	
		                	</div>	                		
	                	</div>
	                	<br>
	                	<a href="" class="btn next-button"> NAAR PROFIEL</a>
	                	
	                </div>	   				
	   			</div>
	   		</div>
	   	<?php } ?>	   	
	   <?php }elseif($user_type == 'aupair'){ ?>

	   	<?php foreach ($families as $key => $family) { ?>
	   		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	   			<div class="match-card">
	   				<img src="<?php 
	                  if($family['photo1']){
	                    echo base_url('files/photos/'.$family['photo1']); 
	                  }else{
	                    echo base_url('assets/img/family.png'); 
	                  }
	                ?>">
	                <div class="match-details">
	                	<div class="row">
		                	<div class="col-lg-12">
		                		<h2>Family De <?= $family['name'] ?></h2>			     
		                	</div>		                	
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Address
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $family['house_number'] ?>, <?= $family['street'] ?>	
		                	</div>	                		
	                	</div>
	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		City ( ZIP )
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $family['place'] ?>, <?= $family['postal_code'] ?>
		                	</div>	                		
	                	</div>
	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		E-mail
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $family['contact_email'] ?>	
		                	</div>	                		
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Phone number
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $family['phone_number'] ?>	
		                	</div>	                		
	                	</div>

	                	<div class="row">
		                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		                		Kids
		                	</div>
		                	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		                		<?= $family['number_kids'] ?>	
		                	</div>	                		
	                	</div>
	                	<br>
	                	<a href="" class="btn next-button"> NAAR PROFIEL</a>
	                	
	                </div>	   				
	   			</div>
	   		</div>
	   	<?php } ?>

	   <?php } ?>
	   </div>
    </div>
</div>
