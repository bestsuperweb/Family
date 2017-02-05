<!-- views/index/profile.php  -->
<?php
		$li_class = array();
		$li_class['first'] = '';
		$li_class['second'] = '';
		$li_class['third'] = '';
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
			default:
				$li_class['first'] = 'active';
				break;
		}
?>
<div id="page-content-wrapper">
    <div class="container-fluid">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="#basicinfo" data-toggle="tab" aria-controls="general">
            <span class="text">General</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="#host" role="tab" data-toggle="tab" aria-controls="experience">
            <span class="text">Experience</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="#document" role="tab" data-toggle="tab" aria-controls="document">
            <span class="text">Document</span>
          </a>
        </li>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="general">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index.php/index/edit_profile/1'); ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Age</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                  <?php if($aupair['age']){echo $aupair['age'];}else{echo generate_age($aupair['date_of_birth']);} ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Nationality</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['nationality']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Date of birth</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['date_of_birth']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Email address</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['email']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Phone number</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['phone']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Skype name</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['skype']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Relationship status*</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['relationship_status']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Children*</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['children']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Current Occupation</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['current_job']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Have you been an Au-pair before?</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['aupair_experience']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Highest level of education completed</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['education']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Length (in centimetres)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['height']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Weight (in Kilograms)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['weight']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Are you mentally in good metal and have you been in the past?
(if not, please explain)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['mental_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Are you physically in good health and have you been in the past?
(if not, please explain)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['physical_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Are there any (mental or physical) health problems in your family?</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['condition_family']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have allergies?</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['allergies']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Special Diet*</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['diet']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you smoke?</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['smoker']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you take medicine or have you taken medicine in the past?*</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['medicine']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have a tattoo? * (if so, please specify)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['tattoos']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have any piercings? * (if so, please specify)</b></h4></div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['piercings']; ?></div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <img src="<?php echo base_url('assets/img/aupair.jpg'); ?>" class="img-responsive">
              </div>
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>Hi, I'm <?php echo $aupair['full_name']; ?></b></h1></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index.php/index/edit_profile/1'); ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
                <p class="profile-description"><?php echo $aupair['overview']; ?></p>                
              </div>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="experience">
          <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <a href="<?php echo base_url('index.php/index/edit_profile/2'); ?>">
            <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          </div>
          
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="document">
          <p>
            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater
            eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
          </p>
        </div>

   
    </div>
    </div>
</div>
