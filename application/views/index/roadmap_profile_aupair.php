<!-- views/index/roadmap_profile.php  -->
<?php
		$li_class = array();
		$li_class['first'] 	= 'roadmap-top-bar-first';
		$li_class['second'] = 'roadmap-top-bar';
		$li_class['third'] 	= 'roadmap-top-bar';
		$li_class['forth'] 	= 'roadmap-top-bar';
		$li_class['fifth'] 	= 'roadmap-top-bar';
		$li_class['sixth'] 	= 'roadmap-top-bar';
		$li_class['seventh']= 'roadmap-top-bar';
		$li_class['eighth'] = 'roadmap-top-bar';
		switch ($tab) {
			case 1:
				$li_class['first'] = 'roadmap-top-bar-first-active';
				break;
			case 2:
				$li_class['second'] = 'roadmap-top-bar-active';
				break;
			case 3:
				$li_class['third'] = 'roadmap-top-bar-active';
				break;
			case 4:
				$li_class['forth'] = 'roadmap-top-bar-active';
				break;
			case 5:
				$li_class['fifth'] = 'roadmap-top-bar-active';
				break;
			case 6:
				$li_class['sixth'] = 'roadmap-top-bar-active';
				break;
			case 7:
				$li_class['seventh'] = 'roadmap-top-bar-active';
				break;
			case 8:
				$li_class['eighth'] = 'roadmap-top-bar-active';
				break;
			
			default:
				$li_class['first'] = 'roadmap-top-bar-first-active';
				break;
		}
