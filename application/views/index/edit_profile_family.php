<!-- views/index/profile.php  -->
<?php
		$li_class = array();
		$li_class['first']  = '';
		$li_class['second'] = '';
		$li_class['third']  = '';
		$li_class['forth']  = '';
    $li_class['fifth']  = '';
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
    <div class="container-fluid profile-edit">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="<?= base_url('index/edit_profile/1/'.$param)?>" >
            <span class="text">Basic info</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="<?= base_url('index/edit_profile/2/'.$param)?>" >
            <span class="text">About the host</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="<?= base_url('index/edit_profile/3/'.$param)?>" >
            <span class="text">Preferences</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="<?= base_url('index/edit_profile/4/'.$param)?>" >
            <span class="text">Documents</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['fifth']; ?>">
          <a href="<?= base_url('index/edit_profile/5/'.$param)?>" >
            <span class="text">Report</span>
          </a>
        </li>
       <?php } ?>
      </ul>
      <div class="tab-content profile-tab-content">
      <?php echo validation_errors(); ?>
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="basicinfo">
          <div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row photo-edit">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <form action = "<?= base_url('index/save_profile/7/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($family['photo1']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$family['photo1']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <form action = "<?= base_url('index/save_profile/8/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($family['photo2']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$family['photo2']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <form action = "<?= base_url('index/save_profile/9/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($family['photo3']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$family['photo3']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <form action = "<?= base_url('index/save_profile/10/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($family['photo4']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$family['photo4']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>

              </div>
          	</div>

            <?php echo form_open('index/save_profile/1/'.$param); ?>        
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>The <?php echo $parents[0]['lastname']; ?> family</b></h1></div>		
          		</div>          		
          		<div class="row profile-row">
          			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/dad.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="fa_pa1_first_name" class="form-control" value="<?php echo $parents[0]['firstname']; ?>">
                    <input type="text" name="fa_pa1_last_name" class="form-control" value="<?php echo $parents[0]['lastname']; ?>"></div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/mom.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="fa_pa2_first_name" class="form-control" value="<?php echo $parents[1]['firstname']; ?>">
                    <input type="text" name="fa_pa2_last_name" class="form-control" value="<?php echo $parents[1]['lastname']; ?>">
                    </div>	
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
                    <div class="col-xs-9 col-sm-9 col-md-8 col-lg-9">
                    <input type="text" name="fa_k<?php echo ($key + 1); ?>_name" value="<?php echo $value['name']; ?>" class="form-control">
                    </div>  
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
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="fa_place" value="<?php echo $family['place']; ?>" class="form-control" >     
                    </div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/cat.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="fa_pets" class="form-control" value="<?php echo $family['pets']; ?>">
                    </div>	
	          			</div>
	          		</div>
          		</div>
          	</div>
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <h2><b>Hi, we are the <?php echo $parents[0]['lastname']; ?> family</b></h2></div>          			
          		</div>          		
          		<textarea name="fa_overview" class="form-control" rows="15" ><?=$family['overview'] ?></textarea>
          	</div>         	
          </div>
          <div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<input type="submit" name="" class="btn next-button" value="Save basic info">
          	</div>          		
          </div>
          </form>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="host">
        <?php echo form_open('index/save_profile/2/'.$param); ?>
        <div class="row">
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b>The <?php echo $parents[0]['lastname']; ?> family</b></h1></div>  			
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa1_job" value="<?php echo $parents[0]['job_description']; ?>" class="form-control" >
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa1_company" value="<?php echo $parents[0]['company_name']; ?>" class="form-control">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa1_work_location" value="<?php echo $parents[0]['location_job']; ?>" class="form-control" >
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <select name="fa_pa1_work_days[]" multiple="multiple" class="multiple-select" value="<?php echo $parents[0]['work_days']; ?>" >
            <option>fulltime</option>
            <option>monday</option>
            <option>tuesday</option>
            <option>wednesday</option>
            <option>thursday</option>
            <option>friday</option>
            <option>weekend</option>
          </select>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_pa1_commute" value="<?php echo $parents[0]['travel_work']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
          </div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa1_interests" value="<?php echo $parents[0]['sport_interest']; ?>" class="form-control">
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits father (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa1_character" value="<?php echo $parents[0]['characteristics']; ?>" class="form-control">
          </div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa2_job" value="<?php echo $parents[1]['job_description']; ?>" class="form-control" >
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa2_company" class="form-control" value="<?php echo $parents[1]['company_name']; ?>" >
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa2_work_location" class="form-control" value="<?php echo $parents[1]['location_job']; ?>" >
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <select name="fa_pa2_work_days[]" multiple="multiple" class="multiple-select" value="<?php echo $parents[1]['work_days']; ?>">
                    <option>fulltime</option>
                    <option>monday</option>
                    <option>tuesday</option>
                    <option>wednesday</option>
                    <option>thursday</option>
                    <option>friday</option>
                    <option>weekend</option>
            </select>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
              <select name="fa_pa2_commute" value="<?php echo $parents[1]['travel_work']; ?>" >
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
          </div>  		  	
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa2_interests" class="form-control" value="<?php echo $parents[1]['sport_interest']; ?>">
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits mother (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pa2_character" class="form-control" value="<?php echo $parents[1]['characteristics']; ?>" >
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Number of kids</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_kids" class="form-control" value="<?php echo $family['number_kids']; ?>" >
          </div>
  		  </div>
      <?php foreach ($kids as $key => $kid) {
      ?>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Name child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_k<?php echo ($key + 1); ?>_name" class="form-control" value="<?php echo $kid['name']; ?>">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Gender child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
              <select name="fa_k<?php echo ($key + 1); ?>_gender" value="<?php echo $kid['gender']; ?>">
                <option>Boy</option>
                <option>Girl</option>                 
              </select>
            </div>              
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Birth date child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="input-group date">
              <input type="text" class="form-control" name="fa_k<?php echo ($key + 1); ?>_date_of_birth" value="<?php echo $kid['birthday']; ?>">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Age child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="number" name="fa_k<?php echo ($key + 1); ?>_age" class="form-control" value="<?php if($kid['age'] != ''){ echo $kid['age']; }else{ echo generate_age($kid['birthday']); } ?>" >
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">School/daycare child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
              <select name="fa_k<?php echo ($key + 1); ?>_school" value="<?php echo $kid['school']; ?>">
                <option>N/A</option>
                <option>Playgroup</option>
                <option>Nursery</option>
                <option>Primary</option>
                <option>Secondary School</option>
                <option>Other</option>
              </select>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Monday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key + 1); ?>_monday" value="<?php echo $kid['monday']; ?>">
                  <option>Whole day</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                  <option>None</option>
                </select>
              </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Tuesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key + 1); ?>_tuesday" value="<?php echo $kid['tuesday']; ?>">
                  <option>Whole day</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                  <option>None</option>
                </select>
              </div>          
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Wednesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key + 1); ?>_wednesday" value="<?php echo $kid['wednesday']; ?>">
                  <option>Whole day</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                  <option>None</option>
                </select>
              </div>
         </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Thursday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key + 1); ?>_thursday" value="<?php echo $kid['thursday']; ?>">
                  <option>Whole day</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                  <option>None</option>
                </select>
              </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Friday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key + 1); ?>_friday" value="<?php echo $kid['friday']; ?>">
                  <option>Whole day</option>
                  <option>Morning</option>
                  <option>Afternoon</option>
                  <option>None</option>
                </select>
              </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How does the kid go to school?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_k<?php echo ($key+1); ?>_commute" value="<?php echo $kid['commute']; ?>" >
                  <option>Walking</option>
                  <option>Biking</option>
                  <option>Car</option>
                  <option>Other</option>
                </select>
              </div>
          </div>
  		  </div>
        <?php } ?>
  		  <!-- <div class="row">          	
          		<input type="submit" name="" class="btn next-button" value="Add a child">          		
          </div> -->
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">House</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_living_situation" value="<?php echo $family['living_situation']; ?>" >
                  <option>Stand alone</option>
                  <option>Corner house</option>
                  <option>Middle house</option>
                  <option>Appartment</option>
                </select>
              </div> 
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Description of your home and surroundings</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <textarea class="form-control" name="fa_surround"><?php echo'This is Ghost!!!'; ?></textarea>   
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel slaapkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="number" name="fa_number_of_rooms" value="<?php echo $family['number_bedrooms']; ?>" class="form-control" >
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel badkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="number" name="fa_bathrooms" value="<?php echo $family['number_bathrooms']; ?>" class="form-control" >
          </div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Religion</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_religion" value="<?php echo $family['religion']; ?>" class="form-control">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Practising</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_practising" value="<?php echo $family['practising']; ?>">
                  <option>N/A</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Pets</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_pets" value="<?php echo $family['pets']; ?>" class="form-control">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How many hours do you have a housekeeper?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_household_help" class="form-control" value="<?php echo $family['household_help']; ?>">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does anyone smoke in the house?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_cooking">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Who cooks most of the time?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <input type="text" name="fa_cook" class="form-control" value="<?php echo $family['cook']; ?>">
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you dinner together?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
              <select name="fa_eating" value="<?php echo $family['eating']; ?>">
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Are there any family members with an allergy, chronic illness or a physical/mental handicap?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
              <div class="form-control custom-select">
                <select name="fa_ilness" value="<?php echo $family['ilness']; ?>" >
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
          </div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">If yes, does this have an effect on the au-pair duties?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <textarea name="fa_ilness_influence" class="form-control" rows="5"><?php echo $family['illness_influence']; ?></textarea>
          </div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Main reason for welcoming an au-pair?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_reason" value="<?php echo $family['reason']; ?>" class="form-control">
          </div>
  		  </div>
  		  <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">         	
          		<input type="submit" name="" class="btn next-button" value="Save about the host" >          		
          </div>
        </div>
        </form>
        </div>
