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
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<p>TO DO: Een korte "Dear au pair letter" schrijven, <b>zie opzet;</b> dit is niet verplicht maar kan een leuk persoonlijk gevoel geven richting de au pair.</p>
						Dear Au Pair,<br>
						Suggesties brief (in het Engels):<br>
						<b>- Korte introductie host ouders, wat uitgebreider over kind(eren);<br>
						- Omschrijven gezinssituatie: jullie werk, hobby’s, school/crèche, interesses en buitenschoolse activiteiten van jullie kind(eren);<br>
						- Waarom willen jullie een au pair;<br>
						- Wat verwachten jullie van jullie (toekomstige) au pair; - Iets leuks over Nederland, plek waar jullie wonen etc</b><br>

						<div><a class="btn next-button">INDIENEN</a></div>
		      		</div>
		      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		      			<textarea class="form-control" rows="10">
		      				
		      			</textarea>
		      		</div>
		      	</div>
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
		      			<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      			<!-- <input type="file" multiple="multiple" class="dz-hidden-input" > -->
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>
        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
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
						    <option>Loondienst</option>
						    <option>Loondienst</option>
						    <option>Loondienst</option>
						    <option>Loondienst</option>
						    <option>Loondienst</option>
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
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Kopie het arbeidscontract (min 12 mnd.):</b><br><br>								
								Let op: Ook met handtekening van werknemer (mag per mail/gescand)<br>
							</div>
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Kopieën van loonstroken van de laatste 3 maanden.</b><br><br>
								Let op: De laatste 3 loonstroken op het moment van de aanvraag, zelfde persoon als het contract/werkgeversverklaring (mag per mail/gescand)<br>
							</div>
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
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
		      	<div class="row">
		      		
		      	</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        <img src="<?php echo base_url('assets/img/reload-icon.png'); ?>" class="collapse-img">  Eigen vermogen </a>
		        <span class="collapse-right">
		        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
		        </span>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<p>Wanneer er voldoende eigen vermogen is; Het fictief vermogen van 4% gedeeld door 12 maanden moet boven de norm uitkomen. Hiervoor zijn de volgende bewijsstukken nodig.</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>De laatste voorlopige of definitieve aanslag van de Belastingdienst waaruit het inkomen uit Box 2 en 3 blijkt.</b><br><br>
							</div>
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>De laatste aangifte van het inkomen aan de Belastingdienst waaruit het inkomen uit Box 2 en 3 blijkt.</b><br><br>
							</div>
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
			      				<div class="dz-default dz-message"><span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
			      			</form>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="above-drop-file">
								<b>Bescheiden waaruit de omvang en samenstelling van het eigen vermogen blijkt op het moment van indiening van de aanvraag (vermogens bankrekeningsaldo, aandelen portfolio, kadastraal uittreksel van woningen in bezit of anders)</b><br><br>
							</div>
							<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
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
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 3">
        </div>
    </div>
