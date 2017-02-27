<!-- views/index/profile.php  -->
<?php
		$li_class = array();
		$li_class['first'] = '';
		$li_class['second'] = '';
		$li_class['third'] = '';
		$li_class['forth'] = '';
    $li_class['fifth'] = '';
		switch ($tab) {
			case 1:
				$li_class['first'] = 'active';
				break;
			case 2:
				$li_class['second'] = 'active';
				break;
			case 3:
				$li_class['third'] = 'active';
				break;
			case 4:
				$li_class['forth'] = 'active';
				break;
			case 5:
        $li_class['fifth'] = 'active';
        break;	
			default:
				$li_class['first'] = 'active';
				break;
		}
?>
<div id="page-content-wrapper">
    <div class="container-fluid">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="<?= base_url('index/profile/1/'.$param)?>" >
            <span class="text">Basic info</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="<?= base_url('index/profile/2/'.$param)?>" >
            <span class="text">About the host</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="<?= base_url('index/profile/3/'.$param)?>" >
            <span class="text">Preferences</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="<?= base_url('index/profile/4/'.$param)?>" r>
            <span class="text">Document</span>
          </a>
        </li>
       <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['fifth']; ?>">
          <a href="<?= base_url('index/profile/5/'.$param)?>" >
            <span class="text">Report</span>
          </a>
        </li>
       <?php } ?>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="basicinfo">
          <div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<img src="<?php if($family['photo']){ echo base_url('files/photos/'.$family['photo']); }else{ echo base_url('assets/img/family.png'); } ?>" class="img-responsive">
          	</div>
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
          			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          		</div>          		
          		<div class="row profile-row">
          			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/dad.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <h4><?php echo $parents[0]['firstname'].' '.$parents[0]['lastname'] ?></h4></div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/mom.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <h4><?php echo $parents[1]['firstname'].' '.$parents[1]['lastname'] ?></h4></div>	
	          			</div>
	          		</div>
          		</div>
          		<div class="row profile-row">
             <?php  
              foreach ($kids as $key => $value) { ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="<?php echo base_url('assets/img/kid-'.$value['gender'].'.png'); ?>" class="img-responsive"></div>
                    <div class="col-xs-9 col-sm-9 col-md-8 col-lg-9"><h4 class="kid-name"><?php echo $value['name']; ?></h4></div>  
                  </div>
                </div>
             <?php 
              }
             ?>          			
          		</div>
          		<div class="row profile-row">
          			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/location.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4 class="kid-name"><?php echo $family['place']; ?></h4></div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/cat.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4 class="kid-name"><?php echo $family['pets']; ?></h4></div>	
	          			</div>
	          		</div>
          		</div>
          	</div>
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <h2><b><i>Hi, we are family of <?php echo $parents[0]['lastname']; ?></i></b></h2></div>
          			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          		</div>          		
          		<p class="profile-description"><?php echo $family['overview']; ?></p>
          	</div>         	
          </div>
          <div class="row">
          	<div class="col-lg-4 col-lg-offset-4">
          		<a href="<?= base_url('index/profile/2/'.$param)?>" class="btn next-button" >ABOUT THE HOST</a>
          	</div>          		
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="host">
          <div class="row">
      			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
      			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <a href="<?php echo base_url('index/edit_profile/2/').$param; ?>">
            <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
  		    </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['job_description']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['company_name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['location_job']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['work_days']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['travel_work']; ?></div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['sport_interest']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits father (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['characteristics']; ?></div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['job_description']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['company_name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['location_job']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['work_days']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['travel_work']; ?></div>  		  	
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['sport_interest']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits mother (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['characteristics']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Number of kids</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_kids']; ?></div>
  		  </div>
      <?php foreach ($kids as $key => $kid) {
      ?>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Name child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Gender child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['gender']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Birth date child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['birthday']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Age child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['age']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">School/daycare child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['school']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Monday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['monday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Tuesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['tuesday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Wednesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['wednesday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Thursday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['thursday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Friday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['friday']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How does the kid go to school?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['commute']; ?></div>
  		  </div>
        <?php } ?>
  		  <!-- <div class="row">          	
          		<input type="submit" name="" class="btn next-button" value="Add a child">          		
          </div> -->
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">House</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['living_situation']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Description of your home and surroundings</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting.</div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel slaapkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_bedrooms']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel badkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_bathrooms']; ?></div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Religion</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['religion']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Practising</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['practising']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Pets</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['pets']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How many hours do you have a housekeeper?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['household_help']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does anyone smoke in the house?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['cooking']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Who cooks most of the time?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['cook']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you dinner together?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['eating']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Are there any family members with an allergy, chronic illness or a physical/mental handicap?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['ilness']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">If yes, does this have an effect on the au-pair duties?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['illness_influence']; ?></div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Main reason for welcoming an au-pair?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['reason']; ?></div>
  		  </div>
    		  <div class="row">
            <a href="<?= base_url('index/profile/3/'.$param)?>" class="btn next-button">PREFERENCES</a> 
          </div>
        </div>
<!-- start preference tab -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="preferences">
          <div class="row">
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b><i>Family of <?php echo $parents[0]['lastname']; ?></i></b></h1></div>
  			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="<?php echo base_url('index/edit_profile/3/').$param; ?>">
        <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Au-pair needs to be available from</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_from']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Until</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_until']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which culture/country do you have affinity with?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['culture_country']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Whch characteristics do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_characteristics']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which skills do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_skills']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Would you accept a vegetarian au-pair or other diet?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_diet']; ?></div>
  		  </div> 
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you accept a smoker?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_smoker']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does the au-pair need to have a driverslicense?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_drivers_license']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Did you have an au-pair before?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_experience']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the kids:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_responsibilities']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the household:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_household']; ?></div>
  		  </div>
        </div>
