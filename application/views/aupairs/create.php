
<!-- views/index/profile.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid profile-create ">
    <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
    </div>
    <h1><i><b>Au-Pair Registeration</b></i></h1> 
    <?php echo form_open('aupairs/create/'); ?>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Full Name</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_full_name" class="form-control" required="true"></div>
    			</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Gender</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_gender">
                                <option>Male</option>
                                <option>Female</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Date of birth</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
	    				<div class="input-group date">
	    				<input type="text" class="form-control" name="ap_date_of_birth">
	    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	    				</div>
    				</div>
				</div>    			
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Nationality</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
    					<div class="form-control custom-select">
    						<select name="ap_nationality">
							    <option>Dutch</option>
							    <option>Greek</option>
							    <option>Turkish</option>
							    <option>Spanish</option>
						  	</select>
    					</div>    					
    				</div>
    			</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Address</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_address" class="form-control" required="true"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Email Address</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="email" name="ap_email" class="form-control"></div>
                </div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Phone number</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="ap_phone" class="form-control" min="1000"></div>
    			</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Skype name</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_skype" class="form-control" required="true"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Height in cm</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_height" class="form-control" required="true"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Weight in kg</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_weight" class="form-control" required="true"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>When are you available to start?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="input-group date">
                        <input type="text" class="form-control" name="ap_start_date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Period of stay</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_period_of_stay">
                                <option>3 months</option>
                                <option>6 months</option>
                                <option>10 months</option>
                                <option>1 year</option>
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>How much are you willing to contribute to your hosts for your flight ticket?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="number" name="ap_contribution_flight" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Will care for children under 2 years of age</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_children_under_2">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>Max amounts of children</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="number" name="ap_max_amount_children" class="form-control"></div>
                </div>
    		</div>

    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Religion</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_religion" class="form-control" required="true"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Interests / Hobbies</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_interests" class="form-control" required="true"></div>
    			</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you smoke?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_smoker">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have tattoos?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_tattoos">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have piercings?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_piercings">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>What kind of education did you have and for how many years?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_education" class="form-control"></div>
    			</div>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>What is your current occupation?</b></h4></div>
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_current_job" class="form-control"></div>
    			</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>What kind of experience with child care do you have and for how many years?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_experience" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Did you work as an au-pair before?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_aupair_experience">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you know how to swim?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_swimming">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Do you have a drivers license?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_drivers_license">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>What languages do you speak?</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_languages" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>Disclaimer service fee</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_disclaimer_service_fee" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <h4><b>Place</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="ap_place" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Date</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="input-group date">
                        <input type="text" class="form-control" name="ap_date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>* I hereby accept the terms and conditions of the HBN Au Pair program</b></h4></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="form-control custom-select">
                            <select name="ap_dislaimer_terms_conditions">
                                <option>Yes</option>
                                <option>No</option>                               
                            </select>
                        </div>                      
                    </div>
                </div>
    		</div>
    	</div>
	   <input type="submit" name="" class="btn next-button" value="Au-Pair Register">
    </form>  

	</div>
</div>