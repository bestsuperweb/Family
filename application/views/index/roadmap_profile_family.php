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
		      <li class="<?php echo $li_class['first'];?>"><a href="<?= base_url('index/roadmap_profile/1') ?>">
		      <span>&#10112;</span> Profiel</a></li>
		      <li class="<?php echo $li_class['second'];?>"><a href="<?= base_url('index/roadmap_profile/2') ?>">
		      <span>&#10113;</span> Toetsing</a></li>
		      <li class="<?php echo $li_class['third'];?>"><a href="<?= base_url('index/roadmap_profile/3') ?>">
		      <span>&#10114;</span> Matching</a></li>
		      <li class="<?php echo $li_class['forth'];?>"><a href="<?= base_url('index/roadmap_profile/4') ?>">
		      <span>&#10115;</span> Visa</a></li>
		      <li class="<?php echo $li_class['fifth'];?>"><a href="<?= base_url('index/roadmap_profile/5') ?>">
		      <span>&#10116;</span> Voorbereiding</a></li>
		      <li class="<?php echo $li_class['sixth'];?>"><a href="<?= base_url('index/roadmap_profile/6') ?>">
		      <span>&#10117;</span> Aankomst</a></li>
		      <li class="<?php echo $li_class['seventh'];?>"><a href="<?= base_url('index/roadmap_profile/7') ?>">
		      <span>&#10118;</span> Verblijf</a></li>
		      <li class="<?php echo $li_class['eighth'];?>"><a href="<?= base_url('index/roadmap_profile/8') ?>">
		      <span>&#10119;</span> Vertrek</a></li>
			</ul>
		</div>
	  </div>
    </nav>

    <?php if($tab == 1) { ?>
<!-- start tab1 -->
    <h1><i><b>1. Profiel</b></i></h1>
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
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		      <div class="panel-body">Het tijdschema is een belangrijk en wettelijk onderdeel van het au pair programma. In Nederland zijn er strenge regels voor hoelang per dag en per week je een au pair überhaupt mag inzetten. Daarom hebben we een voorbeeld weekschema opgesteld waarin de familie specifieke uren op kan geven en waarin aangegeven wordt wie er bij de kinderen verblijft als de au pair er niet is. Ook moet er in dit weekschema staan wie er als back up fungeert aangezien je wettelijk niet afhankelijk mag zijn van je au pair.<br><br>
			  Daarbij is het voor de nieuwe au pair belangrijk alvast te weten wat het weekschema en haar taken zullen zijn. Op deze manier weet ze wat ze kan verwachten en is ze daar goed op voorbereid. Natuurlijk kan dit ook nog wel veranderen. Het is vooral belangrijk dat jullie toekomstige au pair hier zo specifiek mogelijk over wordt geïnformeerd en dat er het hele jaar een goede consensus over bestaat. Daarbij is het belangrijk dat jullie HBN het gehele jaar informeren over structurele verandering in dit schema. Indien gedurende het jaar structurele veranderingen worden aangebracht in het weekschema dient deze opnieuw gedateerd en gesigneerd te worden door host- familie en au pair.<br><br>
			  <b>TO DO:</b> Graag Weekly timeschedule template invullen/aanpassen. Dit weekschema moet voor de VISA aanvraag gedateerd en ondertekend worden door jullie als Host Familie en door jullie au pair.<br><br>
			  Hierin kan de familie een duidelijk overzicht van de dag/weekindeling voor de au pair geven. Het is belangrijk om te laten zien wie er met de kinderen is op elk uur van de dag wanneer de au pair niet wordt ingezet en wie er als back up fungeert als de au pair wel wordt ingezet. Er mag geen afhankelijkheid zijn van de au pair. Het is ook belangrijk te laten zien wat haar taken zijn. Het totaal aantal uren mag maximaal uitkomen op 30 (wordt automatisch berekend). Het maximum aantal uur per dag mag uitkomen op 8. De au pair mag maximaal 5 dagen per week ingezet worden. De huishoudelijke werkzaamheden worden apart aangegeven maar zijn onderdeel van het totaal aantal uren (niet meer dan 30%). De uren moeten specifiek worden opgeschreven (bijv. 08:00-09:00 = 1 uur en 14:30-19:45 = 5,25 uur). Babysit uren in de avond zijn onderdeel van de 30 maximum uren per week en 8 uur per dag.<br><br>
			  <!-- <div class="profile-edit row" >
			  	<div class="col-xs-12 col-sm-6  col-sm-offset-3 col-md-4  col-md-offset-4 col-lg-2 col-lg-offset-5">
			  		<div class="input-group date">
					<input type="text" class="form-control" id = "select_schedule_date">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					</div>
					<span id="posX"></span><span id="posY"></span>	
			  	</div>			  	
			  </div> -->
		      <div class="alert alert-success">
		       <strong>Success!</strong> <span></span>
			  </div>
			  <div class="alert alert-danger">
		       <strong>Sorry!</strong> <span></span>
			  </div>
		      <div class="cd-schedule loading" id="timeschedule-div">
				<div class="timeline">
					<ul>
						<li><span>06:00</span></li>
						<li><span>06:30</span></li>
						<li><span>07:00</span></li>
						<li><span>07:30</span></li>
						<li><span>08:00</span></li>
						<li><span>08:30</span></li>
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
						<li><span>18:30</span></li>
						<li><span>19:00</span></li>
						<li><span>19:30</span></li>
						<li><span>20:00</span></li>
						<li><span>20:30</span></li>
						<li><span>21:00</span></li>
						<li><span>21:30</span></li>
						<li><span>22:00</span></li>
						<li><span>22:30</span></li>
						<li><span>23:00</span></li>
						<li><span>23:30</span></li>
						<li><span>24:00</span></li>
					</ul>
				</div> <!-- .timeline -->

				<div class="events" >
					
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
		    	<div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
		    		<a href="#" class="btn next-button submit-schedule" data-id="<?= $family['id'] ?>" >INDIENEN</a>
	    		</div>
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
			        	  	<label>Select Dates:</label>
			        	  	<div class="form-control custom-select">
	    						<select name="sd_date">
								    <option>Mon</option>
								    <option>Tue</option>
								    <option>Wed</option>
								    <option>Thu</option>
								    <option>Fri</option>
								    <option>Sat</option>
								    <option>Sun</option>
							  	</select>
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
			        	  	<label>Select Dates:</label>
			        	  	<div class="form-control custom-select">
	    						<select name="sd_date">
								    <option>Mon</option>
								    <option>Tue</option>
								    <option>Wed</option>
								    <option>Thu</option>
								    <option>Fri</option>
								    <option>Sat</option>
								    <option>Sun</option>
							  	</select>
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
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      	<form action="<?= base_url('index/save_profile/4') ?>" method="POST">
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<p>TO DO: Een korte "Dear au pair letter" schrijven, <b>zie opzet;</b> dit is niet verplicht maar kan een leuk persoonlijk gevoel geven richting de au pair.</p>
						Dear Au Pair,<br>
						Suggesties brief (in het Engels):<br>
						<b>- Korte introductie host ouders, wat uitgebreider over kind(eren);<br>
						- Omschrijven gezinssituatie: jullie werk, hobby’s, school/crèche, interesses en buitenschoolse activiteiten van jullie kind(eren);<br>
						- Waarom willen jullie een au pair;<br>
						- Wat verwachten jullie van jullie (toekomstige) au pair; - Iets leuks over Nederland, plek waar jullie wonen etc</b><br>

						<div><input type="submit" class="btn next-button" value="INDIENEN" ></div>
		      		</div>
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<textarea class="form-control" rows="10" name="fa_overview"></textarea>
		      		</div>
		      	</div>
		      	</form>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img"> 3. Fotos familie</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<p>TO DO: Graag ontvangen wij foto’s van beide ouders en kinderen.<br>
						Indien de opdrachtbevestiging is getekend en de bovenstaande zaken bij HBN binnen zijn, zullen wij beginnen met de matching.</p>
						<b>Jullie kunnen maximaal 4 foto’s uploaden</b><br>

						<div><a class="btn next-button">INDIENEN</a></div>
		      		</div>
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<form action = "<?= base_url('index/save_profile/5') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>
        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/2') ?>" class="btn next-button" >NAAR STAP 2</a>
        </div>
    </div>
<!-- end tab1 -->
    <?php }elseif($tab == 2){?>
<!-- start tab2 -->
	<h1><i><b>2. Toetsing</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Als Host familie van de nieuwe au pair moet worden aangetoond dat de familie kan voldoen aan de wettelijke voorwaarden die gelden voor het au pair programma. Aangetoond moet worden dat het gastgezin boven de onderstaande norm, duurzaam en zelfstandig inkomen heeft. Alleen bij een compleet dossier kunnen wij het proces starten om de au pair naar Nederland te halen (ook als de au pair uit de EU komt). Naast de documentatie en bewijzen van jullie als Host Familie, zorgt HBN ook voor de benodigde documentatie en bewijzen van jullie toekomstige au pair. Wanneer het dossier compleet is, en er consensus is over het weekschema en het agreement door au pair en host familie is getekend, kan HBN indien van toepassing de aanvraagprocedure starten.<br><br>
			<b>TO DO: Algemeen benodigde documenten:</b>
			• Kopieën van jullie beide paspoorten: graag gescand per mail naar ons sturen. Let op: Als een van jullie een buitenlands paspoort heeft dan dient ook het verblijfsdocument overlegd te worden.<br>
			• 1 uittreksel BRP/bewijs van adres: Dit is nodig om aan te tonen dat het gezin met minimaal twee personen op het aangegeven adres woont dat HBN heeft bezocht. Het is op te vragen online of door het gemeentehuis te bezoeken.<br><br>
			Let op: Identificatie meenemen naar gemeente, uittreksel mag niet ouder zijn dan 6 maanden, minimaal 2 personen ingeschreven op het adres, de persoon die het inkomen overlegt moet ook op het uittreksel voorkomen.</div>
	    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Afhankelijk van de inkomenssituatie zal het gastgezin de volgende bewijsstukken moeten overleggen. De bewijsstukken dienen te overlegd worden van 1 van de Host Ouders als het inkomen boven de volgende norm uitkomt. Indien dit niet geval is, dienen jullie bewijsstukken van beide inkomens te overleggen:<br><br>
			<b>Norm inkomen</b>
			De minimumnorm wordt elk halfjaar aangepast en is nu;<br>
			Norm echtparen / samenwonend+ norm au pair inclusief vakantietoeslag BRUTO SV LOON: €2490,27<br>
			Norm echtparen / samenwonend+ 2 x norm au pair (bij overlap) inclusief vakantietoeslag BRUTO SV LOON: €3320,36<br><br>
			Norm alleenstaanden + norm au pair inclusief vakantietoeslag BRUTO SV LOON: €1992,22<br><br>
			In de <b>IND brochure</b> staan de regels voor het au pair programma.
				<div class="custom-standalone-panel">
					Keuze main income:
					<div class="form-control custom-select">
						<select name="">
						    <option data-toggle="collapse" data-parent="#accordion" href="#collapse1" >Loondienst</option>
						    <option data-toggle="collapse" data-parent="#accordion" href="#collapse2" >Zelfstandig ondernemer</option>
						    <option data-toggle="collapse" data-parent="#accordion" href="#collapse3" >DGA</option>				    
					  	</select>
					</div>
				</div>
			</div>	    	
	    </div><br><br>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Loondienst</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		     	<div class="panel-body">
		     		<p>Wanneer er minimaal sprake is van een jaarcontract<br><br>
					Werkgeversverklaring: Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
					Kopie het arbeidscontract (min 12 mnd.)<b> Let op: Ook met handtekening van werknemer </b>(mag per mail/gescand)<br><br>
					Kopieën van loonstroken van de laatste 3 maanden.<b> Let op: De laatste 3 loonstroken op het moment van de aanvraag,</b> zelfde persoon als het<br>
					contract/werkgeversverklaring (mag per mail/gescand)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Werkgeversverklaring:</b><br><br>
								Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
							</div>
							<form action = "<?= base_url('document/upload_document/1') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Kopie het arbeidscontract (min 12 mnd.):</b><br><br>								
								Let op: Ook met handtekening van werknemer (mag per mail/gescand)<br>
							</div>
							<form action = "<?= base_url('document/upload_document/2') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Kopieën van loonstroken van de laatste 3 maanden.</b><br><br>
								Let op: De laatste 3 loonstroken op het moment van de aanvraag, zelfde persoon als het contract/werkgeversverklaring (mag per mail/gescand)<br>
							</div>
							<form action = "<?= base_url('document/upload_document/3') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
					</div>
					<a href="#" class="btn next-button">INDIENEN</a>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Zelfstandig ondernemer</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<p>Wanneer er sprake is van een eenmanszaak die minimaal 1,5 jaar bestaat<br><br>
					<b>Bijlage verklaring omtrent inkomen zelfstandig ondernemer:</b> ingevuld door een onafhankelijk persoon, een erkende administrateur (bijvoorbeeld een registeraccountant, een accountant, administratieconsulent, een federatie belastingadviseur of een college Belastingadviseur) of een administrateur met een beconnummer van de Belastingdienst. Graag volledig ingevuld en ondertekend<br><br>
					Uittreksel KVK: Een recent uittreksel van de inschrijving bij de Kamer van Koophandel van de onderneming/het bedrijf. <b>(origineel of digitaal gewaarmerkt)</b> Let op: het bedrijf moet langer dan 1 1⁄2 jaar bestaan, het uittreksel mag niet ouder zijn dan 6 maanden, <b>de persoon</b> in kwestie moet als aandeelhouder staan aangegeven.<br><br>
					De Belasting aanslagen of aangifte van de afgelopen 3 jaar (inclusief lopende jaar)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Verklaring inkomen zelfstandig ondernemer</b><br><br>
								<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Zelfstandig ondernemer-1') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" target="_blank" class="btn next-button">DOWNLOAD</a><br>
							</div>
							<form action = "<?= base_url('document/upload_document/4') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Uittreksel KVK</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/5') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Belasting aanslagen of aangifte van de afgelopen 3 jaar</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/6') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
					</div>
					<a href="#" class="btn next-button">INDIENEN</a>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  DGA</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<p>Wanneer er sprake is van een BV dan heeft HBN de volgende bewijsstukken nodig<br><br>
					Uittreksel KVK bij 1 persoon en bij meerdere personen een oprichtingsakte <b>(origineel of digitaal gewaarmerkt)</b> Let op: het uittreksel mag niet ouder zijn dan 6 maanden, <b>de persoon in kwestie moet als aandeelhouder staan aangegeven.</b><br><br>
					<b>Werkgeversverklaring:</b> zelf invullen en ondertekenen; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag<br><br>
					Kopie van het arbeidscontract: Als DGA ben je verplicht dit te hebben. Indien dit niet gemaakt is kun je als je enige aandeelhouder bent dit alsnog opstellen.<br><br>
					Drie recente loonstroken (kunnen ook bankafschriften zijn)<br><br>
					Bewijs dat de loonbelasting door de vennoot is overgemaakt over de laatste 3 loonstroken (of in 1X per 3 maanden mag ook) Let op: dit is bijvoorbeeld aan te tonen door screenshots te maken van de bankafschriften waarop de overschrijving naar de belastingdienst staat.</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="above-drop-file">
								<b>Uittreksel KVK</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/7') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="above-drop-file">
								<b>Werkgeversverklaring</b><br><br>
								<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'DGA-2') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" target="_blank" class="btn next-button">DOWNLOAD</a><br>
							</div>
							<form action = "<?= base_url('document/upload_document/8') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<div class="above-drop-file">
								<b>Kopie van het arbeidscontract</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/9') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<div class="above-drop-file">
								<b>Drie recente loonstroken</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/10') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<div class="above-drop-file">
								<b>Bewijs dat de loonbelasting is betaald</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/11') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>					
					</div>
					<a href="#" class="btn next-button">INDIENEN</a>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a >
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Eigen vermogen </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div  class="">
		      <div class="panel-body">
		      	<p>Wanneer er voldoende eigen vermogen is; Het fictief vermogen van 4% gedeeld door 12 maanden moet boven de norm uitkomen. Hiervoor zijn de volgende bewijsstukken nodig.</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>De laatste voorlopige of definitieve aanslag van de Belastingdienst waaruit het inkomen uit Box 2 en 3 blijkt.</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/12') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>De laatste aangifte van het inkomen aan de Belastingdienst waaruit het inkomen uit Box 2 en 3 blijkt.</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/13') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Bescheiden waaruit de omvang en samenstelling van het eigen vermogen blijkt op het moment van indiening van de aanvraag (vermogens bankrekeningsaldo, aandelen portfolio, kadastraal uittreksel van woningen in bezit of anders)</b><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/14') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>
					</div>
					<a href="#" class="btn next-button">INDIENEN</a>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="#" class="btn next-button get-income" >NAAR STAP 3</a>
        </div>
    </div>