<!-- Third panel -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="preferences">
        <?php echo form_open('index/save_profile/3/'.$param); ?>
        <div class="row">
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b>The <?php echo $parents[0]['lastname']; ?> family</b></h1></div>  			
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Au-pair needs to be available from</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="input-group date">
              <input type="text" class="form-control" name="fa_aupair_from" value="<?php echo $family['aupair_from']; ?>">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Until</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="input-group date">
              <input type="text" class="form-control" name="fa_aupair_untill" value="<?php echo $family['aupair_until']; ?>">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which culture/country do you have affinity with?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_culture_country" class="form-control" value="<?php echo $family['culture_country']; ?>">
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Whch characteristics do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_aupair_characteristics" class="form-control" value="<?php echo $family['aupair_characteristics']; ?>">
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which skills do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <input type="text" name="fa_aupair_skills" class="form-control" value="<?php echo $family['aupair_skills']; ?>">
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Would you accept a vegetarian au-pair or other diet?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
                <select name="fa_aupair_diet" value="<?php echo $family['aupair_diet']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
            </div>
          </div>
  		  </div> 
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you accept a smoker?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
                <select name="fa_aupair_smoker" value="<?php echo $family['aupair_smoker']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does the au-pair need to have a driverslicense?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
                <select name="fa_aupair_drivers_license" value="<?php echo $family['aupair_drivers_license']; ?>" >
                  <option>Yes</option>
                  <option>No</option>
                </select>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Did you have an au-pair before?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-control custom-select">
                <select name="fa_aupair_experience" value="<?php echo $family['aupair_experience']; ?>" >
                  <option>Yes</option>
                  <option>No</option>
                </select>
            </div>
          </div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the kids:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <select name="fa_aupair_responsibilities[]" 
                    multiple="multiple" 
                    class="multiple-select" 
                    value="<?php echo $family['aupair_responsibilities']; ?>">
              <option> Get the kids dressed</option>
              <option> Make/give breakfast</option>
              <option> Make lunch boxes/ make and give lunch</option>
              <option> Bring to school/kindergarden/pick up from school kindergarden</option>
              <option> Play with the children(sing,color,paint,craft)</option>
              <option> go outside (park,playground)</option>
              <option> help with homework</option>
              <option> Bring/pick up to sports and music(swimmig, football, dance, theater,piano, etc)</option>
              <option> bring/pick up friends</option>
              <option> Put in bed morning/afternoon nap</option>
              <option> Prepare dinner/give dinner</option>
              <option> Bath kids</option>
              <option> Brush teeth</option>
              <option> read story bring to bed</option>
              <option> Change diapers/make and give bottles</option>
              <option> Give late bottle</option>
              <option> Other</option>
            </select>
          </div>
  		  </div>

         
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the household:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <select name="fa_aupair_household[]" multiple="multiple" class="multiple-select" value="<?php echo $family['aupair_household']; ?>">
              <option> Do small groceries</option>
              <option> Do the laundry</option>
              <option> Fold the laundry and put in closets</option>
              <option> Iron shirts/blouses hosts</option>
              <option> Pack and unpack dishwasher</option>
              <option> clean tables and floors after dinner</option>
              <option> Cook for kids</option>
              <option> Cook for family</option>
              <option> Vacuum clean living area and kids rooms</option>
              <option> Clear up childrens rooms and play rooms</option>
              <option> Change the bed linnen kids and hosts</option>
              <option> Walk the dog or take care of other pets</option>
            </select>
          </div>
  		  </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="submit" name="" class="btn next-button" value="Save preferences">
          </div>
        </div>
        </form>
        </div>
