<ul>
	<?php
	
	$dates = get_dates($date);

	foreach ($dates['day'] as $key => $day) { ?>
		<li class="events-group">
			<div class="top-info"><span><?php echo $key; ?></span><h3><?php echo $day; ?></h3></div>

			<ul>
			<?php foreach ($schedules as $k => $schedule) { 
				if($schedule['schedule_date'] == $dates['date'][$key]) {
				?>
				<li  class="single-event"
					 data-start="<?php echo substr($schedule['start_time'],0, 5); ?>" 
					 data-end="<?php echo substr($schedule['end_time'],0, 5); ?>" 
					 data-event="<?php echo $schedule['schedule_type']; ?>" 
					 data-date ="<?php echo $schedule['schedule_date']; ?>">
					<a href="#0" class="single-event-modal">
						<em class="event-name"><?php echo $schedule['title']; ?></em>
						<div class="event-content"><?php echo $schedule['content']; ?></div>						
					</a>
					<div class="sd-menu">
						<a href="#1" class="sd-edit" data-id='<?php echo $schedule['id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="#1" class="sd-delete" data-id='<?php echo $schedule['id']; ?>'><span class="glyphicon glyphicon-remove"></span></a>
					</div>									
				</li>			
			<?php
				}
			}
			?>							
			</ul>
		</li>
	<?php
		}
	?>
</ul>