<!-- end tab2 -->
    <?php }elseif($tab == 3){?>
<!-- start tab3 -->
	<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>
	    	</div>	    			    	
	    </div><br>
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Skype gesprekken </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		     	<div class="panel-body">
		     		<p>Mocht er enthousiasme zijn over een of beide kandidaten dan sturen wij jullie profiel en timeschedule ook naar de potentiele kandidaten. Vervolgens plannen we een Skype call tussen jullie en de potentiele au pair(s) zodat jullie elkaar kunnen ontmoeten.<br><br>
					In het profiel van de au pair staat zijn/haar Skype naam. Zij/hij heeft jullie skype gegevens niet dus graag haar/hem uitnodigen zodat jullie request geaccepteerd kan worden.<br><br>
					Ons advies is in de eerste skypecall om dingen te vragen die jullie eigenlijk al weten van haar en niet te moeilijke vragen te stellen. De meeste kandidaten zijn best zenuwachtig en door gewoon te vragen over haar/zijn familie, de opleiding, interesses en ervaring met kinderen is ze/hij sneller op het gemak en krijgen jullie een beter beeld van hoe ze/hij is en of er een klik is tussen jullie. Hou rekening met het feit dat de connectie slecht kan zijn en dat er ook een taalbarrière is. Hierdoor kan iemand anders of minder uit de verf komen, dus oordeel ook niet te snel. Het is beter indien niet zeker een nieuwe skypedate te maken.<br>
					In het eventuele 2de Skypegesprek is het natuurlijk goed en leuk om te zien hoe zij/hij op de kinderen reageert en hoe de kinderen op haar/hem reageren (als ze niet te jong zijn, hier niet te veel van verwachten). Ook is het dan goed om de verwachtingen wederzijds te peilen door het weekschema en andere verwachtingen door te nemen aangezien hier goede consensus over moet bestaan.<br><br>
					Aangezien de au pair een jaar bij jullie zal verblijven en in huis woont is het belangrijk dat er een goede klik is en dat de verwachtingen grotendeels op een lijn liggen. HBN kan hier veel voorwerk in verrichten maar alleen jullie als familie kunnen hierover beslissen.<br>
					Het is wel goed te beseffen dat het uiteindelijke slagen van het au pair programma investering van beide partijen vergt.</p><br>
					<form action="<?= base_url('families/send_skype/') ?>" method="POST" >
					<input type="hidden" name="sk_fa_id" value="<?= $family['id'] ?>">
					<img src="<?= base_url('assets/img/skype.png') ?>" class='skype-img' />						
					<div class="row skype-panel">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Au-pair:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="form-control custom-select">
			    						<select name="sk_ap_id">
			    						<?php foreach ($aupairs as $key => $aupair) { ?>
			    							<option value = "<?= $aupair['id'] ?>" ><?= $aupair['full_name'] ?></option>
			    						<?php } ?>
									  	</select>
			    					</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Date 1:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="input-group date schedule-date">
					        	  	<input type="text" name="sk_start_date" class="form-control" autocomplete='off'>
					        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					        	  	</div>
					        	</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Time 1:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="input-group date schedule-time" >
				    				<input type="text" class="form-control"  name="sk_start_time" autocomplete='off'>
				    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				    				</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Date 2:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="input-group date schedule-date">
					        	  	<input type="text" name="sk_end_date" class="form-control" autocomplete='off'>
					        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					        	  	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Time 2:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="input-group date schedule-time" >
				    				<input type="text" class="form-control"  name="sk_start_time" autocomplete='off'>
				    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				    				</div>
								</div>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<label>Personal Message:</label>
							<textarea class="form-control" rows="10" name="sk_content"></textarea>
						</div>						
					</div>
					<input type="submit" class="btn next-button" value="VERSTUREN" >
					</form>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Match aanmaken </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<p>Gefeliciteerd!!! Er is een match tussen jullie als Host familie en jullie toekomstige au pair. Het is belangrijk de afspraken tussen jullie nu vast te leggen in een agreement dat door jullie beide wordt ondertekend.<br><br>
				In het agreement worden alle basale afspraken tussen het gezin en au pair op basis van de Nederlandse au pair wetgeving en de HBN voorwaarden ondertekend. In het agreement zijn ook de financiële afspraken opgenomen zoals het zakgeld en alle secundaire voorwaarden. Dit agreement is geen contract, het is belangrijk te beseffen dat er wettelijk geen afhankelijkheid mag zijn van de au pair, de au pair mag nimmer gezien worden als werknemer.<br><br>
				Een au pair mag wettelijk betalen voor vliegticket en visa kosten maar niet voor haar screening (daar betalen jullie al gastgezin voor). De bijdrage van de au pair voor het ticket/visum staat vast, de rest van de ticket kosten factureert HBN door aan het gezin.
				</p><br><br>
				<div class="row match-panel">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" >
						<h1>Match aanmaken</h1><br>
						<form action="<?= base_url('families/generate_document/1') ?>" method="POST" >
						<input type="hidden" name="fa_id" value="<?= $user_id ?>">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">Match aanmaken met:</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-control custom-select">
		    						<select name="ap_id">
									    <?php foreach ($aupairs as $key => $aupair) { ?>
			    							<option value = "<?= $aupair['id'] ?>" ><?= $aupair['full_name'] ?></option>
			    						<?php } ?>
								  	</select>
		    					</div>
							</div>
						</div><br><br>
						<p>Nadat jullie hieronder op ‘Match aanmaken’ hebben <br>gedrukt wordt de agreement automatisch gegenereerd.<br><br>
						Jullie ontvangen deze per e-mail. Hiernaast kunnen <br>jullie vervolgens de getekende agreement oploaden.</p><br>
						<input type="submit" class="btn next-button match-button" value="MATCH AANMAKEN" ><br><br>
						</form>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" >
						<div class="above-drop-file">
							<b>Upload hier de agreement, voorzien van jullie handtekening. Vervolgens zullen HBN en de au-pair de agreement goedkeuren.<br><br>
							Naast de agreement volgen in de stappen hieronder nog enkele documenten.</b><br>
						</div>
						<form action = "<?= base_url('document/upload_document/15') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message">
		      				<span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
					</div>
				</div><br>
				<a href="" class="btn next-button">VOLGENDE</a>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Awareness declaration & weekschema </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		      			<p>Het gastgezin en de au pair moeten een awareness declaration ondertekenen. Hiermee geven beiden aan de regels van het au pair programma te kennen.<br>
						Het eerder opgestelde weekschema zal door au pair en gastgezin goedgekeurd moeten worden.</p><br>
						<div class="above-drop-file">
							<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Awareness declaration') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>"  target="_blank" class="btn next-button">DOWNLOADEN</a><br><br>
							<b>Upload hieronder de awareness declaration, voorzien van jullie handtekening.</b><br>
						</div>
						<form action = "<?= base_url('document/upload_document/16') ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message">
		      				<span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		      			
					      <div class="alert alert-success">
					       <strong>Success!</strong> <span></span>
						  </div>
						  <div class="alert alert-danger">
					       <strong>Sorry!</strong> <span></span>
						  </div>
					      <div class="cd-schedule loading">
							<div class="timeline">
								<ul>
									<li><span>06:00</span></li>
									<li><span>06:30</span></li>
									<li><span>07:00</span></li>
									<li><span>07:30</span></li>
									<li><span>08:00</span></li>
									<li><span>08:30</span></li>
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
									<li><span>18:30</span></li>
									<li><span>19:00</span></li>
									<li><span>19:30</span></li>
									<li><span>20:00</span></li>
									<li><span>20:30</span></li>
									<li><span>21:00</span></li>
									<li><span>21:30</span></li>
									<li><span>22:00</span></li>
									<li><span>22:30</span></li>
									<li><span>23:00</span></li>
									<li><span>23:30</span></li>
									<li><span>24:00</span></li>
								</ul>
							</div> <!-- .timeline -->

							<div class="events">
								
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
					    	<div class="col-xs-9 col-sm-10 col-md-11 col-lg-11"></div>
					    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						    	<a href="#" class="add-btn" data-toggle="modal" data-target="#addModal">
						    		<img src="<?php echo base_url('assets/img/add-btn.png'); ?>">
						    	</a>
						    </div>
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
						        	  	<label>Select Dates:</label>
						        	  	<div class="form-control custom-select">
				    						<select name="sd_date">
											    <option>Mon</option>
											    <option>Tue</option>
											    <option>Wed</option>
											    <option>Thu</option>
											    <option>Fri</option>
											    <option>Sat</option>
											    <option>Sun</option>
										  	</select>
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
						        	  	<label>Select Dates:</label>
						        	  	<div class="form-control custom-select">
				    						<select name="sd_date">
											    <option>Mon</option>
											    <option>Tue</option>
											    <option>Wed</option>
											    <option>Thu</option>
											    <option>Fri</option>
											    <option>Sat</option>
											    <option>Sun</option>
										  	</select>
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
		      	<a href="#" class="btn next-button">INDIENEN</a>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/4') ?>" class="btn next-button" >NAAR STAP 4</a>
        </div>
    </div>
<!-- end tab3 -->
    <?php }elseif ($tab == 4) { ?>
<!-- start tab4 -->
    	<h1><i><b>4. Visa</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p >Als jullie dossier en dat van de au pair compleet is en wij een ondertekend agreement hebben ontvangen (wij zorgen vaak dat al voor de match wordt begonnen met de verzameling van documenten) dan zullen wij de verklaring naar de IND sturen. De behandeling en terugkoppeling aan HBN en de betreffende ambassade duurt maximaal 2 1/2 week. Als wij de bevestiging van de IND ontvangen dan informeren wij jullie en jullie au pair direct dat hij/zij naar de ambassade kan om het visa te laten maken.<br><br>
				<b>Au Pair uit USA/Australië/Canada:</b>
				Als jullie toekomstige au pair uit de bovenstaande landen komt dan heeft hij/zij geen visum nodig om Nederland in te komen. Er is dus geen ambassade bezoek nodig. Bij de terugkoppeling van de IND, kan de au pair direct Nederland inreizen.<br><br>
				Na bevestiging van de IND, zal jullie au pair met zijn/haar paspoort naar de dichtstbijzijnde ambassade reizen om daar het paspoort af te geven. Het maken van het visum duurt ongeveer 2 weken. In sommige gevallen zal de au pair naar een ambassade moeten vliegen. Het paspoort moet nadat het VISUM klaar is weer opgestuurd worden naar de au pair, dit zal hoogstwaarschijnlijk langer duren dan 2 weken. Indien de au pair naar een consulaat gaat dan moeten we een extra tijdsmarge van 2 weken erbij optellen. Wij zijn afhankelijk van deze overheid instanties en vertraging is dan ook altijd buiten onze macht.<br><br>
				Als jullie au pair haar/zijn paspoort met visum heeft opgehaald dan kan hij/zij naar Nederland komen.</p>
	    	</div>
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Status visa-aanvraag  </a>
				        <span class="collapse-right"><img src="<?php echo base_url('assets/img/users-white.png');?>" > HBN</span>
				      </h4>
				    </div>
				    <div>
				     	<div class="panel-body">
				     		<div class="visa-panel">
				     			<h3>Aanvraag verzonden</h3>
				     			<img src="<?= base_url('assets/img/visa-check-approved.png') ?>" class='visa-status' />
				     			<p>Datum: 27-01-2017</p>
				     		</div>

				     		<div class="visa-panel">
				     			<h3>Afspraak bij ambassade</h3>
				     			<img src="<?= base_url('assets/img/visa-check-review.png') ?>" class='visa-status' />
				     			<p>Datum: -</p>
				     		</div>

				     		<div class="visa-panel">
				     			<h3>Visum opgehaald</h3>
				     			<img src="<?= base_url('assets/img/visa-check-review.png') ?>" class='visa-status' />
				     			<p>Datum: -</p>
				     		</div>
				    	</div>
				  	</div>
				  </div>
	    	</div>
	    </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/5') ?>" class="btn next-button" >NAAR STAP 5</a>
        </div>
    </div>
<!-- end tab4 -->
    <?php }elseif ($tab == 5) { ?>
<!-- start 5 -->
	<h1><i><b>5. Voorbereiding</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    	<p>Wanneer de Visa/verblijfsvergunning procedure loopt (indien van toepassing) of in ieder geval voordat de au pair naar Nederland komt, zijn er enkele belangrijke zaken waarover HBN jullie als Host Familie wil informeren. Zaken die voorbereid en geregeld moeten worden voor haar komst.</p>	    
	    	</div>	
	    </div><br><br>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Ticket & info  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Wij werken samen met Otravo (voormalig cheaptickets en WTC). Zij hebben veel expertise in jaarretourtickets voor visumplichtige reizigers en kan zorgen voor hele lage omboekingstarieven. Zeker met de niet 100% zekerheid dat een au pair op de aangegeven datum kan vertrekken en het altijd moeten omboeken van een jaarretour terug ticket, is het des te belangrijker om lage omboekingstarieven te hebben. Daarbij is het natuurlijk fijn dat goed wordt uitgezocht wat het laagste tarief is en welke vluchten visum-technisch mogelijk zijn.<br><br>
								<b>TO DO:</b> Wij ontvangen graag terugkoppeling over het ticket zodat dit op tijd geregeld kan worden
								Otravo regelt de reservering, de boeking en omboeking voor 37,50 naast de normale luchthaven belasting, handling fee van 13,- euro en vliegmaatschappij verzekering van 6,- euro (i.v.m faillissement vliegmaatschappij) die standaard zijn. Zij verlenen 24 uur p.d/7 dagen per week service. HBN boekt het ticket en zal het overgebleven bedrag, na de vaste bijdrage van de au pair, doorfactureren aan het gastgezin.<br><br>
								<b>Hoe?</b><br>
								HBN zal contact op nemen met het gezin om de aankomstdata te bespreken. Vervolgens geven wij alle benodigde informatie door aan Otravo. Zij zullen dan direct per mail of telefonisch contact opnemen om de opties door te nemen. Bij Otravo kun je direct via een Ideal link of met creditcard betalen en op dat moment zal ook direct het ticket geprint kunnen worden.<br><br>
								<b>Contactpersonen en gegevens Otravo:</b><br>
								Afdeling Zakenreizen Otravo<br>
								Haarlemmerstraatweg 41 - Suikersilo West 12e verdieping 1165 MP Amsterdam-Halfweg<br>
								+31 (0) 23 751 14 45<br>
								zakenreizen@otravo.nl<br><br>
								<b>Zelf doen:</b><br>
								Dit heeft niet onze voorkeur maar willen jullie nog steeds de mogelijkheid bieden het ticket zelf online/telefonisch te boeken. Wij raden aan dit telefonisch te doen via bijvoorbeeld: vliegtickets.nl, cheaptickets.nl of ATP , online is vaak niet te zien wat de voorwaarden zijn. Een jaarretour ticket is vaak het voordeligst en bij de meeste (bijna alle) airlines is een jaarticket niet 12 maanden maar 10 maanden en moet de vlucht daarna worden omgeboekt voor (100/150,-). Maar LET OP: tarief wijzigingen zijn onvoorspelbaar en komen bij de omboekingskosten. Ook is een jaarticket maar echt 1 jaar geldig, dus geen dag later. Meestal is dan de heenreis ook flexibel (100/150 euro omboekings-kosten) maar let daar goed op. Vliegen via andere steden is mogelijk, behalve Londen UK, daar heeft ze een apart transfer visum voor nodig en dit is zeker niet aan te raden.<br><br>
								- Graag alleen tickets naar Schiphol boeken<br>
								- Graag HBN direct op de hoogte stellen van data en ticketgegevens naar ons mailen<br><br>
								Huisje Boompje Nanny kan niet aansprakelijk gesteld worden voor het boeken van tickets, de stijging van tarieven of het moeten cancelen van het ticket. Wij hebben hierin zuiver een facilitaire functie.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ticketinfo main-color-div">
		     				<h1>Ticketinfo</h1>
		     				<p>
								Vul hieronder de gewenste aankomstdatum in en of jullie zelf het ticket boeken of dit aan HBN overlaten.<br>
								Wanneer het ticket geboekt is door HBN kunnen jullie het hieronder downloaden.<br>
								Als jullie ervoor kiezen om zelf te boeken vragen we om het tiket hieronder te uploaden.<br>
								Gewenste aankomstdatum:
							</p><br>
							<div class="input-group date schedule-date">
		    				<input type="text" class="form-control" name="ticketinfo_date">
		    				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    				</div><br>
		    				Wie boekt het ticket?<br>
		    				<a href="#01" class="btn next-button">HBN</a>
		    				<a href="#01" class="btn next-button family-button">FAMILIE</a>
		    				<br><br>
		    				<a href="#02" class="btn next-button ticketinfo-button">VESTIGEN</a>
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VOLGENDE</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Verzekeringsaanvraag  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					<b>Au Pair verzekering:</b>
								Aangezien de Host Familie de zorgplicht over de au pair heeft is het belangrijk een goede Au Pair verzekering af te sluiten. Wij werken samen met de expertise partner JOHO (ISIS AuPair verzekering) . Met deze verzekering worden alle urgente medische kosten gedekt, WA aansprakelijkheid, voor goederen, repatriëring en ziekte/ongeval tijdens reizen in Europa (PLUS verzekering).<br><br>
								Wij adviseren jullie om de Au Pair Plus verzekering af te sluiten, zodat jullie au pair geen eigen risico heeft. Indien jullie dit niet doen, zijn jullie wel verplicht dit eigen risico voor haar te dragen. HBN werkt samen met JOHO en zal deze Au Pairverzekering voor jullie afsluiten als jullie het formulier hieronder invullen, ondertekenen en terugsturen<br><br>
								TO DO: Bij bevestiging van de af te sluiten verzekering graag dit formulier ingevuld en ondertekend naar HBN mailen dan zal HBN deze direct voor jullie au pair af sluiten. (Vul de in rood gedrukte informatie in en stuur het formulier naar ons terug).<br><br>
								Hier de polisvoorwaarden en premiebedragen van de JoHo au pair verzekeringen.<br><br>
								N.b. De au pair verzekering moet voor de gehele periode in een keer betaald worden. De minimale afsluitingstermijn is 1 maand. De Europa verzekering kan alleen afgesloten worden voor meisjes die uit Europa komen.<br><br>
								Voor vragen kunnen jullie direct contact opnemen met JOHO,<br><br>
								Mail of bel op: 088-3214563<br><br>
								<b>Basis Zorgverzekering</b><br>
								Wanneer jullie au pair in Nederland is ingeschreven bij de gemeente, dan is zij/hij ook wettelijk verplicht een basis zorgverzekering af te sluiten. Deze verzekering kan HBN helaas niet voor jullie afsluiten. De exacte informatie hierover vind je in het uitleg document van JOHO. In stap 6 wordt aangegeven hoe deze verzekering af te sluiten is en hoe je zorgtoeslag aan kunt vragen.<br><br>
								<b>Auto verzekering?</b><br>
								De Au Pair verzekering is geen auto verzekering. Als het gezin de au pair wil laten autorijden zijn zij verantwoordelijk om haar/hem hiervoor te verzekeren. De au pair mag vanaf het moment van inschrijving bij de gemeente maar een half jaar (185 dagen) met een buitenlands (buiten de EU) rijbewijs rijden.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Au-Pair verzekering</h1>
		     				<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Family insurance') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD INFO</a><br><br>
		     				<div class="above-drop-file">
								<b>Upload hieronder het aanvraagformulier voor de au-pair verzkeering voorzien van een handtekening.</b>
							</div>
							<form action = "<?= base_url('document/upload_document/17') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Host familie briefing  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Jullie au pair ontvangt voor haar/zijn komst een manual met alle tips en adviezen maar wij vinden het ook belangrijk om jullie als gastgezin te adviseren. Het is niet niks om in eens een vreemd(e) meisje/jongen in je huis te ontvangen. Dat is wennen voor haar/hem en voor jullie. Het au pair programma is een uitwisselingsprogramma en het vergt dus investering, tijd en energie van beiden. Het is goed om te blijven beseffen ook bij de tweede au pair dat het geen gekwalificeerde nanny's zijn. Zij/hij komt ook (om van jullie) te leren en levenservaring op te doen.<br><br>
								<b>TO DO:</b> HBN adviseert jullie als Host Ouders (beide) de Host Familie briefing goed door te nemen. Het zal jullie helpen in de omgang met haar gedurende de eerste maanden en het gehele au pair jaar.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Familie briefing</h1>
		     				<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Initial Registeration') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD INFO</a><br><br>
		     						     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">INDIENEN</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Family routine setup  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Het Family Routine document is een set up die jullie naar eigen routine/huisregels /kindregels kunnen invullen/aanvullen. Het is een leidraad voor jullie toekomstige au pair om zich jullie wekelijkse/dagelijkse routine, eigen te kunnen maken en zich te kunnen aanpassen aan jullie gewoontes en levensstijl. Onze ervaring is dat het op schrift hebben van deze specifieke dag/week routine haar/hem enorm zal helpen om alles snel op te pakken. Dit document bevat de Set Up van:<br><br>
								-Wekelijkse uitgebreide routine,
								- Huis Regels
								- Regels ten aanzien van de kinderen
								- Dagelijkse (verzorging)schema per kind en tips per kind.<br><br>
								<b>TO DO:</b> HBN adviseert jullie om deze familie routine naar jullie situatie aan te passen. Deze vervolgens mailen naar jullie au pair en HBN voordat zij naar Nederland reist. Jullie kunnen deze dan samen doornemen in de dagen na aankomst.<br><br>
								Download het voorbeeld en pas het aan naar jullie situatie. Onderteken het formulier vervolgens en upload het hiernaast. HBN zal het document controleren en naar de au-pair sturen.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Family routine setup</h1>
		     				
		     				<div class="above-drop-file">
								<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Family routine setup') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD DOC</a><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/18') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Important info document  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Au pairs zijn geen gekwalificeerde nanny's en dit is iets dat elke ouder goed moet beseffen als de au pair komt. Veiligheid voor je kinderen is natuurlijk voor iedereen van hoogst belang. Daarom vinden wij het ook belangrijk de au pairs zoveel mogelijk veiligheidsregels bij te brengen als zij/hij aankomt en in de eerste maanden van het verblijf. In de au pair manual noemen informeren we jullie au piar over de grootste gevaren en geven we haar de belangrijkste veiligheidsinstructies. Schroom niet om deze belangrijkste punten nog meerdere keren te herhalen en haar/hem voor te doen hoe te handelen in bepaalde situaties. Het is goed om te hameren op hoe belangrijk het is om op de veiligheid van de kinderen te letten.<br><br>
								Het important info document is een A4 met de Belangrijkste (Emergency) info voor de au pair. Deze dient aangevuld te worden door jullie met de specifieke informatie die voor jullie geldt. Het is handig en vooral ook veilig als zij/hij deze tijdens haar verblijf altijd bij de hand heeft. Graag 2X printen: 1 voor op de ijskast beneden en 1 voor op de kamer. In de eerste maanden zullen wij ook een uitgebreide First Aid Course organiseren, zodat zij volledig op de hoogte is wat te doen om levensbedreigende situaties te voorkomen en wat ze moet doen als zo'n situatie zich voordoet. Host- Ouders zijn overigens ook van harte welkom. De cursus wordt in samenwerking met het Rode Kruis aangeboden.<br><br>
								Download het voorbeeld en pas het aan naar jullie situatie. Upload het verolgens hiernaast. HBN zal het document controleren en naar de au-pair sturen.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Important info doc</h1>
		     				
		     				<div class="above-drop-file">
								<a href="<?php 
								foreach ($documents as $key => $document) {
									if ($document['title'] == 'Important info') {
										echo base_url('files/'.$document['name']);
									}
								}
								?>" class="btn next-button">DOWNLOAD DOC</a><br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/19') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Advies cursussen  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      		<p>
		      			In het teken van de uitwisseling bieden jullie als gastgezin de au pair een cursus aan tot een maximum bedrag van 300,-. Gebruikelijk is een Nederlandse cursus. Onder het kopje cursus op onze website kunnen jullie een lijst vinden met alle aanbevolen cursussen Nederlandse en Engelse taal. Het is naast leren van de taal ook leuk voor de au pairs om andere au pairs te leren kennen en ze leren ook over de Nederlandse cultuur en over de verschillende culturen van elkaar. Sommigen willen liever een andere cursus doen zoals Engels of zelfs fotografie.<br><br>
						Beter Engels leren kan ook een doel zijn voor de au pairs en daar hebben ze vaak iets meer aan dan Nederlands leren. Dit is natuurlijk in overleg met jullie, als Host- Family biedt je dit aan, maar het is belangrijk dat de au pair het wel graag wil doen, anders is het zonde van het geld. Wel geven wij bij de au pairs aan dat het ook handig is om Nederlands te leren aangezien veel kinderen geen Engels spreken, maar dat kan ook "learning by doing" zijn. De cursus hoeft niet per se voor de komst geregeld te worden, behalve als jullie panel-groupaag willen dat zij/hij snel wat Nederlands leert dan is het handig haar/hem daar (in overleg met haar) al spoedig voor op te geven.
		      		</p>
		      		</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<a href="#" class="btn next-button">VOLGENDE</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
		        <img src="<?php echo base_url('assets/img/close-icon.png'); ?>" class="collapse-img">  Secundaire voorwaarden: Laptop, Telefoon, Fiets, OV kaart, Museum Kaart </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse7" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<p>
		      				De meeste au pairs zijn gewend altijd te kunnen communiceren met het thuisfront, via telefoon of computer. Overleg van te voren of hij/zij deze zaken heeft. Wellicht heeft ze/hij zelf een telefoon die ze meeneemt en eventueel een laptop. Als ze/hij geen laptop meeneemt is het wel zaak om die voor haar/hem te hebben, aangezien het contact met het thuisfront o.a natuurlijk super belangrijk is voor hen. Als zij/hij haar mobiel van thuis meeneemt dan moet het zonder simlock zijn of ze/hij moet weten hoe je die eraf haalt. Dan kun je een sim-only abonnement afsluiten. Andere mogelijkheid is een prepaid telefoon. Het is wel handig als zij/hij whatsApp kan gebruiken, want dat communiceert makkelijker en kost niets voor de au pair en niet voor jullie. Het is fijn als het geregeld is of direct geregeld wordt waneer hij/zij aankomt. Maak of samen met het zakgeld, maandelijks periodiek 10 euro over voor telefoonkosten of je kunt een telefoon abonnement voor hem/haar aanschaffen.<br><br>
							Ook een fiets is essentieel als zij/hij deze direct tot de beschikking heeft, de meeste au pairs moeten echt oefenen ;-) vooral ook in het verkeer. In de manual staan de belangrijkste fiets regels, maar het is belangrijk dat jullie eerst samen oefenen. Als zij/hij al gewend is om te fietsen dan is ze/hij nog niet gewend om te fietsen in het verkeer of met kinderen. Zorg ook voor een goed slot en dat je (dit doen wij ook) vertelt dat het heel belangrijk is om de fiets op slot te doen.<br><br>
							Ook is het handig voor haar/hem een OV-chipkaart te regelen, maar dit kan ook later in overleg (er zijn kortingskaartmogelijkheden; weekend en dalurenkaart 40% korting).<br><br>
							Een museum kaart is ook een leuk idee om te geven als extra. Het is dan wel handig om te bekijken of überhaupt haar interesse hier ligt.
		      			</p>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/6') ?>" class="btn next-button" >NAAR STAP 6</a>
        </div>
    </div>
