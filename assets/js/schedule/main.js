jQuery(document).ready(function($){
	var transitionEnd = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend';
	var transitionsSupported = ( $('.csstransitions').length > 0 );
	//if browser does not support transitions - use a different event to trigger them
	if( !transitionsSupported ) transitionEnd = 'noTransition';
	
	//should add a loding while the events are organized 

	function SchedulePlan( element ) {
		this.element = element;
		this.timeline = this.element.find('.timeline');
		this.timelineItems = this.timeline.find('li');
		this.timelineItemsNumber = this.timelineItems.length;
		this.timelineStart = getScheduleTimestamp(this.timelineItems.eq(0).text());
		//need to store delta (in our case half hour) timestamp
		this.timelineUnitDuration = getScheduleTimestamp(this.timelineItems.eq(1).text()) - getScheduleTimestamp(this.timelineItems.eq(0).text());

		this.eventsWrapper = this.element.find('.events');
		this.eventsGroup = this.eventsWrapper.find('.events-group');
		this.singleEvents = this.eventsGroup.find('.single-event');
		this.eventSlotHeight = this.eventsGroup.eq(0).children('.top-info').outerHeight();

		this.modal = this.element.find('.event-modal');
		this.modalHeader = this.modal.find('.header');
		this.modalHeaderBg = this.modal.find('.header-bg');
		this.modalBody = this.modal.find('.body'); 
		this.modalBodyBg = this.modal.find('.body-bg'); 
		this.modalMaxWidth = 800;
		this.modalMaxHeight = 480;

		this.animating = false;

		this.initSchedule();
	}

	SchedulePlan.prototype.initSchedule = function() {
		this.scheduleReset();
		this.initEvents();
	};

	SchedulePlan.prototype.scheduleReset = function() {
		var mq = this.mq();
		if( mq == 'desktop') {
			//in this case you are on a desktop version (first load or resize from mobile) && !this.element.hasClass('js-full') 
			// this.eventSlotHeight = this.eventsGroup.eq(0).children('.top-info').outerHeight();
			this.eventSlotHeight = 50;
			this.element.addClass('js-full');
			this.placeEvents();
			this.element.hasClass('modal-is-open') && this.checkEventModal();
		} else if(  mq == 'mobile' && this.element.hasClass('js-full') ) {
			//in this case you are on a mobile version (first load or resize from desktop)
			this.element.removeClass('js-full loading');
			this.eventsGroup.children('ul').add(this.singleEvents).removeAttr('style');
			this.eventsWrapper.children('.grid-line').remove();
			this.element.hasClass('modal-is-open') && this.checkEventModal();
		} else if( mq == 'desktop' && this.element.hasClass('modal-is-open')){
			//on a mobile version with modal open - need to resize/move modal window
			this.checkEventModal('desktop');
			this.element.removeClass('loading');
		} else {
			this.element.removeClass('loading');
		}
	};

	SchedulePlan.prototype.initEvents = function() {
		var self = this;

		this.singleEvents.each(function(){
			//create the .event-date element for each event
			var durationLabel = '<span class="event-date">'+$(this).data('start')+' - '+$(this).data('end')+'</span>';
			$(this).children('a.single-event-modal').prepend($(durationLabel));

			//detect click on the event and open the modal
			$(this).on('dblclick', 'a.single-event-modal', function(event){
				event.preventDefault();
				if( !self.animating ) self.openModal($(this));
			});
		});

		//close modal window
		this.modal.on('click', '.close', function(event){
			event.preventDefault();
			if( !self.animating ) self.closeModal(self.eventsGroup.find('.selected-event'));
		});
		this.element.on('click', '.cover-layer', function(event){
			if( !self.animating && self.element.hasClass('modal-is-open') ) self.closeModal(self.eventsGroup.find('.selected-event'));
		});
	};

	SchedulePlan.prototype.placeEvents = function() {
		var self = this;
		this.singleEvents.each(function(){
			//place each event in the grid -> need to set top position and height
			var start = getScheduleTimestamp($(this).attr('data-start')),
				duration = getScheduleTimestamp($(this).attr('data-end')) - start;

			var eventTop = self.eventSlotHeight*(start - self.timelineStart)/self.timelineUnitDuration,
				eventHeight = self.eventSlotHeight*duration/self.timelineUnitDuration;
			
			$(this).css({
				top: (eventTop-1) +'px',
				height: (eventHeight+1)+'px'
			});
		});

		this.element.removeClass('loading');
	};

	SchedulePlan.prototype.openModal = function(event) {
		var self = this;
		var mq = self.mq();
		this.animating = true;

		//update event name and time
		this.modalHeader.find('.event-name').text(event.find('.event-name').text());
		this.modalHeader.find('.event-date').text(event.find('.event-date').text());
		this.modal.attr('data-event', event.parent().attr('data-event'));

		//update event content
		// this.modalBody.find('.event-info').load(event.parent().attr('data-content')+'.html .event-info > *', function(data){
		// 	//once the event content has been loaded
		// 	self.element.addClass('content-loaded');
		// });
		this.modalBody.find('.event-info').css({'padding': '45px', 'font-size': '18px', 'opacity': 1})
		.html(event.find('.event-content').html(), function(data){
			//once the event content has been loaded
			self.element.addClass('content-loaded');
		});

		this.element.addClass('modal-is-open');

		setTimeout(function(){
			//fixes a flash when an event is selected - desktop version only
			event.parent('li').addClass('selected-event');
		}, 10);

		if( mq == 'mobile' ) {
			self.modal.one(transitionEnd, function(){
				self.modal.off(transitionEnd);
				self.animating = false;
			});
		} else {
			var eventTop = event.offset().top - $(window).scrollTop(),
				eventLeft = event.offset().left,
				eventHeight = event.innerHeight(),
				eventWidth = event.innerWidth();

			var windowWidth = $(window).width(),
				windowHeight = $(window).height();

			var modalWidth = ( windowWidth*.8 > self.modalMaxWidth ) ? self.modalMaxWidth : windowWidth*.8,
				modalHeight = ( windowHeight*.8 > self.modalMaxHeight ) ? self.modalMaxHeight : windowHeight*.8;

			var modalTranslateX = parseInt((windowWidth - modalWidth)/2 - eventLeft),
				modalTranslateY = parseInt((windowHeight - modalHeight)/2 - eventTop);
			
			var HeaderBgScaleY = modalHeight/eventHeight,
				BodyBgScaleX = (modalWidth - eventWidth);

			//change modal height/width and translate it
			self.modal.css({
				top: eventTop+'px',
				left: eventLeft+'px',
				height: modalHeight+'px',
				width: modalWidth+'px',
			});
			transformElement(self.modal, 'translateY('+modalTranslateY+'px) translateX('+modalTranslateX+'px)');

			//set modalHeader width
			self.modalHeader.css({
				width: eventWidth+'px',
			});
			//set modalBody left margin
			self.modalBody.css({
				marginLeft: eventWidth+'px',
			});

			//change modalBodyBg height/width ans scale it
			self.modalBodyBg.css({
				height: eventHeight+'px',
				width: '1px',
			});
			transformElement(self.modalBodyBg, 'scaleY('+HeaderBgScaleY+') scaleX('+BodyBgScaleX+')');

			//change modal modalHeaderBg height/width and scale it
			self.modalHeaderBg.css({
				height: eventHeight+'px',
				width: eventWidth+'px',
			});
			transformElement(self.modalHeaderBg, 'scaleY('+HeaderBgScaleY+')');
			
			self.modalHeaderBg.one(transitionEnd, function(){
				//wait for the  end of the modalHeaderBg transformation and show the modal content
				self.modalHeaderBg.off(transitionEnd);
				self.animating = false;
				self.element.addClass('animation-completed');
			});
		}

		//if browser do not support transitions -> no need to wait for the end of it
		if( !transitionsSupported ) self.modal.add(self.modalHeaderBg).trigger(transitionEnd);
	};

	SchedulePlan.prototype.closeModal = function(event) {
		var self = this;
		var mq = self.mq();

		this.animating = true;

		if( mq == 'mobile' ) {
			this.element.removeClass('modal-is-open');
			this.modal.one(transitionEnd, function(){
				self.modal.off(transitionEnd);
				self.animating = false;
				self.element.removeClass('content-loaded');
				event.removeClass('selected-event');
			});
		} else {
			var eventTop = event.offset().top - $(window).scrollTop(),
				eventLeft = event.offset().left,
				eventHeight = event.innerHeight(),
				eventWidth = event.innerWidth();

			var modalTop = Number(self.modal.css('top').replace('px', '')),
				modalLeft = Number(self.modal.css('left').replace('px', ''));

			var modalTranslateX = eventLeft - modalLeft,
				modalTranslateY = eventTop - modalTop;

			self.element.removeClass('animation-completed modal-is-open');

			//change modal width/height and translate it
			this.modal.css({
				width: eventWidth+'px',
				height: eventHeight+'px'
			});
			transformElement(self.modal, 'translateX('+modalTranslateX+'px) translateY('+modalTranslateY+'px)');
			
			//scale down modalBodyBg element
			transformElement(self.modalBodyBg, 'scaleX(0) scaleY(1)');
			//scale down modalHeaderBg element
			transformElement(self.modalHeaderBg, 'scaleY(1)');

			this.modalHeaderBg.one(transitionEnd, function(){
				//wait for the  end of the modalHeaderBg transformation and reset modal style
				self.modalHeaderBg.off(transitionEnd);
				self.modal.addClass('no-transition');
				setTimeout(function(){
					self.modal.add(self.modalHeader).add(self.modalBody).add(self.modalHeaderBg).add(self.modalBodyBg).attr('style', '');
				}, 10);
				setTimeout(function(){
					self.modal.removeClass('no-transition');
				}, 20);

				self.animating = false;
				self.element.removeClass('content-loaded');
				event.removeClass('selected-event');
			});
		}

		//browser do not support transitions -> no need to wait for the end of it
		if( !transitionsSupported ) self.modal.add(self.modalHeaderBg).trigger(transitionEnd);
	}

	SchedulePlan.prototype.mq = function(){
		//get MQ value ('desktop' or 'mobile') 
		var self = this;
		return window.getComputedStyle(this.element.get(0), '::before').getPropertyValue('content').replace(/["']/g, '');
	};

	SchedulePlan.prototype.checkEventModal = function(device) {
		this.animating = true;
		var self = this;
		var mq = this.mq();

		if( mq == 'mobile' ) {
			//reset modal style on mobile
			self.modal.add(self.modalHeader).add(self.modalHeaderBg).add(self.modalBody).add(self.modalBodyBg).attr('style', '');
			self.modal.removeClass('no-transition');	
			self.animating = false;	
		} else if( mq == 'desktop' && self.element.hasClass('modal-is-open') ) {
			self.modal.addClass('no-transition');
			self.element.addClass('animation-completed');
			var event = self.eventsGroup.find('.selected-event');

			var eventTop = event.offset().top - $(window).scrollTop(),
				eventLeft = event.offset().left,
				eventHeight = event.innerHeight(),
				eventWidth = event.innerWidth();

			var windowWidth = $(window).width(),
				windowHeight = $(window).height();

			var modalWidth = ( windowWidth*.8 > self.modalMaxWidth ) ? self.modalMaxWidth : windowWidth*.8,
				modalHeight = ( windowHeight*.8 > self.modalMaxHeight ) ? self.modalMaxHeight : windowHeight*.8;

			var HeaderBgScaleY = modalHeight/eventHeight,
				BodyBgScaleX = (modalWidth - eventWidth);

			setTimeout(function(){
				self.modal.css({
					width: modalWidth+'px',
					height: modalHeight+'px',
					top: (windowHeight/2 - modalHeight/2)+'px',
					left: (windowWidth/2 - modalWidth/2)+'px',
				});
				transformElement(self.modal, 'translateY(0) translateX(0)');
				//change modal modalBodyBg height/width
				self.modalBodyBg.css({
					height: modalHeight+'px',
					width: '1px',
				});
				transformElement(self.modalBodyBg, 'scaleX('+BodyBgScaleX+')');
				//set modalHeader width
				self.modalHeader.css({
					width: eventWidth+'px',
				});
				//set modalBody left margin
				self.modalBody.css({
					marginLeft: eventWidth+'px',
				});
				//change modal modalHeaderBg height/width and scale it
				self.modalHeaderBg.css({
					height: eventHeight+'px',
					width: eventWidth+'px',
				});
				transformElement(self.modalHeaderBg, 'scaleY('+HeaderBgScaleY+')');
			}, 10);

			setTimeout(function(){
				self.modal.removeClass('no-transition');
				self.animating = false;	
			}, 20);
		}
	};

	// var schedules = $('.cd-schedule');
	// var objSchedulesPlan = [],
		var windowResize = false;
	
	// if( schedules.length > 0 ) {
	// 	schedules.each(function(){
	// 		//create SchedulePlan objects
	// 		objSchedulesPlan.push(new SchedulePlan($(this)));
	// 	});
	// }

	$(window).on('resize', function(){
		if( !windowResize ) {
			windowResize = true;
			(!window.requestAnimationFrame) ? setTimeout(checkResize) : window.requestAnimationFrame(checkResize);
		}
	});

	$(window).keyup(function(event) {
		if (event.keyCode == 27) {
			objSchedulesPlan.forEach(function(element){
				element.closeModal(element.eventsGroup.find('.selected-event'));
			});
		}
	});

	function checkResize(){
		objSchedulesPlan.forEach(function(element){
			element.scheduleReset();
		});
		windowResize = false;
	}

	function getScheduleTimestamp(time) {
		//accepts hh:mm format - convert hh:mm to timestamp
		time = time.replace(/ /g,'');
		var timeArray = time.split(':');
		var timeStamp = parseInt(timeArray[0])*60 + parseInt(timeArray[1]);
		return timeStamp;
	}

	function transformElement(element, value) {
		element.css({
		    '-moz-transform': value,
		    '-webkit-transform': value,
			'-ms-transform': value,
			'-o-transform': value,
			'transform': value
		});
	}
// main call function for scheduler...
	function load_schedule(user_type, user_id){
		$.ajax({
            url: window.base_url+"schedule/get/"+user_type+"/"+user_id,
            type: 'post',
            success: function(result){
                $(".events").html(result);
                $('.single-event').draggable({
                	containment: ".events", 
                	scroll: false,
				    stop: function(){

				    		var offset = $(this).offset();
				            var offset1 = $(this).parent().offset();
				            var offset2 = $('.events').offset();
				           	
				           	var date_index = Math.floor((offset.left - offset2.left)/$(this).width());
				           	var date = $('.top-info h3').eq(date_index).html();				           	

				           	var start_time_index = Math.floor((offset.top - offset1.top)/$('.timeline ul li').height());
				           	var start_time = $('.timeline ul li span').eq(start_time_index).html();
				           	var start_mod = (offset.top - $('.timeline ul li').eq(start_time_index).offset().top)/$('.timeline ul li').height();

				           	var end_time_index = Math.floor((offset.top + $(this).height() - offset1.top)/$('.timeline ul li').height());
				           	var end_time = $('.timeline ul li span').eq(end_time_index).html();
				           	var end_mod = (offset.top - $('.timeline ul li').eq(end_time_index).offset().top)/$('.timeline ul li').height();

				           	start_time = precise_time(start_time, start_mod);
				           	end_time = precise_time(end_time, end_mod);

				           	var data = { 
								sd_date: date,
								sd_start_time: start_time,
								sd_end_time: end_time
							};
							$.ajax({
					            url: window.base_url+"schedule/update/"+ $(this).attr('data-id') + '/2',
					            type: 'post',
					            data: data,
					            success: function(result){
					            	if(result == 'success'){
					                	// schedule_alert('A schedule was successfully updated.', 1);
					                	load_schedule(window.user_type, window.user_id);
					                }else{
					                	schedule_alert('Fail to update a schedule. Review your inputs and try again.', 0);
					                }
					            }
					        });
				    }
                });

            	$( ".single-event" ).resizable({
            		containment: "parent",
            		handles: "n, s",
            		stop: function(){

            			var offset = $(this).offset();
				            var offset1 = $(this).parent().offset();
				            var offset2 = $('.events').offset();
				           	
				           	var date_index = Math.floor((offset.left - offset2.left)/$(this).width());
				           	var date = $('.top-info h3').eq(date_index).html();
				           	
				           	var start_time_index = Math.floor((offset.top - offset1.top)/$('.timeline ul li').height());
				           	var start_time = $('.timeline ul li span').eq(start_time_index).html();
				           	var start_mod = (offset.top - $('.timeline ul li').eq(start_time_index).offset().top)/$('.timeline ul li').height();

				           	var end_time_index = Math.floor((offset.top + $(this).height() - offset1.top)/$('.timeline ul li').height());
				           	var end_time = $('.timeline ul li span').eq(end_time_index).html();
				           	var end_mod = (offset.top - $('.timeline ul li').eq(end_time_index).offset().top)/$('.timeline ul li').height();

				           	start_time = precise_time(start_time, start_mod);
				           	end_time = precise_time(end_time, end_mod);

				           	var data = { 
								sd_date: date,
								sd_start_time: start_time,
								sd_end_time: end_time
							};
							$.ajax({
					            url: window.base_url+"schedule/update/"+ $(this).attr('data-id') + '/2',
					            type: 'post',
					            data: data,
					            success: function(result){
					            	if(result == 'success'){
					                	// schedule_alert('A schedule was successfully updated.', 1);
					                	load_schedule(window.user_type, window.user_id);
					                }else{
					                	schedule_alert('Fail to update a schedule. Review your inputs and try again.', 0);
					                }
					            }
					        });

            		}
            	});

                var schedules = $('.cd-schedule');
                var objSchedulesPlan = [];           
                if( schedules.length > 0 ) {
                    schedules.each(function(){
                        //create SchedulePlan objects
                        objSchedulesPlan.push(new SchedulePlan($(this)));
                    });
                }
            }
        });


	}

	function precise_time(time, mod){
		if ( (parseFloat(mod) >= 0.4) && (parseFloat(mod) <= 0.7) ) {

       		if(time.substr(3,2) == '00'){
       			time = time.replace("00", "15");
       		}

       		if(time.substr(3,2) == '30'){
       			time = time.replace("30", "45");
       		}
       	}
       	return time;
	}

	function day_format(date){
		var day = date.getFullYear() + '-' + (date.getMonth()+1) + '-' +date.getDate();
		return day;
	}
	if (window.user_type && window.user_id) {
		$('#select_schedule_date').val(day_format(new Date()));
		load_schedule(window.user_type, window.user_id);			
	}
	
	// --------- scheduler alert temp

	function schedule_alert(str, flag){
		if(flag){
			$('.roadmap_profile #accordion .alert-success span').html(str);
        	$('.roadmap_profile #accordion .alert-success').fadeIn(1000);
        	$('html, body').animate({
		      scrollTop: ($('.roadmap_profile #accordion .alert-success').offset().top - 50)
		    }, 800);
		    $('.roadmap_profile #accordion .alert-success').fadeOut(3000);        	
		}else{
			$('.roadmap_profile #accordion .alert-danger span').html(str);
        	$('.roadmap_profile #accordion .alert-danger').fadeIn(1000);
        	$('html, body').animate({
		      scrollTop: ($('.roadmap_profile #accordion .alert-danger').offset().top - 50)
		    }, 800);
		    $('.roadmap_profile #accordion .alert-danger').fadeOut(3000);        	
		}
	}
	// ----------
	
	$('a.add-schedule').on('click', function(){
		var data = { 
			sd_date: $('#addModal select[name=sd_date]').val(),
			sd_start_time: $('#addModal input[name=sd_start_time]').val(),
			sd_end_time: $('#addModal input[name=sd_end_time]').val(),
			sd_title: $('#addModal input[name=sd_title]').val(),
			sd_content: $('#addModal textarea[name=sd_content]').val(),
			sd_type: $('#addModal select[name=sd_type]').val(),
			sd_user_type: window.user_type,
			sd_user_id: window.user_id
		};
		$.ajax({
            url: window.base_url+"schedule/insert",
            type: 'post',
            data: data,
            success: function(result){
            	$('#addModal').modal("hide");
                if(result == 'success'){
                	schedule_alert('A schedule was successfully inserted.', 1);
                	load_schedule(window.user_type, window.user_id);
                }else{
                	schedule_alert('Fail to insert a schedule. Review your inputs and try again.', 0);
                }
            }
        });
	});

	$('a.edit-schedule').on('click', function(){
		var data = { 
			sd_date: $('#editModal select[name=sd_date]').val(),
			sd_start_time: $('#editModal input[name=sd_start_time]').val(),
			sd_end_time: $('#editModal input[name=sd_end_time]').val(),
			sd_title: $('#editModal input[name=sd_title]').val(),
			sd_content: $('#editModal textarea[name=sd_content]').val(),
			sd_type: $('#editModal select[name=sd_type]').val()
		};
		$.ajax({
            url: window.base_url+"schedule/update/"+ $('input[name=sd_id]').val(),
            type: 'post',
            data: data,
            success: function(result){
            	$('#editModal').modal("hide");
                if(result == 'success'){
                	schedule_alert('A schedule was successfully updated.', 1);
                	load_schedule(window.user_type, window.user_id);
                }else{
                	schedule_alert('Fail to update a schedule. Review your inputs and try again.', 0);
                }
            }
        });
	});
	

	$(function() {
	      $(document).on('mouseenter', '.single-event', function(event) {
	      		// alert($(this).children('.sd-menu').height());
	            $(this).children('.sd-menu').animate({opacity: 1, top: '-=' + ($(this).children('.sd-menu').innerHeight() - 3) + 'px'}, 500);
	      });

	      $(document).on('mouseleave', '.single-event', function(event) {
	      		// alert($(this).children('.sd-menu').position().top);
	            $(this).children('.sd-menu').animate({opacity: 0, top: '+=' + ($(this).children('.sd-menu').innerHeight() - 3) + 'px'}, 500);
	      });

	      $(document).on('click', '.sd-menu a.sd-delete', function(event) {
	      		var id = $(this).attr('data-id');
	      		$.ajax({
		            url: window.base_url+"schedule/delete/"+id,
		            type: 'post',
		            success: function(result){
		            	if(result == 'success'){
		            		schedule_alert('A schedule was successfully deleted.', 1);
		                	load_schedule(window.user_type, window.user_id);
		                }else{
		                	schedule_alert('Something went wrong. Try again.', 0);
		                }
		            }
		        });
	      });

	      $(document).on('click', '.sd-menu a.sd-edit', function(event) {
	      		var li = $(this).parent().parent();
	      		var id = $(this).attr('data-id');
	      		var start_time = li.attr('data-start');
	      		var end_time = li.attr('data-end');
	      		var date = li.attr('data-date');
	      		var type = li.attr('data-event');
	      		var title = li.children('.single-event-modal').children('.event-name').html();
	      		var content = li.children('.single-event-modal').children('.event-content').html();
	      		$('#editModal input[name=sd_id]').val(id);
	      		$('#editModal select[name=sd_date]').val(date);
	      		$('#editModal input[name=sd_start_time]').val(start_time);
	      		$('#editModal input[name=sd_end_time]').val(end_time);
	      		$('#editModal select[name=sd_type]').val(type);
				$('#editModal input[name=sd_title]').val(title);
				$('#editModal textarea[name=sd_content]').val(content);
				$('#editModal').modal('show');				      			      		

	      });

	      $(document).on('change', '#select_schedule_date', function(event){
	      	var date = $(this).val();
	      	load_schedule(window.user_type, window.user_id, date);
	      });


	});

});

