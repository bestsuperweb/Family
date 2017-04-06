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

              <div id="photoCarousel" class="carousel slide" data-ride="carousel">  
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php if($family['photo1']){ echo base_url('files/photos/'.$family['photo1']); }else{ echo base_url('assets/img/family.png'); } ?>" class="img-responsive">
                  </div>

                  <div class="item">
                    <img src="<?php if($family['photo2']){ echo base_url('files/photos/'.$family['photo2']); }else{ echo base_url('assets/img/family.png'); } ?>" class="img-responsive">
                  </div>

                  <div class="item">
                    <img src="<?php if($family['photo3']){ echo base_url('files/photos/'.$family['photo3']); }else{ echo base_url('assets/img/family.png'); } ?>" class="img-responsive">
                  </div>

                  <div class="item">
                    <img src="<?php if($family['photo4']){ echo base_url('files/photos/'.$family['photo4']); }else{ echo base_url('assets/img/family.png'); } ?>" class="img-responsive">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#photoCarousel" role="button" data-slide="prev">
                </a>
                <a class="right carousel-control" href="#photoCarousel" role="button" data-slide="next">              
                </a>
              </div>
          		
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
                <h2><b>Hi, we are family of <?php echo $parents[0]['lastname']; ?></b></h2></div>
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
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
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
                  <form method="POST">
                    <div class="input-group doc-search">
                        <input type="text" class="form-control" name="search_key" placeholder="Search" >
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>              
            </div>            
          </div>

          
          <div class="panel-group profile-document" id="accordion">
            <div class="profile-document-heading">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="title">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'title') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="DOCUMENT" >
                  </form>                  
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="uploader">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'uploader') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="UPLOADED BY" >
                  </form>                  
                </div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="upload_date">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'upload_date') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="UPLOADED DATE" >
                  </form>
                </div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="approved_date">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'approved_date') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="APPROVAL DATE" >
                  </form>                  
                </div>
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
                  <a href="#" class="btn next-button <?= $document['status'] ?>-button"><?= ucfirst($document['status']) ?></a>
                  <a href="<?= base_url('files/'.$document['name']) ?>"  target="_blank" class="btn next-button">DOWNLOAD</a>
                  <a href="#" class="btn next-button" data-toggle="modal" data-target="#newVersionDocModal<?= $document['id']?>">NEW VERSION</a>
                  <a href="#" data-id="<?= $document['id']?>" class="btn next-button delete-button">DELETE</a>
                  <?php if($this->aauth->is_member(6)&&($document['status'] != 'approved')) { ?>
                    <a href="#" data-id="<?= $document['id']?>" class="btn next-button approve-button">APPROVE</a>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div id="newVersionDocModal<?= $document['id']?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Version Document</h4>
                  </div>
                  <form class="uploadForm" action="<?= base_url('document/update/'.$document['id'].'/3') ?>" method="post" enctype="multipart/form-data">  
                    <div class="modal-body">
                      <div class="alert alert-success upload-success">
                        <strong>Success!</strong> The document was successfully uploaded.
                      </div>
                      <div class="alert alert-danger upload-error">
                        <strong>Opp!</strong> There are some errors to upload the document.
                      </div>
                      <div class="form-group">
                        <label>Docuemnt file:</label>
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
          <div class="col-xs-9 col-sm-9 col-md-8 col-lg-8">
            <h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1>
            <b>KLANT STATUS</b><br>
            <b class="text-primary"><?= $family['status'] ?></b>
          </div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <a href="<?php echo base_url('index/edit_profile/5/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <!-- <a href="#" class="btn next-button">PROFIEL AU_PAIR</a> -->
          </div>
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
                  <select disabled>
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
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (plaats)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><?= $family['place'] ?></div>
            </div>
              
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
          </div>
        </div>
        
        <h2>Auto filled Sections</h2>
        <div class="row">
          <?php foreach ($reports as $key => $report) { 
            if (($key != 'id') && ($key != 'family_id')) {            
            ?>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b><?= str_replace('_', ' ', $key) ?></b></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <?php if(($report == '0') || ($report == '1')){ ?>
                    <img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30" class="null<?= $report ?>">
                  <?php }elseif($report == '0000-00-00') { ?>
                    DNF
                  <?php }else{ echo $report; } ?>
                </div>
              </div>
            </div>
          <?php 
              }
            }
          ?>          
        </div>
        
        
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h3><i>NOTITIES</i></h3>            
              <div class="alert alert-success upload-success">
                <strong>Success!</strong> The notity was successfully saved.
              </div>
              <div class="alert alert-danger upload-error">
                <strong>Opp!</strong> There are some errors to save the notity.
              </div>
              <form action="<?= base_url('notities/insert') ?>" class="notity-form uploadForm" method="POST">
                <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($family['contact_email']) ?>">
                <input type="text" name="notity_title" class="form-control" placeholder="Notity title" required>
                <textarea name="notity_content" class="form-control" placeholder="Notity content" rows="5" required></textarea>
                <input type="file" name="notity_file" >
                <div class="progress upload-progress">
                  <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                  </div>
                </div>
                <input type="reset" name="" class="btn btn-warning btn-sm" value="Annuleren">
                <input type="submit" name="" class="btn btn-primary btn-sm" value="Opslaan">
              </form>
              <br>
              <?php
                foreach ($notities as $key => $notity) {
                  ?>
                  <div class="notity">
                    <div style="width: 5%; padding-right: 10px;">
                      <img src="<?= base_url('assets/img/login_logo.jpg') ?>" width="100%">
                    </div>
                    <div>
                      <h5><?= $notity['title'] ?></h5>
                      <p><?= $notity['content'] ?></p>
                      <span class="notity-gray-text"> Gastgezin - </span>
                      <span class="notity-user"><?= $parents[0]['lastname'] ?></span>
                      <span class="notity-gray-text">
                       &#183; <span class=" glyphicon glyphicon-time"></span> <?= $notity['created_date'] ?>
                      </span>
                      <?php if($notity['attachment']){ ?>
                        <br>
                        <span class="notity-gray-text"><span class="glyphicon glyphicon-paperclip"></span>
                        <a href="<?= base_url('files/'.$notity['attachment']) ?>" target="_blank" ><?= $notity['attachment'] ?></a></span>
                      <?php } ?>
                      <br><br>
                      <span class="notity-gray-text"> - <?= $this->aauth->get_user()->name ?> - </span>
                    </div>
                    <div>
                      <a href="#" class="delete-noitity" data-id="<?= $notity['id'] ?>">
                        <span class="notity-gray-text glyphicon glyphicon-trash"></span>
                      </a>
                    </div>
                  </div>
                  <?php
                }
              ?>              
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h3><i>TASKS</i></h3>
              <div class="alert alert-success upload-success">
                <strong>Success!</strong> The notity was successfully saved.
              </div>
              <div class="alert alert-danger upload-error">
                <strong>Opp!</strong> There are some errors to save the notity.
              </div>
              <form action="<?= base_url('tasks/insert') ?>" class="notity-form uploadForm" method="POST">
                <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($family['contact_email']) ?>">
                <input type="hidden" name="user_name" value="<?= $parents[0]['lastname'] ?>">
                <input type="text" name="task_title" class="form-control" placeholder="Task title" required>
                <div class="input-group schedule-date date">
                  <input type="text" class="form-control" name="task_deadline" placeholder="Task Deadline">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
                <div class="progress upload-progress">
                  <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                  </div>
                </div>
                <input type="reset" name="" class="btn btn-warning btn-sm" value="Annuleren">
                <input type="submit" name="" class="btn btn-primary btn-sm" value="Opslaan">
              </form>
              <br>
              <?php
                foreach ($tasks as $key => $task) {
                  ?>
                  <div class="notity">
                    <div style="width: 5%; padding-right: 10px;">
                      <img src="<?= base_url('assets/img/login_logo.jpg') ?>" width="100%">
                    </div>
                    <div>
                      <h5><?= $task['hbn_task'] ?>
                          <?php
                              if ($task['status'] == 'complete') {
                          ?>
                                  <span class="text-success glyphicon glyphicon-ok-sign"></span>
                          <?php
                              } 
                          ?>
                      </h5>
                      <h5><i class="glyphicon glyphicon-calendar"></i> 
                        <?php 
                          if($task['deadline'] != '0000-00-00'){
                            echo $task['deadline'];
                            }else{
                              echo "&#8734;";
                            } 
                        ?>
                      </h5>
                      <span class="notity-gray-text"> Gastgezin - </span>
                      <span class="notity-user"><?= $task['user_name'] ?></span>
                      <span class="notity-gray-text">
                       &#183; <span class=" glyphicon glyphicon-time"></span> <?= $task['created_date'] ?>
                      </span>
                      <br><br>
                      <span class="notity-gray-text"> - <?= $this->aauth->get_user()->name ?> - </span>
                    </div>
                    <div>
                      <?php if ($task['status'] != 'complete') {  ?>
                            <a href="#" class="complete-task" data-id="<?= $task['id'] ?>">
                              <span class="notity-gray-text glyphicon glyphicon-ok"></span>
                            </a>&nbsp;|&nbsp;
                      <?php } ?>
                      <a href="#" class="delete-task" data-id="<?= $task['id'] ?>">
                        <span class="notity-gray-text glyphicon glyphicon-trash"></span>
                      </a>
                    </div>
                  </div>
                  <?php
                }
              ?>              
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
            <label>Docuemnt title:</label>
            <input type="text" name="doc_title" class="form-control" autocomplete='off'>                              
          </div>
          <div class="form-group">
          <label>Docuemnt file:</label>
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