<!-- start document tab -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b>The <?php echo $parents[0]['lastname']; ?> family</b></h1></div>
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
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Document</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Uploaded by</div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Uploaded date</div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">Approval date</div>
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
                  <a href="<?= base_url('files/'.$document['name']) ?>" class="btn next-button">DOWNLOAD</a>
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
<!-- end document tab -->

<!-- start report tab -->
      <?php if($this->aauth->is_member(6)){ ?>
      <div role="tabpanel" class="tab-pane <?php echo $li_class['fifth']; ?>" id="report">
      <?= form_open('index/save_profile/6/'.$param); ?>
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
            <h1><b>The <?php echo $parents[0]['lastname']; ?> family</b></h1>
            <b>KLANT STATUS</b><br>
            <div class="form-control custom-select" >
              <select name="fa_status" value="<?= $family['status'] ?>" >
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
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <!-- <a href="#" class="btn next-button">PROFIEL AU_PAIR</a></div> -->
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>CASE MANAGER</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email HBN</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="email" value="<?= $this->aauth->get_user()->email ?>" class="form-control" disabled>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Mobiel nr. vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="fa_pa1_mobile" value="<?= $parents[0]['mobile_number'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Mobiel nr. moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="fa_pa2_mobile" value="<?= $parents[1]['mobile_number'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Eigenaar</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_pa1_first_name" value="<?= $parents[0]['firstname'] ?>" class="form-control" >
                <input type="text" name="fa_pa1_last_name" value="<?= $parents[0]['lastname'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Type</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="custom-select form-control">
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
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (plaats)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_place" value="<?= $family['place'] ?>" class="form-control" >
              </div>
            </div>           

          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Gastgezin Naam</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_pa1_last_name" value="<?= $parents[0]['lastname'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Voornaam moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_pa2_first_name" value="<?= $parents[1]['firstname'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Meisjesnaam moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <input type="text" name="fa_pa2_last_name" value="<?= $parents[1]['lastname'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Voornaam vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_pa1_first_name" value="<?= $parents[0]['firstname'] ?>" class="form-control" >
              </div>
            </div> 
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email (werk) vader</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="email" name="fa_pa1_email" value="<?= $parents[0]['email'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Email (werk) moeder</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="email" name="fa_pa2_email" value="<?= $parents[1]['email'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (straat)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">              
                <input type="text" name="fa_street" value="<?= $family['street'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b>Factuuradres (postcode)</b></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="fa_postal_code" value="<?= $family['postal_code'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="submit" name="" value="Save profiel" class="btn next-button">
              </div>
            </div>
          </div>
        </div>        
        </form>

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
        <input type="hidden" name="user_id" value="<?= $documents[0]['user_id'] ?>">    
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
