
<!-- views/index/profile.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid family-create">
    <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
    </div>
    <?php if($page == 1){ ?>
    <h1><i><b>1. Basisinformatie</b></i></h1>    
    <?php echo form_open('families/create/1'); ?>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Surname father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="fa_pa1_last_name" class="form-control" required="true"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Name father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="fa_pa1_first_name" class="form-control" required="true"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Birth date father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="fa_pa1_date_of_birth">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
				</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Marital status father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_pa1_marital_status">
							    <option>Married</option>
							    <option>Single</option>
							    <option>Civil</option>
							    <option>Partnership</option>
							    <option>Divorced</option>
							    <option>Widow / widower</option>
						  	</select>
    					</div>    					
					</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Nationality father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_pa1_nationality">
							    <option>Dutch</option>
							    <option>Greek</option>
							    <option>Turkish</option>
							    <option>Spanish</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Mobile number father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_pa1_mobile" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Email father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="email" name="fa_pa1_email" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>House phone number</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_phone" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Contact email for HBN</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="email" name="fa_email" class="form-control"></div>
    			</div>

    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Surname mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="fa_pa2_last_name" class="form-control" required="true"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Name mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="fa_pa2_first_name" class="form-control" required="true"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Birth date mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="fa_pa2_date_of_birth">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Marital status mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_pa2_marital_status">
							    <option>Married</option>
                                <option>Single</option>
                                <option>Civil</option>
                                <option>Partnership</option>
                                <option>Divorced</option>
                                <option>Widow / widower</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Nationality mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_pa2_nationality">
							    <option>Dutch</option>
                                <option>Greek</option>
                                <option>Turkish</option>
                                <option>Spanish</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Mobile number mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_pa2_mobile" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Email mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="email" name="fa_pa2_email" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Zipcode (1234AB)</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_zipcode" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>House number</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_housenumber" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Street</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_street" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>City</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_place" class="form-control"></div>
    			</div>
    		</div>
    	</div>
	   <input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
    </form>  
<?php }elseif( $page == 2 ) { ?>

    <h1><i><b>2. Over het gastgezin</b></i></h1>
    <?php echo form_open('families/create/2'); ?>
    <input type="hidden" name="family_id" value="<?php echo $family_id; ?>">
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Job description father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa1_job" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Company name father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa1_company" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Location job father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa1_work_location" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Father works on the following days</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <!-- <div class="form-control custom-select"> -->
    						<select name="fa_pa1_work_days[]" multiple="multiple" class="multiple-select">
							    <option>fulltime</option>
							    <option>monday</option>
							    <option>tuesday</option>
							    <option>wednesday</option>
							    <option>thursday</option>
							    <option>friday</option>
							    <option>weekend</option>
						  	</select>
    					<!-- </div>    					 -->
					</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Father travels for work</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_pa1_commute">
							    <option>Yes</option>
							    <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Sports and interests father</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa1_interests" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Character/traits father (?)</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa1_character" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Job description mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa2_job" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Company name mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa2_company" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Location job mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa2_work_location" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Mother works on the following days</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <!-- <div class="form-control custom-select"> -->
    						<select name="fa_pa2_work_days[]" multiple="multiple" class="multiple-select">
							    <option>fulltime</option>
                                <option>monday</option>
                                <option>tuesday</option>
                                <option>wednesday</option>
                                <option>thursday</option>
                                <option>friday</option>
                                <option>weekend</option>
						  	</select>
    					<!-- </div>    					 -->
					</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Mother travels for work</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_pa2_commute">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Sports and interests mother</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa2_interests" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Character/traits mother (?)</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pa2_character" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Number of kids</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <input type="text" name="fa_kids" class="form-control">	
					</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Name child 1</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_k1_name" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Gender child 1</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_gender">
							    <option>Boy</option>
							    <option>Girl</option>							    
						  	</select>
    					</div>    					
					</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Birth date child 1</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="fa_k1_date_of_birth">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Age child 1</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_k1_age" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>School/daycare child 1</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_school">
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

    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Monday</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_monday">
							    <option>Whole day</option>
							    <option>Morning</option>
							    <option>Afternoon</option>
							    <option>None</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Tuesday</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_k1_tuesday">
							    <option>Whole day</option>
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>None</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Wednesday</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_wednesday">
							    <option>Whole day</option>
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>None</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Thursday</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_k1_thursday">
							    <option>Whole day</option>
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>None</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Friday</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_friday">
							    <option>Whole day</option>
                                <option>Morning</option>
                                <option>Afternoon</option>
                                <option>None</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How do the kids go to school?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_k1_commute">
							    <option>Walking</option>
							    <option>Biking</option>
							    <option>Car</option>
							    <option>Other</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<a href="#" class="btn btn-default form-control add-child" >&plus; Add a child</a>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>House</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_living_situation">
							    <option>Stand alone</option>
							    <option>Corner house</option>
							    <option>Middle house</option>
							    <option>Appartment</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How many bed rooms?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_number_of_rooms">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How many bathrooms?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_bathrooms">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Religion</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_religion" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Practising</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_practising">
							    <option>N/A</option>
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Pets</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_pets" class="form-control"></div>
    			</div>    			
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How many hours do you have a housekeeper?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_household_help" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Does anyone smoke in the house?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_cooking">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Who cooks most of the time?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_cook" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you dinner together?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_eating">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Are there any family members with an allergy, chronic illness or a physical/mental handicap?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_ilness">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>If yes, does this have an effect on the au-pair duties?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><textarea name="fa_ilness_influence" class="form-control" rows="5"></textarea></div>
    			</div>
    		</div>
    	</div>
    	<input type="submit" name="" class="btn next-button" value="NAAR STAP 3">
    </form>
<?php }else if( $page == 3 ) { ?>
    <h1><i><b>3. Over de au-pair</b></i></h1>
    <?php echo form_open('families/create/3'); ?>
    <input type="hidden" name="family_id" value="<?php echo $family_id; ?>">
    
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Au-pair needs to be available from</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="fa_aupair_from">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Until</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="fa_aupair_untill">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Which culture/country do you have affinity with?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_culture_country" class="form-control"></div>
    			</div>    			
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Which characteristics do you find most important?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_aupair_characteristics" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Would you accept a vegetarian au-pair or other diet?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_aupair_diet">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you accept a smoker?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_aupair_smoker">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Does the au-pair need to have a driverslicense?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_aupair_drivers_license">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Which skills do you find most important?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_aupair_skills" class="form-control"></div>
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Did you have an au-pair before?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_aupair_experience">
							    <option>Yes</option>
                                <option>No</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Possible tasks regarding the kids:</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<!-- <div class="form-control custom-select"> -->
    						<select name="fa_aupair_responsibilities[]" multiple="multiple" class="multiple-select">
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
    					<!-- </div>    					 -->
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Possible tasks regarding the household:</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<!-- <div class="form-control custom-select"> -->
    						<select name="fa_aupair_household[]" multiple="multiple" class="multiple-select">
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
    					<!-- </div>    					 -->
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How often would you like the au-pair to babysit at night per week?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_aupair_household_nights" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>How many hours do you need her to do household tasks per week?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_aupair_household_hours" class="form-control"></div>
    			</div>
    		</div>
    	</div>
    	<input type="submit" name="" class="btn next-button" value="NAAR STAP 4">
    </form>
<?php }else if( $page == 4 ) { ?>
    <h1><i><b>4. Kosten</b></i></h1>
    <?php echo form_open('families/create/4'); ?>
    <input type="hidden" name="family_id" value="<?php echo $family_id; ?>">
    
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    	<h4>Bij Huisje Boompje Nanny is het maandelijkse zakgeld voor de au pair op € 340,- vastgesteld. Daarbij bent u verplicht om uw au pair te verzekeren. Dat regelen wij voor u en de maandelijkse kosten voor de verzekering bedragen ongeveer € 45,-. Hieronder staat een lijst van alle zaken die gerelateerd zijn aan de inkomsten en extraatjes voor de au pair. Selecteer aub dat wat in eerste instantie in uw aanbieding aan de au pair zit inbegrepen.</h4></div>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
    </div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Gaan jullie akkoord met het maandelijkse zakgeld en de verplichte verzekering?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_pocketmoney_insurance">
							    <option>Ja</option>
							    <option>Nee</option>
						  	</select>
    					</div>    					
					</div>
    			</div>    			
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Vervoer - de au-pair krijgt de beschikking over een</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_travel">
							    <option>Fiets</option>
							    <option>OV-abonnement</option>
							    <option>Auto</option>
							    <option>Anders</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Talencursus - zijn jullie bereid één cursus te betalen voor de au-pair?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_language_course">
							    <option>Ja</option>
							    <option>Nee</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>EHBO cursus - Wij vinden het belangrijk dat uw au-pair een EHBO certificaat heeft in het geval van ongelukken. Zijn jullie bereid €70,- te betalen voor de EHBO cursus voor de au-pair?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_first_aid">
							    <option>Ja</option>
							    <option>Nee</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>HBN club - 3 keer per jaar organiseert HBN een DUTCH-EVENT met alle au-pairs. Zijn jullie bereid €42,- per event te betalen zodat de au-pair hieraan deel kan nemen?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    				    <div class="form-control custom-select">
    						<select name="fa_hbn_club">
							    <option>Ja</option>
							    <option>Nee</option>
						  	</select>
    					</div> 
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Telefoon - De au-pair krijgt een telefoonkosten vergoeding van minimaal €10,- per maand. Gaan jullie hiermee akkoord?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="fa_phone_expenses">
							    <option>Ja</option>
							    <option>Nee</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    				<h4><b>Retourticket - Tot welk bedrag zijn jullie bereid bij te dragen aan een eventueel retourticket?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_return_ticket" class="form-control"></div>
    			</div>
    		</div>
    	</div>
    	<input type="submit" name="" class="btn next-button" value="VOLTOOIEN">
    </form>
<?php } ?>
	</div>
</div>