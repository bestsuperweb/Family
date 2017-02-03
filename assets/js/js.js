    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");  
        if($(this).html() == '<span class="glyphicon glyphicon-triangle-left"></span>'){
        	$(this).html('<span class="glyphicon glyphicon-triangle-right"></span>');
        }else{
        	$(this).html('<span class="glyphicon glyphicon-triangle-left"></span>');
        }    
    });
    
    $(".family-create .input-group.date").datetimepicker({
    	todayBtn: 'linked',
    	todayHighlight: true,
    	format: 'yyyy-mm-dd',
    	minView: 'month',
    	autoclose: true
    });

    $(".family-edit .input-group.date").datetimepicker({
        todayBtn: 'linked',
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        minView: 'month',
        autoclose: true
    });    

    $(".input-group.schedule-date").datetimepicker({
        todayBtn: 'linked',
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        minView: 'month',
        daysOfWeekDisabled: [0],
        autoclose: true
    });

    $(".schedule-time").datetimepicker({
        startView: 'day',
        format: 'hh:ii',
        autoclose: true,
        minuteStep: 15
    });
    

    $(document).ready(function(){
        if($(window).width() > 768){
            $(".multiple-select").multiselect({
                numberDisplayed: 3
            });                
        }else{
            $(".multiple-select").multiselect();
        }
        $('button.multiselect').removeClass('btn btn-default').addClass('form-control');   

        if( $('.alert').children().length == 0 ){
            $('.alert').hide();
        }
    });

    $("input[name=sd_start_time]").val(' ');

        
    $('.add-child').on('click', function(){
        number_kids = $('input[name=fa_kids]').val();
        add_kid = '';
        
        for( var i = 2; i <= number_kids; i++){
        add_kid = add_kid + '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Name child '+i+'</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="text" name="fa_k' + i + '_name" class="form-control"></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Gender child '+i+'</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_gender">                                <option>Boy</option>                                <option>Girl</option>                                                           </select>                        </div>                                          </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Birth date child '+i+'</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="input-group date">                        <input type="text" class="form-control" name="fa_k'+i+'_date_of_birth">                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>                        </div>                    </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Age child '+i+'</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><input type="number" name="fa_k'+i+'_age" class="form-control"></div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>School/daycare child '+i+'</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_school">                                <option>N/A</option>                                <option>Playgroup</option>                                <option>Nursery</option>                                <option>Primary</option>                                <option>Secondary School</option>                                <option>Other</option>                            </select>                        </div></div>                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Monday</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_monday">                                <option>Whole day</option>                                <option>Morning</option>                                <option>Afternoon</option>                                <option>None</option>                            </select>                        </div>                     </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Tuesday</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_tuesday">                                <option>Whole day</option>                                <option>Morning</option>                                <option>Afternoon</option>                                <option>None</option>                            </select>                        </div>                                          </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Wednesday</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_wednesday">                                <option>Whole day</option>                                <option>Morning</option>                                <option>Afternoon</option>                                <option>None</option>                            </select>                        </div>                     </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Thursday</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_thursday">                                <option>Whole day</option>                                <option>Morning</option>                                <option>Afternoon</option>                                <option>None</option>                            </select>                        </div>                                          </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>Friday</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_friday">                                <option>Whole day</option>                                <option>Morning</option>                                <option>Afternoon</option>                                <option>None</option>                            </select>                        </div>                     </div>                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"><h4><b>How do the kids go to school?</b></h4></div>                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">                        <div class="form-control custom-select">                            <select name="fa_k'+i+'_commute">                                <option>Walking</option>                                <option>Biking</option>                                <option>Car</option>                                <option>Other</option>                            </select>                        </div>                     </div>';
            
        }
        $(this).parent().html(add_kid);

        $(".family-create .input-group.date").datetimepicker({
            todayBtn: 'linked',
            todayHighlight: true,
            format: 'yyyy-mm-dd',
            minView: 'month',
            autoclose: true
        });
    });

    
    (function($) {

	  'use strict';

	  $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
	    var $target = $(e.target);
	    var $tabs = $target.closest('.nav-tabs-responsive');
	    var $current = $target.closest('li');
	    var $parent = $current.closest('li.dropdown');
			$current = $parent.length > 0 ? $parent : $current;
	    var $next = $current.next();
	    var $prev = $current.prev();
	    var updateDropdownMenu = function($el, position){
	      $el
	      	.find('.dropdown-menu')
	        .removeClass('pull-xs-left pull-xs-center pull-xs-right')
	      	.addClass( 'pull-xs-' + position );
	    };

	    $tabs.find('>li').removeClass('next prev');
	    $prev.addClass('prev');
	    $next.addClass('next');
	    
	    updateDropdownMenu( $prev, 'left' );
	    updateDropdownMenu( $current, 'center' );
	    updateDropdownMenu( $next, 'right' );
	  });

	})(jQuery);

    