<!-- start document tab -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#" class="add-doc" data-toggle="modal" data-target="#addDocModal" >&plus;</a>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                  <div class="input-group doc-search">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>            
          </div>

          
          <div class="panel-group profile-document" id="accordion">
            <div class="profile-document-heading">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">DOCUMENT</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOADED BY</div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOAD DATE</div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">APPROVAL DATE</div>
            </div>
            <?php if($documents != null) {?>
            <?php foreach ($documents as $key => $document) { ?>
            <div class="panel panel-default">
              <div class="panel-heading doc-<?= $document['status'] ?>">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key ?>">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= ucfirst($document['title']) ?></div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['uploader'] ?></div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['upload_date'] ?></div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['approved_date'] ?></div>                    
                  </a>          
              </div>
              <div id="collapse<?=$key ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <a href="#" class="btn next-button <?= $document['status'] ?>-button"><?= $document['status'] ?></a>
                  <a href="<?= base_url('files/'.$document['name']) ?>"  target="_blank" class="btn next-button">DOWNLOAD</a>
                  <a href="#" class="btn next-button">NEW VERSION</a>
                  <a href="#" data-id="<?= $document['id']?>" class="btn next-button delete-button">DELETE</a>
                  <?php if($this->aauth->is_member(6)&&($document['status'] != 'approved')) { ?>
                    <a href="#" data-id="<?= $document['id']?>" class="btn next-button approve-button">APPROVE</a>
                  <?php } ?>
                </div>
              </div>
            </div>

           <?php 
              } 
             }else{
           ?>
           <div> No document... </div>
           <?php } ?>

          </div>
        </div>  
