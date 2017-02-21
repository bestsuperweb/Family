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
    <div class="container-fluid">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="#general" data-toggle="tab" aria-controls="general">
            <span class="text">General</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="#experience" role="tab" data-toggle="tab" aria-controls="experience">
            <span class="text">Experience</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="#interview" role="tab" data-toggle="tab" aria-controls="interview">
            <span class="text">Interview & Tests</span>
          </a>
        </li>
       <?php } ?>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="#document" role="tab" data-toggle="tab" aria-controls="document">
            <span class="text">Document</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['fifth']; ?>">
          <a href="#report" role="tab" data-toggle="tab" aria-controls="report">
            <span class="text">Report</span>
          </a>
        </li>
       <?php } ?>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="general">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Age </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                  <?php if($aupair['age']){echo $aupair['age'];}else{echo generate_age($aupair['date_of_birth']);} ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Nationality </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['nationality']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Date of birth </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['date_of_birth']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Email address </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['email']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Phone number </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['phone']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Skype name </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['skype']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Relationship status* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['relationship_status']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Children* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['children']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Current Occupation </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['current_job']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Have you been an Au-pair before? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['aupair_experience']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Highest level of education completed </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['education']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Length (in centimetres) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['height']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Weight (in Kilograms) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['weight']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are you mentally in good metal and have you been in the past?
(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['mental_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are you physically in good health and have you been in the past?
(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['physical_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are there any (mental or physical) health problems in your family? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['condition_family']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have allergies? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['allergies']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Special Diet* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['diet']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you smoke? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['smoker']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you take medicine or have you taken medicine in the past?* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['medicine']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have a tattoo? * (if so, please specify) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['tattoos']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have any piercings? * (if so, please specify) </div>
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
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>                                
              </div>
              <div class="row"><p class="profile-description"><?php echo $aupair['overview']; ?></p></div>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="experience">
          <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <a href="<?php echo base_url('index/edit_profile/2/').$param; ?>">
            <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">English level (spoken)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['english_level']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Other languages *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['other_languages']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Biking experience *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['biking_experience']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Drivers license *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['drivers_license']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">- tickets:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['tickets']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Cooking level *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['cooking_level']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">First aid *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['first_aid']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Can you swim? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['swimming']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Which school and university did you attend? (please explain in detail)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['school_university']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What was your major and date of graduation?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['major']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Former jobs and responsibilities (Please describe all jobs in detail: when started, finished, position and tasks and responsibilities)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['former_jobs']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Age of children you took care of (siblings or family members as well)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_age']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Amount of time you took care of these kids (week/months/years) + frequency</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_time']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with babies? * (0-2 years old)?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_babies']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with toddlers? * (2 – 4 years old)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_toddlers']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with older kids? * (4 years and older)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_kids']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How many kids did you watch/ take care of at the same time? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_sametime']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you have experience with disabled children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_disability']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Are there things you are not willing to do? (related to children)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['not_willing']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you like the most about children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['most_liked']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you find a challenging aspect of working with children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['most_challenging']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What are your favourite activities with children?
(divide the activities by age group: 0-2/2-4/4-8/8-12 and be specific)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['favourite_activities']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you have experience with these household tasks? * (can be experience in your own home)
</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_household']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you (used to) have personnel in your own house? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['personnel']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Extra information / comments:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['extra_info']; ?></div>
          </div>
        </div>
<!-- start document tab -->

        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#" class="add-doc" data-toggle="modal" data-target="#addDocModal">&plus;</a>
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
<!-- end docuemtn tab -->

      <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="interview">         
        <h1 class="profile-caption"><b><?php echo $aupair['full_name']; ?></b></h1>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h2><b><i>Interview Reports</i></b></h2><br>
            <img src="<?= base_url('assets/img/users.png') ?>" ><span class="sub-caption"> Luis Fabiano</span><br><br>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt mattis pretium. Suspendisse vitae nibh ullamcorper, convallis ipsum et, tincidunt ligula. Suspendisse ut pulvinar elit. Nam at vulputate purus, scelerisque pharetra lectus. Curabitur tincidunt, risus nec condimentum tincidunt, turpis orci vulputate elit, ultricies pharetra metus nisl et est. Vestibulum ac velit eu mi sollicitudin fermentum. Ut sed sem dolor. Praesent sed velit ut dolor molestie gravida. Aliquam erat volutpat. Duis et nibh risus.<br><br>
              Donec efficitur molestie odio vel volutpat. In hac habitasse platea dictumst. Cras egestas vestibulum tinci- dunt. Fusce eget arcu nec nisi dictum ornare ac a odio. Proin bibendum lectus arcu, in maximus quam feu- giat ut. Sed pretium enim sit amet tristique scelerisque. Nulla massa felis, maximus sed libero sed, mollis blandit massa. Praesent volutpat, dui in vulputate lacinia, massa felis sodales justo, nec facilisis orci dolor auctor elit.
            </p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h2><b><i>Video</i></b></h2>
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 test-result" >
            <h2><b><i>Test results</i></b></h2>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                <div class="row" style="text-align: center;">
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>1</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>2</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>3</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>4</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>5</i></h3></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>ENTHUSIASTIC</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="5" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>OUTGOING</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>PROACTIVE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>ENERGETIC</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="2" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>CARING</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>FLEXIBLE/ADAPTIVE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>ACTIVE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>SPORTIVE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="5" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>ORGANISED</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>RESPONSIBLE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="2" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>SMART</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>INDEPENDENT</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>EMOTIONAL</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>MODEST</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="2" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>HONEST/OPEN</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>QUIET</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="5" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>SELF RELIANT</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="4" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>PARTYGIRL</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>CREATIVE</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="3" min="0" max="5" ></div>              
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b>PATIENT</b></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7"><input type="range" value="5" min="0" max="5" ></div>              
            </div>
          </div>          
        </div>
      </div>
<!-- end interview tab -->
      <div role="tabpanel" class="tab-pane <?php echo $li_class['fifth']; ?>" id="report">         
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><i><b><?php echo $aupair['full_name']; ?></b></i></h1></div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <a href="#" class="btn next-button">PROFIEL FAMILIE</a></div>
        </div>
      </div>
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
