

$(document).ready(function()
{
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");  
        if($(this).html() == '<span class="glyphicon glyphicon-triangle-left"></span>'){
        	$(this).html('<span class="glyphicon glyphicon-triangle-right"></span>');
        }else{
        	$(this).html('<span class="glyphicon glyphicon-triangle-left"></span>');
        }    
    });
    
    $(".profile-create .input-group.date").datetimepicker({
    	todayBtn: 'linked',
    	todayHighlight: true,
    	format: 'yyyy-mm-dd',
    	minView: 'month',
    	autoclose: true
    });

    $(".profile-edit .input-group.date").datetimepicker({
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
    $('.schedule-time').datetimepicker('setHoursDisabled', [0,1,2,3,4,5]);

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

    $("a.next-button.delete-button").on('click', function(){
        var r = confirm("Are you sure to delete?");
        if (r == true) {
            var document_id = $(this).attr('data-id');
            $.ajax({
                url: window.base_url+"document/delete/"+document_id,
                type: 'post',
                success: function(result){
                    if(result == 'success'){
                        location.reload();
                    }else{
                        alert('Failed to delete document...');
                    }
                }
            });
        }
        
    });

    $("a.next-button.approve-button").on('click', function(){
        var document_id = $(this).attr('data-id');
        $.ajax({
            url: window.base_url+"document/update/"+document_id+'/2',
            type: 'post',
            success: function(result){
                if(result == 'success'){
                    location.reload();
                }else{
                    alert('Failed to delete document...');
                }
            }
        });
    });

    $('a.delete-noitity').on('click', function(){
        var r = confirm("Are you sure to delete?");
        if (r == true) {
            var notity_id = $(this).attr('data-id');
            $.ajax({
                url: window.base_url+"notities/delete/"+notity_id,
                type: 'post',
                success: function(result){
                    if(result == 'success'){
                        location.reload();
                    }else{
                        alert('Failed to delete notity...');
                    }
                }
            });
        }
    });

    $('a.delete-task').on('click', function(){
        var r = confirm("Are you sure to delete?");
        if (r == true) {
            var task_id = $(this).attr('data-id');
            $.ajax({
                url: window.base_url+"tasks/delete/"+task_id,
                type: 'post',
                success: function(result){
                    if(result == 'success'){
                        location.reload();
                    }else{
                        alert('Failed to delete task...');
                    }
                }
            });
        }
    });

    $('a.complete-task').on('click', function(){
        var task_id = $(this).attr('data-id');
        $.ajax({
            url: window.base_url+"tasks/update/1/"+task_id,
            type: 'post',
            success: function(result){
                if(result == 'success'){
                    location.reload();
                }else{
                    alert('Server error...');
                }
            }
        });
    });

    $('.submit-schedule').on('click', function(){
        html2canvas(document.getElementById('timeschedule-div'), {
          onrendered: function(canvas) {
            var imagedata = canvas.toDataURL('image/jpeg');
            var imgdata = imagedata.replace(/^data:image\/(png|jpeg);base64,/, "");
            var family_id = $('.submit-schedule').attr('data-id');
            $.ajax({
                type: "POST",
                url: window.base_url + "families/generate_document/2",
                data: { imgdata:imgdata, familyId: family_id },
                success : function(response)
                {
                    if (response == 'success') {
                        $('.alert-success span').html('Timeschedule was successfully saved!');
                        $('.alert-success').fadeIn(1000).fadeOut(3000);
                        var green_check = window.base_url+'assets/img/check-green.png';
                        var id = $(this).attr('href');
                        var current = '#collapse' + (parseInt(id.slice(-1)) - 1);  

                        $('.panel-title a').each(function(){
                            if ($(this).attr('href') == current) {
                                $(this).children('.collapse-img').attr('src', green_check);
                            }
                            if($(this).attr('href') == id){
                                $(this).click();
                            }
                        });

                    }else{
                        $('.alert-danger span').html('There are an error to save timeschedule!');
                        $('.alert-danger').fadeIn(1000).fadeOut(3000);
                    }
                }
            });
          }
        });
    });

    $('.get-income').on('click', function(){
        $.ajax({
            url: window.base_url+"families/generate_document/3",
            type: 'post',
            success: function(result){
                if(result == 'success'){
                    alert('Success!');
                }else{
                    alert('Server error...');
                }                
                // location.reload();
            }
        });
    });

    $('.panel-title').on('click', function(){
        var close_icon  = window.base_url+'assets/img/close-icon.png';
        var reload_icon = window.base_url+'assets/img/reload-icon.png';
        var green_check = window.base_url+'assets/img/check-green.png';
        var obj = $(this).children('a').children('.collapse-img');
        if( obj.attr('src') == close_icon){
            $('.panel-title').each(function(){
                if ($(this).children('a').children('.collapse-img').attr('src') != green_check) {
                    $(this).children('a').children('.collapse-img').attr('src', close_icon);
                }
            });
            obj.attr('src', reload_icon);            

        }else if( obj.attr('src') == reload_icon ){

            obj.attr('src', close_icon);

        }else{
            $('.panel-title').each(function(){
                if ($(this).children('a').children('.collapse-img').attr('src') != green_check) {
                    $(this).children('a').children('.collapse-img').attr('src', close_icon);
                }
            });
        }
    });

    $('.trigger-select').change(function(){
        var id = $(this).find("option:selected").attr("href");
        var obj = $(id).parent().children('.panel-heading').children('.panel-title');
        // obj.trigger('click');
        obj.children('a').click();
      
    });

    $('.next-step').on('click', function(){

        var green_check = window.base_url+'assets/img/check-green.png';
        var id = $(this).attr('href');
        if ( queue = $(this).attr('data-queue')){
            var dropzone = Dropzone.instances[queue];
            dropzone.processQueue();
            dropzone.on("complete", function(file) {
                if ((id.slice(-1) == '0')||(id.slice(-2) == '11')) {
                    var current = '#collapse' + (parseInt(id.slice(-2)) - 1);  
                }else{
                    var current = '#collapse' + (parseInt(id.slice(-1)) - 1);  
                }
                
                $('.panel-title a').each(function(){
                    if ($(this).attr('href') == current) {
                        $(this).children('.collapse-img').attr('src', green_check);
                    }
                    if($(this).attr('href') == id){
                        $(this).click();
                    }
                });
            });

        }else{

            if (id.slice(-1) == '0') {
                var current = '#collapse' + (parseInt(id.slice(-2)) - 1);  
            }else{
                var current = '#collapse' + (parseInt(id.slice(-1)) - 1);  
            }
            
            $('.panel-title a').each(function(){
                if ($(this).attr('href') == current) {
                    $(this).children('.collapse-img').attr('src', green_check);
                }
                if($(this).attr('href') == id){
                    $(this).click();
                }
            });

        }        
        
    });

    $('.update-report').on('click', function(){
        
        var green_check = window.base_url+'assets/img/check-green.png';
        var id = $(this).attr('href');

        $.ajax({
            url: window.base_url+"index/save_profile/" + $(this).attr('data-step'),
            type: 'post',
            success: function(result){                

                if(result == 'success'){
                    if (id.slice(-1) == '0') {
                        var current = '#collapse' + (parseInt(id.slice(-2)) - 1);  
                    }else{
                        var current = '#collapse' + (parseInt(id.slice(-1)) - 1);  
                    }
                    
                    $('.panel-title a').each(function(){
                        if ($(this).attr('href') == current) {
                            $(this).children('.collapse-img').attr('src', green_check);
                        }
                        if($(this).attr('href') == id){
                            $(this).click();
                        }
                    });
                }else{
                    alert('Server error...');
                }                
                // location.reload();
            }
        });
    });

    $(".family-last").on('click', function(){
        alert('ghost');
    });

    $('input[name="search_key"][type="text"]').on('keyup', function(){
        $('input[name="search_key"][type="hidden"]').val($('input[name="search_key"][type="text"]').val());
    });
    
        var options = {};

        $(".uploadForm").each(function(index){
            var i = index;
            options[i] = { 
                beforeSend: function() 
                {
                    $(".upload-progress").eq(i).show();
                    //clear everything
                    $("progress-status").eq(i).html("0%");
                    $("progress-status").eq(i).width("0%");
                },
                uploadProgress: function(event, position, total, percentComplete) 
                {
                    $(".progress-status").eq(i).html(percentComplete + "%");
                    $(".progress-status").eq(i).css("width", percentComplete + "%");     
                },
                success: function() 
                {
                    $(".progress-status").eq(i).html("100% complete");
                    $(".progress-status").eq(i).css("width", "100%");
             
                },
                complete: function(response) 
                {
                    if(response.responseText == 'success'){
                        $('.upload-success').eq(i).fadeIn(1000).fadeOut(3000);
                        $(".progress-status").eq(i).html("100% complete");
                        $(".progress-status").eq(i).css("width", "100%");
                        location.reload();
                    }else{
                        $('.upload-error').eq(i).fadeIn(1000).fadeOut(3000);
                        $(".upload-progress").eq(i).hide();
                    }
                    
                },
                error: function()
                {
                    $('.upload-error').eq(i).fadeIn(1000).fadeOut(3000);
             
                }
             
            };

            $(".uploadForm").eq(i).ajaxForm(options[i]);

        });
         
     
         // $(".uploadForm").ajaxForm(options[$(".uploadForm").index($(this))]);
     
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

    