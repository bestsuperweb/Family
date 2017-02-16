<!-- navbar -->
<?php
	if ( !isset($register)) {
?>
    <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" id="menu-toggle" href="#menu-toggle"><span class="glyphicon glyphicon-triangle-left"></span></a>
	    </div>
        <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#" class="navbar-user"><img src="<?php echo base_url('assets/img/users.png'); ?>" class="navbar-img">  
		      <?= ucfirst($user_type) ?>
		      <!-- <?php if($user_type == 'family'){ echo $parents[0]['lastname']; }else{ echo $aupair['full_name']; } ?> --></a></li>
		      <li><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/settings-3-icon.png'); ?>" class="navbar-img"></a></li>
		      <li><a href="<?php echo base_url('session_controller/log_out'); ?>"><img src="<?php echo base_url('assets/img/inside-logout-icon.png'); ?>" class="navbar-img"></a></li>
		    </ul>
		</div>
	  </div>
	</nav>
<?php
	} else if ( $register == 'family' ) {
		$li_class = array();
		$li_class['first'] = 'register-li-first';
		$li_class['second'] = 'register-li';
		$li_class['third'] = 'register-li';
		$li_class['forth'] = 'register-li';
		switch ($page) {
			case 1:
				$li_class['first'] = 'register-li-first-active';				
				break;
			case 2:
				$li_class['second'] = 'register-li-active';
				break;
			case 3:
				$li_class['third'] = 'register-li-active';
				break;
			case 4:
				$li_class['forth'] = 'register-li-active';
				break;
			
			default:
				$li_class['first'] = 'register-li-first-active';
				break;
		}
?>
	<nav class="navbar navbar-register navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo_white.png'); ?>" class="logo-img"></a>
	    </div>
        <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav">
		      <li class="register-li-first <?php echo $li_class['first']; ?>" >
		      <a href="<?php if($li_class['first'] == 'register-li-first-active'){echo base_url('index.php/families/create/1');} ?>" >1.Basisinformatie</a></li>
		      <li class="register-li <?php echo $li_class['second']; ?>" >
		      <a href="<?php if($li_class['second'] == 'register-li-active'){echo base_url('index.php/families/create/2');} ?>" >
		      2.Over het gastgezin</a></li>
		      <li class="register-li <?php echo $li_class['third']; ?>" >
		      <a href="<?php if($li_class['third'] == 'register-li-active'){echo base_url('index.php/families/create/3');} ?>" >
		      3.Over de au-pair</a></li>
		      <li class="register-li <?php echo $li_class['forth']; ?>" >
		      <a href="<?php if($li_class['forth'] == 'register-li-active'){echo base_url('index.php/families/create/4');} ?>" >4.Kosten</a></li>
		    </ul>
		</div>
	  </div>		
	</nav>

<?php } else if ( $register == 'aupair' ) {?>

<nav class="navbar navbar-register navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo_white.png'); ?>" class="logo-img"></a>
	    </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        </div>
    </div>
</nav>
<?php } ?>
<!-- navbar end -->