<!-- start report tab -->
      <?php if($this->aauth->is_member(6)){ ?>
      <div role="tabpanel" class="tab-pane <?php echo $li_class['fifth']; ?>" id="report">
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
            <h1><i><b>Family of <?php echo $parents[0]['lastname']; ?></b></i></h1>
            <b>KLANT STATUS</b><br>
            <select >
              <option>01 - Intake</option>
              <option>02 - Profile + confirmation</option>
              <option>03 - Matches</option>
              <option>04 - Request docs IND</option>
              <option>05 - At IND</option>
              <option>06 - Approval / Embassy visit</option>
              <option>07 - Prepare welcome</option>
              <option>08 - Placed</option>
              <option>09 -  Evaluation 1 done</option>
              <option>10 - Evaluation 2 done</option>
              <option>11 - Mail / Call replace done</option>
              <option>12 - On hold</option>
              <option>13 - Cancelled</option>
              <option>14 - Closed</option>
            </select>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <a href="#" class="btn next-button">PROFIEL AU_PAIR</a></div>
        </div>
        <div class="row">
          
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>CASE MANAGER</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email HBN</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $this->aauth->get_user()->email ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Mobiel nr. vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[0]['mobile_number'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Mobiel nr. moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[1]['mobile_number'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Eigenaar</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[0]['firstname'] ?> <?= $parents[0]['lastname'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Type</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="custom-select">
                  <select>
                    <option>1st placement</option>
                    <option>2nd placement</option>
                    <option>3rd placement</option>
                    <option>4 No further replacement</option>
                    <option>5 Cancelled</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Naam</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[0]['lastname'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Voornaam moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[1]['firstname'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Meisjesnaam moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[1]['lastname'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Voornaam vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[0]['firstname'] ?></div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Beschrijving</b></div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                easy going gezin, wel druk, vader reist veel, moeder zware baan, 2 jongetjes Willem 6 jaar en Zeeger 4 jaar en nu 3de kindje op komst februari 2015kids 7, 5 en 1 jr: willen graag goed engels, warm gezellig, geen tuttebel. Marina is een topper maar wel een beetje een tuttebel, past niet zo bij suzan. moet wel lekker jongens type zijn!
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>STATUS/TO DO</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Jennifer</div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Startdatum (Residence Permit)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Jennifer</div>
            </div>       

          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email (werk) vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[0]['email'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email (werk) moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $parents[1]['email'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (straat)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $family['street'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (postcode)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $family['postal_code'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (plaats)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $family['place'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>FACTUUR INFO/KORTING</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Bankrekening nr</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuur 1 verstuurd 60%</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuur 2 verstuurd</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuur 3 verstuurd</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Leges afgeschreven</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3><i>CHECKLIST ALGEMEEN</i></h3>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Inkomen van Host</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Jennifer</div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Dienstverband</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Jennifer</div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Arbeidsovereenkomst (LD, DGA)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Werkgeversverklaring (LD, DGA)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>KVK uittreksel of oprichtingsakte (DGA, ZO)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Zelfstandig Ondernemer Verklaring IND (ZO)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Loonstroken 3x (laatste 3 mnd) (LD, DGA)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>            
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>UWV verklaring + handtek. + stempel (LD)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Betaalde belasting bewijs (screenshots) (DGA)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Belastingaangiftes (ZO)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Laatste voorlopige/def. aanslag /aangifte (EV)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
            <div class="row">
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><b>Bewijs/bescheiden omvang eigen vermogen (EV)</b></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?=base_url('assets/img/visa-check-review.png')?>" width="30"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3><i>NOTITIES</i></h3>
            <div class="row">
              <form class="notity-form">
                <textarea class="form-control">
                  
                </textarea>
                <!-- <input type="file" name=""> -->
                <input type="button" name="" class="btn btn-warning btn-sm" value="Anuleren">
                <input type="button" name="" class="btn btn-primary btn-sm" value="Opsalan">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
<!-- end report tab -->
    </div>
  </div>
</div>


<div id="addDocModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Document</h4>
      </div>
      <form class="uploadForm" action="<?= base_url('document/insert') ?>" method="post" enctype="multipart/form-data">  
        <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($family['contact_email']) ?>">    
        <div class="modal-body">
          <div class="alert alert-success upload-success">
            <strong>Success!</strong> The document was successfully uploaded.
          </div>
          <div class="alert alert-danger upload-error">
            <strong>Opp!</strong> There are some errors to upload the document.
          </div>
          <div class="form-group">
            <label>Docuemnt Title:</label>
            <input type="text" name="doc_title" class="form-control" autocomplete='off'>                              
          </div>
          <div class="form-group">
          <label>Docuemnt File:</label>
            <input type="file" name="doc_file" autocomplete='off'>
          </div>
          <div class="progress upload-progress">
            <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn">Add document</button>
        </div>
      </form>
    </div>

  </div>
</div>