?>
<div id="page-content-wrapper" class="roadmap_profile">
    <div class="container-fluid">
    
    <nav class="navbar roadmap-top-nav">
      <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytopbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	    </div>
        <div class="collapse navbar-collapse" id="mytopbar">
		    <ul class="nav navbar-nav">
		      <li class="<?php echo $li_class['first'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/1');?>">1.Profiel</a></li>
		      <li class="<?php echo $li_class['second'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/2');?>">2.Toetsing</a></li>
		      <li class="<?php echo $li_class['third'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/3');?>">3.Matching</a></li>
		      <li class="<?php echo $li_class['forth'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/4');?>">4.Visa</a></li>
		      <li class="<?php echo $li_class['fifth'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/5');?>">5.Voorbereiding</a></li>
		      <li class="<?php echo $li_class['sixth'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/6');?>">6.Aankomst</a></li>
		      <li class="<?php echo $li_class['seventh'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/7');?>">7.Verblijf</a></li>
		      <li class="<?php echo $li_class['eighth'];?>"><a href="<? echo base_url('index.php/index/roadmap_profile/8');?>">8.Vertrek</a></li>
			</ul>
		</div>
	  </div>
    </nav>

    <h1><i><b>Profiel.</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">HBN maakt allereerst een profiel op naar aanleiding van het intake form en het interview dat wij met jullie als toekomstige Host familie bij jullie thuis hebben. Bij een tweede plaatsing, ontvangen wij graag een schriftelijke update van jullie gezin en recentere foto's van de kinderen. Op basis van het profiel kunnen wij een passende au pair proberen te vinden. Het profiel inclusief de foto’s van jullie en het weekschema met de uren dat jullie haar graag zouden willen inzetten, zal een goed beeld aan de toekomstige au pair van jullie als gastgezin en van de wekelijkse routine geven.<br>
			<b>Kinderen met een handicap:</b> een au pair mag geen specialistische zorg uitoefenen. Dit betreft bijvoorbeeld het toedienen van medicijnen.<br><br></div>
	    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><b>Rijbewijs:</b> Indien het een vereiste is dat jullie au pair een rijbewijs heeft dan is het goed het volgende in overweging te nemen (dit is ook in het intakegesprek ter sprake gekomen). Een au pair van buiten Europa mag officieel maar 185 dagen, na inschrijving bij de gemeente, in Nederland rijden met haar buitenlandse rijbewijs. Een internationaal rijbewijs heeft geen toegevoegde waarde. Wij vragen aan onze kandidaten of ze een geldig rijbewijs hebben of niet, maar als Host Familie is het belangrijk om in de matching fase hierover te spreken en een zeker gevoel te hebben over zijn/haar ervaring en kunde. Het valt niet onder de directe verantwoordelijkheid van HBN. De au pair verzekering die wordt afgesloten bevat geen autoverzekering. Als jullie je au pair willen laten autorijden is het van belang dat jullie haar/hem hier apart voor verzekeren.<br><br></div>	    	
	    </div><br><br>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img"> 1. Weekly timeschedule IND</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		      <div class="panel-body">Het tijdschema is een belangrijk en wettelijk onderdeel van het au pair programma. In Nederland zijn er strenge regels voor hoelang per dag en per week je een au pair überhaupt mag inzetten. Daarom hebben we een voorbeeld weekschema opgesteld waarin de familie specifieke uren op kan geven en waarin aangegeven wordt wie er bij de kinderen verblijft als de au pair er niet is. Ook moet er in dit weekschema staan wie er als back up fungeert aangezien je wettelijk niet afhankelijk mag zijn van je au pair.<br><br>
			  Daarbij is het voor de nieuwe au pair belangrijk alvast te weten wat het weekschema en haar taken zullen zijn. Op deze manier weet ze wat ze kan verwachten en is ze daar goed op voorbereid. Natuurlijk kan dit ook nog wel veranderen. Het is vooral belangrijk dat jullie toekomstige au pair hier zo specifiek mogelijk over wordt geïnformeerd en dat er het hele jaar een goede consensus over bestaat. Daarbij is het belangrijk dat jullie HBN het gehele jaar informeren over structurele verandering in dit schema. Indien gedurende het jaar structurele veranderingen worden aangebracht in het weekschema dient deze opnieuw gedateerd en gesigneerd te worden door host- familie en au pair.<br><br>
			  <b>TO DO:</b> Graag Weekly timeschedule template invullen/aanpassen. Dit weekschema moet voor de VISA aanvraag gedateerd en ondertekend worden door jullie als Host Familie en door jullie au pair.<br><br>
			  Hierin kan de familie een duidelijk overzicht van de dag/weekindeling voor de au pair geven. Het is belangrijk om te laten zien wie er met de kinderen is op elk uur van de dag wanneer de au pair niet wordt ingezet en wie er als back up fungeert als de au pair wel wordt ingezet. Er mag geen afhankelijkheid zijn van de au pair. Het is ook belangrijk te laten zien wat haar taken zijn. Het totaal aantal uren mag maximaal uitkomen op 30 (wordt automatisch berekend). Het maximum aantal uur per dag mag uitkomen op 8. De au pair mag maximaal 5 dagen per week ingezet worden. De huishoudelijke werkzaamheden worden apart aangegeven maar zijn onderdeel van het totaal aantal uren (niet meer dan 30%). De uren moeten specifiek worden opgeschreven (bijv. 08:00-09:00 = 1 uur en 14:30-19:45 = 5,25 uur). Babysit uren in de avond zijn onderdeel van de 30 maximum uren per week en 8 uur per dag.<br><br>
			  <div class="profile-edit row">
			  	<div class="col-xs-12 col-sm-6  col-sm-offset-3 col-md-4  col-md-offset-4 col-lg-2 col-lg-offset-5">
			  		<div class="input-group date">
					<input type="text" class="form-control" id = "select_schedule_date">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					</div>
					<span id="posX"></span><span id="posY"></span>	
			  	</div>			  	
			  </div>
		      <div class="alert alert-success">
		       <strong>Success!</strong> <span></span>
			  </div>
			  <div class="alert alert-danger">
		       <strong>Sorry!</strong> <span></span>
			  </div>
		      <div class="cd-schedule loading">
				<div class="timeline">
					<ul>
						<li><span>09:00</span></li>
						<li><span>09:30</span></li>
						<li><span>10:00</span></li>
						<li><span>10:30</span></li>
						<li><span>11:00</span></li>
						<li><span>11:30</span></li>
						<li><span>12:00</span></li>
						<li><span>12:30</span></li>
						<li><span>13:00</span></li>
						<li><span>13:30</span></li>
						<li><span>14:00</span></li>
						<li><span>14:30</span></li>
						<li><span>15:00</span></li>
						<li><span>15:30</span></li>
						<li><span>16:00</span></li>
						<li><span>16:30</span></li>
						<li><span>17:00</span></li>
						<li><span>17:30</span></li>
						<li><span>18:00</span></li>
					</ul>
				</div> <!-- .timeline -->

				<div class="events" id=>
					
				</div>
				<div class="event-modal">
					<header class="header">
						<div class="content">
							<span class="event-date"></span>
							<h3 class="event-name"></h3>
						</div>

						<div class="header-bg"></div>
					</header>

					<div class="body">
						<div class="event-info"></div>
						<div class="body-bg"></div>
					</div>

					<a href="#0" class="close">Close</a>
				</div>

				<div class="cover-layer"></div>
			
		    </div>

		    <div class="row">
		    	<div class="col-xs-9 col-sm-10 col-md-11 col-lg-11"><input type="submit" name="" class="btn next-button" value="INDIENEN"></div>
		    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><a href="#" class="add-btn" data-toggle="modal" data-target="#addModal">
		    	<img src="<?php echo base_url('assets/img/add-btn.png'); ?>"></a></div>
		    </div>

		      <!-- addModal start -->
			  <div class="modal fade" id="addModal" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Add Schedule</h4>
			        </div>
			        <div class="modal-body">
			        	  <div class="form-group">
			        	  	<div class="input-group date schedule-date">
			        	  	<input type="text" name="sd_date" class="form-control" autocomplete='off'>
			        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			        	  	</div>			        	  	
			        	  </div>
			        	  <div class="form-group">
						    <label>Start Time:</label>
						    <div class="input-group date schedule-time" >
		    				<input type="text" class="form-control"  name="sd_start_time" autocomplete='off'>
		    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		    				</div>
						  </div>
						  <div class="form-group">
						    <label>End Time:</label>
						    <div class="input-group date schedule-time">
		    				<input type="text" class="form-control"  name="sd_end_time" autocomplete='off'>
		    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		    				</div>
						  </div>
						  <div class="form-group">
						  	  <label>Schedule Type:</label>
							  <div class="form-control custom-select">
	    						<select name="sd_type">
								    <option>event-1</option>
								    <option>event-2</option>
								    <option>event-3</option>
								    <option>event-4</option>
							  	</select>
	    					  </div>
    					  </div>
						  <div class="form-group">
						    <label>Schedule Title:</label>
						    <input type="text" class="form-control" name="sd_title" autocomplete='off'>
						  </div>
						  <div class="form-group">
						    <label>Schedule Description:</label>
						    <textarea class="form-control" rows="5" name="sd_content" autocomplete='off'></textarea>
						  </div>
						
			        </div>
			        <div class="modal-footer">			        
			          <a href="#1" class="add-schedule" ><img src="<?php echo base_url('assets/img/add-btn.png'); ?>"></a>
			        </div>
			      </div>
			      
			    </div>
			  </div>
			  <!-- addModal end -->

			  <!-- editModal start -->
			  <div class="modal fade" id="editModal" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Edit Schedule</h4>
			        </div>
			        <div class="modal-body">
			        <input type="hidden" name="sd_id">
			        	  <div class="form-group">
			        	  	<div class="input-group date schedule-date">
			        	  	<input type="text" name="sd_date" class="form-control" autocomplete='off'>
			        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			        	  	</div>			        	  	
			        	  </div>
			        	  <div class="form-group">
						    <label>Start Time:</label>
						    <div class="input-group date schedule-time" >
		    				<input type="text" class="form-control"  name="sd_start_time" autocomplete='off'>
		    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		    				</div>
						  </div>
						  <div class="form-group">
						    <label>End Time:</label>
						    <div class="input-group date schedule-time">
		    				<input type="text" class="form-control"  name="sd_end_time" autocomplete='off'>
		    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		    				</div>
						  </div>
						  <div class="form-group">
						  	  <label>Schedule Type:</label>
							  <div class="form-control custom-select">
	    						<select name="sd_type">
								    <option>event-1</option>
								    <option>event-2</option>
								    <option>event-3</option>
								    <option>event-4</option>
							  	</select>
	    					  </div>
    					  </div>
						  <div class="form-group">
						    <label>Schedule Title:</label>
						    <input type="text" class="form-control" name="sd_title" autocomplete='off'>
						  </div>
						  <div class="form-group">
						    <label>Schedule Description:</label>
						    <textarea class="form-control" rows="5" name="sd_content" autocomplete='off'></textarea>
						  </div>
						
			        </div>
			        <div class="modal-footer">			        
			          <a href="#1" class="edit-schedule" ><img src="<?php echo base_url('assets/img/add-btn.png'); ?>"></a>
			        </div>
			      </div>
			      
			    </div>
			  </div>
			  <!-- editModal end -->

		    </div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img"> 2. Dear au-pair letter</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
		      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
		      commodo consequat.</div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img"> 3. Fotos familie</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > AUPAIR DE <?= strtoupper($aupair['full_name']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
		      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
		      commodo consequat.</div>
		    </div>
		  </div>
        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
        </div>
    </div>
</div>
