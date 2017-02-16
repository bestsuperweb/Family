<!-- views/index/roadmap.php  -->   

    <!-- Page Content -->
    <div id="page-content-wrapper" >
        <div class="container-fluid">
            <h1><i><b>Stappenplan</b></i></h1>

            <div class="panel-group roadmap-panel-group" id="accordion">
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 1. Profiel</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse in">
			      <div class="panel-body">
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	Alle informatie is aangeleverd en gecheckt door HBN<br>
			      	<img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 
			      	Alle documenten zijn aangeleverd en verwerkt door HBN<br>
			      	<a class="btn next-button" href="<?php echo base_url('index.php/index/roadmap_profile/'); ?>">NAAR STAP 1</a>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 2. Inkomenstoetsing</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
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
			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 3. Matching</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
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

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
			        <img src="<?php echo base_url('assets/img/check-green.png'); ?>" class="collapse-img"> 4. Visa</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > HBN
			        </span>
			      </h4>
			    </div>
			    <div id="collapse4" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Er ontbreekt nog informatie over het visum<br>
			      	<img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 
			      	Nog niet alle documenten zijn aangeleverd en verwerkt door HBN<br>
			      	<a class="btn next-button button-red">NAAR STAP 1</a>
			      </div>
			    </div>
			  </div>
			
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 5. Voorbereiding</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse5" class="panel-collapse collapse">
			      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			      commodo consequat.</div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
			        <img src="<?php echo base_url(); ?>assets/img/settings-red.png" class="collapse-img"> 6. Aankomst</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse6" class="panel-collapse collapse">
			      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			      commodo consequat.</div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 7. Tijdens verblijf</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse7" class="panel-collapse collapse">
			      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			      commodo consequat.</div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
			        <img src="<?php echo base_url('assets/img/settings-red.png'); ?>" class="collapse-img"> 8. Vertrek</a>
			        <span class="collapse-right">
			        	<img src="<?php echo base_url('assets/img/users-white.png');?>" > FAMILIE DE <?= strtoupper($parents[0]['lastname']) ?>
			        </span>
			      </h4>
			    </div>
			    <div id="collapse8" class="panel-collapse collapse">
			      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			      commodo consequat.</div>
			    </div>
			  </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