<!-- end tab 5 -->
    <?php }elseif ($tab == 6) { ?>
<!-- start 6 -->
<h1><i><b>6. Aankomst au-pair</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<p>Jullie halen haar/hem zelf op van het vliegveld en zullen haar/hem na de pair ervaring ook weer naar het vliegveld brengen.<br><br>
				<b>Als tip voor de aankomst:</b><br>
				Het is goed om te beseffen dat het best heftig is voor de au pair om ineens in een vreemd huis, bij een vreemd gezin, in een vreemd land te komen en dan kunnen de kleine dingen net hét verschil maken. De kamer een beetje opleuken met een aantal fotolijstjes (of zoiets dergelijks), een vaas met tulpen, een leuk kaarsje (waxinelichtjes) een schone handdoek en een gezellig douchegelletje kan er al voor zorgen dat ze/hij zich meteen al thuis en welkom voelt.<br><br>
				<b>Au-pair Manual:</b><br>
				Voordat jullie au pair naar Nederland afreist sturen wij haar/hem de HBN au pair manual. Deze manual bevat naast alle belangrijke wettelijke verplichtingen en taken bij aankomst, tijdens haar/zijn verblijf en voor vertrek ook allerlei belangrijke adviezen en tips die zij/hij kan gebruiken tijdens het au pair jaar.<br><br>
				<b>Welkomst training au-pair:</b><br>
				Gedurende de eerste weken na de aankomst van de au pair zal HBN een welkomst training organiseren voor de au pairs die in die maand zijn aangekomen. De au pairs zijn verplicht deze training bij te wonen. Deze training zal op een avond in de week plaats vinden op het HBN kantoor . Wij vinden het belangrijk de au pair meer inzicht te geven in alle aspecten die bij het au pairschap komen kijken en de cultuur verschillen en gewoontes te bespreken, daarbij focussen we ons in de training ook op de technieken voor communicatie en feedback, aangezien dit zo'n belangrijk onderdeel is voor het slagen van het au pair jaar. De training biedt je au pair ook direct de mogelijkheid andere starters te ontmoeten en dit te kunnen delen met elkaar.<br><br>
				Welkomst pakket HBN: om jullie au pair vanuit HBN welkom te heten, hebben wij een leuk en handig welkomstpakket samengesteld dat hij/zij per post ontvangt direct na aankomst<br><br>
				- Een HBN kalender; hierop kunnen jullie samen overleggen en bijhouden welke dagen er opgepast moet worden bijvoorbeeld. - Een homemade HBN sleutelhanger
				- HBN news
				- Wat lekkers en typisch Nederlands
				- Folders en flyers over leuke bezienswaardigheden in Nederland<br><br>
				Betaling zakgeld/ Bankrekening nummer:
				Als jullie je au pair hebben ingeschreven bij de gemeente ontvangt zij/hij een BSN (Burger service Nummer). Hiermee kunnen jullie voor haar/hem een bankrekening openen. Wij adviseren een rekening met limiet 0 (geen krediet) te nemen. Zo kunnen jullie het zakgeld met een periodieke overboeking betalen. Handig voor beide partijen, overzichtelijk en je hoeft niet de hele tijd te denken aan de betaling en zij/hij hoeft het niet te vragen. Zo heeft de au pair ook niet teveel cash elke keer. Aan het einde van de periode neemt zij/hij haar/zijn geld op.<br><br>
				Basis Zorgverzekering aanvraag:
				Deze verzekering kunnen jullie, o.a. via de link in de JOHO uitleg, met haar/zijn burger service nummer aanvragen. De zorgtoeslag kan bij de belastingdienst worden aangevraagd wanneer zij/hij haar/zijn eigen persoonlijke bankrekening heeft.
				</p>
	    	</div>	    			    	
	    </div><br><br>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Verblijfspas </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Aangezien de au pair onder de Immigratie status verblijft met een officiële au pair verblijfsvergunning, zijn er een aantal belangrijke acties die zij/hij/jullie bij aankomst, tijdens het verblijf en voor vertrek moeten ondernemen.<br><br>
								<b>Verblijfsspas ophalen bij IND loket:</b><br><br>
								Dit moet zodra wij de bevestigingsbrief voor het ophalen van de pas naar jullie gestuurd hebben. De au pair mag namelijk pas au pair werkzaamheden verrichten wanneer de pas aan haar/hem is uitgereikt.<br><br>
								De au pair kan dit alleen doen, zonder de host familie. Zij/hij hoeft geen afspraak te maken en op de brief staat de locatie en de tijden waar binnen zij/hij haar/zijn pas kan ophalen op vertoon van de brief en het paspoort.<br><br>
								<b>TO DO: De au pair of gastgezin dient direct hiernaast aan te geven dat de verblijfspas is opgehaald</b>
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Verblijfspas</h1>
		     				<p>
		     					Hieronder bevestigen jullie dat de verblijfspas is opgehaald bij de IND.
		     				</p><br><br>
		     				<a href="#" class="btn next-button IND-button">BEVESTIGEN</a>		     				
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VOLGENDE</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Inschrijving gemeente</a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					<b>Inschrijving/Bijschrijving gemeente:</b><br><br>
								Zodra de au pair in Nederland is aangekomen moet hij/zij zich inschrijven op het adres van het gastgezin. Er moet dan wederom een uittreksel BRP worden opgevraagd waaruit blijkt dat de au pair op hetzelfde adres als het gastgezin staat ingeschreven en wat de samenstelling van het gastgezin is.<br><br>
								Dit dient ook meteen te gebeuren. Au pair moet hiervoor zijn/haar gelegaliseerde geboortecertificaat (met eventuele vertaling) en paspoort meenemen en kan dit niet zonder een van de host ouders doen (als gastgezin moet je je ook kunnen identificeren). Mocht zij/hij het geboortecertificaat nog niet binnen hebben dan kan zij/hij altijd op voorlopige basis worden ingeschreven. Het is aan te raden te bellen voor een afspraak, want bij veel gemeentes kun je nu niet meer zomaar inlopen voor deze inschrijving.<br><br>
								Het is handig om ook alvast een uitschrijfformulier mee te nemen, zodat jullie dit al klaar hebben liggen voor wanneer de au pair weggaat.<br><br>
								Bij de inschrijving ontvangt zij/hij haar/zijn BS nummer. Hier kunnen jullie een bankrekening mee openen, de basis zorgverzekering aanvragen en zorgtoeslag op aan vragen.<br><br>
								<b>TO DO:</b> De au pair of gastgezin stuurt een kopie van het nieuwe uittreksel BRP naar support@hbnaupairservices.com en geeft zo ook het Burger Service Nummer door.
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Upload uittreksel</h1>
		     				<p>BSN nummer</p>
		     				<input type="text" class="form-control" name=""><br>
		     				<div class="above-drop-file">
								Upload hieronder het uittreksel BRP dat jullie van de gemeente hebben gekregen.<br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/20') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a> <!-- submit BSN number -->
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Tubercolose test  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	     				<p>
	     					In de eerste 2 maanden moet de au pair (indien van toepassing) een TBC test laten doen (ook als zij/hij deze al in land van herkomst heeft gedaan). Dit kan bij de plaatselijke GGD of het ziekenhuis met het IND verwijzingsformulier dat HBN direct na aankomst aanlevert. Bij sommige gemeenten zal de GGD de IND informeren dat de test daadwerkelijk is gedaan en in sommige gevallen (Den Haag en Utrecht) moet het formulier zelf opgestuurd worden. Jullie au pair moet HBN direct informeren als zij/hij de test heeft gedaan en op weke datum. Wij vragen jullie als gastgezin hier op toe te zien.<br><br>
							TO DO: De au pair informeert HBN direct nadat de TB test is gedaan via de button hiernaast.<br><br>
							Het te laat of niet ondernemen van de bovenstaande acties heeft ernstige gevolgen. Zo kan dit ondermeer leiden tot het intrekken van de verblijfsvergunning. Daarbij kan HBN beboet worden voor het niet houden aan de zorgplicht of informatieplicht richting de IND. Als au pair/gastgezin de instructies betreft de zorg en informatieplicht niet navolgt zal HBN genoodzaakt zijn deze boete op het gastgezin te verhalen. Deze boetes zijn minimaal 1500,- en kunnen exponentieel hoger oplopen. Verwezen wordt naar HBN Algemene Voorwaarden.<br><br>
							Daarnaast kan sprake zijn van overtreding van de Wet arbeid Vreemdelingen en de Wet minimumloon en minimumvakantiebijslag.
	     				</p>
	     			</div>
	     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
	     				<h1>Tubercolose test</h1>
	     				<p>Hieronder bevestigen jullie dat de au-pair een tubercolose test heeft gedaan.</p>
	     				
	     				<a href="#" class="btn next-button tubercolose-button">BEVESTIGEN</a>	     				
	     			</div>
	     		</div>
	     		<div class="row">
	     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	     				<a href="#" class="btn next-button">VOLGENDE</a>
	     			</div>		     			
	     		</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/7') ?>" class="btn next-button" >NAAR STAP 7</a>
        </div>
    </div>
<!-- end tab 6 -->
    <?php }elseif ($tab == 7) { ?>
<!-- start 7 -->
    	<h1><i><b>7. Verblijf</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<p >
		    		HBN zal tijdens het verblijf van de au pair tenminste 2 evaluatiemomenten hebben met jullie en met jullie au pair. Deze evaluaties zijn allereerst gericht op de kennisneming van hoe jullie vinden dat het gaat en hoe zij dit ervaart. Ten tweede om jullie te attenderen op jullie informatieplicht aan HBN als er wijzigingen zijn opgetreden of zullen optreden. Ten derde om bij jullie en au pair te checken of de regels van het au pair programma goed worden nageleefd.<br><br>
					In het kader van de informatieplicht richting de IND (VV artikel 4.19) hebben wij de plicht om te controleren of de regels van het au pair programma worden nageleefd en of er gedurende het verblijf van jullie au pair wijzigingen zijn opgetreden. Zie hieronder de punten van controle.<br><br>
					a.de tussen het gastgezin en de au pair overeengekomen dagindeling niet wordt nageleefd of is gewijzigd;
					b.de vreemdeling arbeid in strijd met de Wet arbeid vreemdelingen verricht; c.de vreemdeling bij een ander gastgezin gaat verblijven;
					d.de vreemdeling, niet zijnde een au pair, werkzaamheden verricht welke niet vallen binnen de kaders van het door de Minister goedgekeurde uitwisselingsprogramma; e.de samenstelling van het gastgezin wijzigt;
					f.het gastgezin waarin de au pair verblijft niet langer zelfstandig en duurzaam beschikt over voldoende middelen van bestaan;
					g.de vreemdeling, niet zijnde een au pair, niet langer in zijn levensonderhoud kan voorzien;
					h.de vreemdeling niet langer in het gastgezin verblijft;
					i.de vreemdeling niet langer deelneemt aan het uitwisselingsprogramma;
					j.hij weet of redelijkerwijs vermoedt dat er sprake is van onregelmatigheden, misstanden of misbruik.
				</p>
	    	</div>
	    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    		<div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Evaluatiemomenten   </a>
				        <span class="collapse-right"><img src="<?php echo base_url('assets/img/users-white.png');?>" > HBN</span>
				      </h4>
				    </div>
				    <div>
				     	<div class="panel-body">
				     		<div class="visa-panel">
				     			<h3><i>Evaluatie 1</i></h3>
				     			<img src="<?= base_url('assets/img/visa-check-approved.png') ?>" class='visa-status' />
				     			<p>Datum: 27-01-2017</p>
				     		</div>

				     		<div class="visa-panel">
				     			<h3><i>Evaluatie 2</i></h3>
				     			<img src="<?= base_url('assets/img/visa-check-review.png') ?>" class='visa-status' />
				     			<p>Datum: -</p>
				     		</div>
				    	</div>
				  	</div>
				  </div>
	    	</div>
	    </div>

        <div class="row">
        	<a href="<?= base_url('index/roadmap_profile/8') ?>" class="btn next-button" >NAAR VERTREK</a>        	
        </div>
    </div>
<!-- end tab 7 -->
    <?php }elseif ($tab == 8) { ?>
<!-- start 8 -->
<h1><i><b>8. Vertrek</b></i></h1>
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    	<p>
		    	Jullie zijn als Host-Familie verantwoordelijk voor jullie au pair tijdens haar verblijf, maar ook voor een tijdig vertrek. Daarbij zijn jullie verplicht HBN direct te informeren zodra duidelijk is wat de exacte vertrekdatum van de au pair is. HBN zal jullie en de au pair tussen de 1-3 maanden voor vertrek hierop attenderen.<br><br>
				Jullie au pair hoeft niet haar verblijfsvergunning in te leveren bij de IND. Zodra zij zich uitschrijft bij de gemeente en HBN de melding heeft gedaan dat de au pair is vertrokken wordt de verblijfsvergunning ingetrokken. Naast het feit dat de verblijfsvergunning gewoon verloopt na de 365 dagen.<br><br>
				Maximaal 5 dagen voor vertrek of 5 dagen na vertrek (bij voorkeur voordat de au pair vertrekt) moet zij zich uitschrijven bij de gemeente. Dit kan door middel van een uitschrijfformulier dat wordt verstrekt door elke gemeente. Invullen en tekenen door de au pair met een kopie van haar paspoort. De au pair kan dit zelf doen, maar wij verzoeken jullie hierop toe te zien.<br><br>
				<b>Let op: Zorg ervoor dat de au pair zich niet EERDER uitschrijft, een uitschrijving betekent dat de au pair vergunning wordt ingetrokken.<br><br>
				Het te laat of niet ondernemen van de bovenstaande acties heeft ernstige gevolgen. Het kan namelijk lijden tot het intrekken van de verblijfsvergunning. Daarbij kan HBN beboet worden voor het niet houden aan de zorgplicht of informatieplicht richting de IND. Als au pair/gastgezin de instructies betreft de zorg en informatieplicht niet navolgt zal HBN genoodzaakt zijn de boete op het gastgezin te verhalen. Deze boetes zijn minimaal 1500,- en kunnen exponentieel hoger oplopen. Verwezen wordt naar HBN Algemene Voorwaarden.</b>
			</p>
	    	</div>	    			    	
	    </div><br><br>	    
        <div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Terugvlucht au-pair  </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		     	<div class="panel-body">
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Zodra jullie weten wanneer jullie au pair exact zal vertrekken, dan dienen jullie direct het geboekte of omgeboekte terugticket hiernaast te uploaden. HBN heeft de exacte vertrekdatum en dit bewijs nodig om de iND direct hierover te informeren. Indien jullie au pair andere plannen heeft na haar au pairjaar of eerder dreigt te stoppen met het au pair programma, dan dient dit ook direct gemeld te worden aan HBN. Na de melding dient het bewijs hiervan verzameld te worden (bijv.aanvraagdocument van nieuwe verblijfsvergunning)<br><br>
								<b>Let op: De au pair verblijfsvergunning is exact geldig voor 1 jaar. (365 dagen). Zodra de au pair ook maar 1 dag langer blijft is zij onrechtmatig in Nederland. Indien de au pair Schengen verlaat en terug komt als toerist is zij niet geoorloofd au pair of andere werkzaamheden te verrichten in Nederland. (Website IND - Nederland uit)</b>
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Upload ticket</h1>
		     				<p>Datum van terugkeer:</p><br>
		     				<div class="input-group date schedule-date">
			        	  	<input type="text" name="sk_start_date" class="form-control" autocomplete='off'>
			        	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			        	  	</div><br>
		     				<div class="above-drop-file">
								Upload het terugticket<br><br>
							</div>
							<form action = "<?= base_url('document/upload_document/21') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a>
		     			</div>		     			
		     		</div>
		    	</div>
		  	</div>
		  </div>

		   <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Terugvlucht au-pair </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		     				<p>
		     					Nadat de au pair is vertrokken naar land van herkomst of naar een land buiten het Schengen gebied dient de au pair een bewijs van terugkeer aan HBN te sturen. Dit kan een scan van een boarding pass of een scan van een vertrek stempel in haar paspoort zijn.<br><br>
								<b>De au pair moet dit zelf doen, maar wij verzoeken jullie hierop toe te zien.</b>
		     				</p>
		     			</div>
		     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-color-div">
		     				<h1>Upload bewijs</h1>
		     				
		     				<div class="above-drop-file">
								Upload het bewljs van terugkeer.
							</div>
							<form action = "<?= base_url('document/upload_document/22') ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
		     				
		     			</div>
		     		</div>
		     		<div class="row">
		     			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     				<a href="#" class="btn next-button">VERSTUREN</a>
		     			</div>		     			
		     		</div>
		      </div>
		    </div>
		  </div>

        </div>
    </div>
<!-- end tab 8 -->
    <?php } ?>


</div>