<!-- end tab2 -->
    <?php }elseif($tab == 3){?>
<!-- start tab3 -->
	<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p><br><br>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>		    	
	    </div><br><br>	    
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
					<img src="<?= base_url('assets/img/skype.png') ?>" class='skype-img' />						
					<div class="row skype-panel">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label>Au-pair:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="form-control custom-select">
			    						<select name="">
										    <option>aupair-1</option>
										    <option>aupair-2</option>
										    <option>aupair-3</option>
										    <option>aupair-4</option>
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
					        	  	<input type="text" name="sd_date" class="form-control" autocomplete='off'>
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
				    				<input type="text" class="form-control"  name="sd_start_time" autocomplete='off'>
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
					        	  	<input type="text" name="sd_date" class="form-control" autocomplete='off'>
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
				    				<input type="text" class="form-control"  name="sd_start_time" autocomplete='off'>
				    				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				    				</div>
								</div>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<label>Personal Message:</label>
							<textarea class="form-control" rows="10">
								
							</textarea>
						</div>						
					</div>
					<a href="" class="btn next-button">VERSTUREN</a>
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
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">Match aanmaken met:</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-control custom-select">
		    						<select name="">
									    <option>aupair-1</option>
									    <option>aupair-2</option>
									    <option>aupair-3</option>
									    <option>aupair-4</option>
								  	</select>
		    					</div>
							</div>
						</div><br><br>
						<p>Nadat jullie hieronder op ‘Match aanmaken’ hebben <br>gedrukt wordt de agreement automatisch gegenereerd.<br><br>
						Jullie ontvangen deze per e-mail. Hiernaast kunnen <br>jullie vervolgens de getekende agreement oploaden.</p><br>
						<a href="" class="btn next-button">MATCH AANMAKEN</a><br><br>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" >
						<div class="above-drop-file">
							<b>Upload hier de agreement, voorzien van jullie handtekening. Vervolgens zullen HBN en de au-pair de agreement goedkeuren.<br><br>
							Naast de agreement volgen in de stappen hieronder nog enkele documenten.</b><br>
						</div>
						<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
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
							<a href="#" class="btn next-button">DOWNLOADEN</a><br><br>
							<b>Upload hieronder de awareness declaration, voorzien van jullie handtekening.</b><br>
						</div>
						<form action = "<?= base_url() ?>" class="dropzone dz-clickable" >
		      				<div class="dz-default dz-message">
		      				<span>Drag and drop folders and files from desktop or use the <a>file browser</a></span></div>
		      			</form>
		      		</div>
		      		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"></div>
		      	</div>
		      	<a href="#" class="btn next-button">INDIENEN</a>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 4">
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
				    <div id="collapse1" class="panel-collapse collapse">
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
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 5">
        </div>
    </div>
<!-- end tab4 -->
    <?php }elseif ($tab == 5) { ?>
<!-- start 5 -->
	<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p><br><br>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>		    	
	    </div><br><br>	    
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
		     		<p>Wanneer er minimaal sprake is van een jaarcontract<br><br>
					Werkgeversverklaring: Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
					Kopie het arbeidscontract (min 12 mnd.)<b> Let op: Ook met handtekening van werknemer </b>(mag per mail/gescand)<br><br>
					Kopieën van loonstroken van de laatste 3 maanden.<b> Let op: De laatste 3 loonstroken op het moment van de aanvraag,</b> zelfde persoon als het<br>
					contract/werkgeversverklaring (mag per mail/gescand)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							
						</div>
					</div>
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
		      		
		      	</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
        </div>
    </div>
<!-- end tab 5 -->
    <?php }elseif ($tab == 6) { ?>
<!-- start 6 -->
<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p><br><br>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>		    	
	    </div><br><br>	    
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
		     		<p>Wanneer er minimaal sprake is van een jaarcontract<br><br>
					Werkgeversverklaring: Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
					Kopie het arbeidscontract (min 12 mnd.)<b> Let op: Ook met handtekening van werknemer </b>(mag per mail/gescand)<br><br>
					Kopieën van loonstroken van de laatste 3 maanden.<b> Let op: De laatste 3 loonstroken op het moment van de aanvraag,</b> zelfde persoon als het<br>
					contract/werkgeversverklaring (mag per mail/gescand)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							
						</div>
					</div>
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
		      		
		      	</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
        </div>
    </div>
<!-- end tab 6 -->
    <?php }elseif ($tab == 7) { ?>
<!-- start 7 -->
<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p><br><br>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>		    	
	    </div><br><br>	    
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
		     		<p>Wanneer er minimaal sprake is van een jaarcontract<br><br>
					Werkgeversverklaring: Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
					Kopie het arbeidscontract (min 12 mnd.)<b> Let op: Ook met handtekening van werknemer </b>(mag per mail/gescand)<br><br>
					Kopieën van loonstroken van de laatste 3 maanden.<b> Let op: De laatste 3 loonstroken op het moment van de aanvraag,</b> zelfde persoon als het<br>
					contract/werkgeversverklaring (mag per mail/gescand)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							
						</div>
					</div>
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
		      		
		      	</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
        </div>
    </div>
<!-- end tab 7 -->
    <?php }elseif ($tab == 8) { ?>
<!-- start 8 -->
<h1><i><b>3. Matching</b></i></h1>
	    <div class="row">
	    	<p>Nu het familie profiel is opgemaakt en we meer inzicht hebben in jullie levensstijl, persoonlijkheid en de wensen t.a.v van de nieuwe au pair, gaat HBN op zoek naar de juiste match voor jullie. Huisje Boompje Nanny vindt de ‘klik’ tussen au pair en host-familie erg belangrijk en besteedt daarom veel tijd en aandacht aan deze fase. HBN probeert de au pairs zo veel mogelijk persoonlijk te leren kennen. Vervolgens zullen wij jullie alleen de kandidaten toesturen van wie wij denken dat zij goed bij jullie passen. In eerste instantie zullen dat ongeveer 1 a 2 passende kandidaten zijn, maar het kunnen ook meerdere kandidaten zijn. Het is altijd goed om te skypen want een profiel op papier zegt niet altijd alles.</p><br><br>
	    	<b>Wanneer jullie gematcht zijn aan één of meerdere au-pairs ontvangen jullie een e-mail. Vervolgens kunnen jullie via ‘Matches’ pagina in het menu de profielen van de au-pairs bekijken.</b>		    	
	    </div><br><br>	    
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
		     		<p>Wanneer er minimaal sprake is van een jaarcontract<br><br>
					Werkgeversverklaring: Dit formulier dient door de werkgever volledig ingevuld te worden en ondertekend + evt. bedrijfsstempel; Werkgeversverklaring mag niet ouder dan 3 maanden zijn op het moment van de aanvraag;<br>
					Kopie het arbeidscontract (min 12 mnd.)<b> Let op: Ook met handtekening van werknemer </b>(mag per mail/gescand)<br><br>
					Kopieën van loonstroken van de laatste 3 maanden.<b> Let op: De laatste 3 loonstroken op het moment van de aanvraag,</b> zelfde persoon als het<br>
					contract/werkgeversverklaring (mag per mail/gescand)</p><br>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							
						</div>
					</div>
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
		      		
		      	</div>
		      </div>
		    </div>
		  </div>

        </div>

        <div class="row">
        	<input type="submit" name="" class="btn next-button" value="NAAR STAP 2">
        </div>
    </div>
<!-- end tab 8 -->
    <?php } ?>


</div>
