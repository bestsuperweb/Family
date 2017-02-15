<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forget Password | HBN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link href="<?php echo base_url('assets/css/session/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
<body>
<div class="login">
      <div class="logo"><img src="<?php echo base_url('assets/img/login_logo.png'); ?>" class="img-responsive"></div>
      <?php foreach ($this->aauth->get_errors_array() as $error){ ?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error; ?>
        </div>
      <?php } ?>
      <?php foreach ($this->aauth->get_infos_array() as $info){ ?>
        <div class="alert alert-success" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?= $info; ?>
        </div>
      <?php } ?>  
      <div class="form-group">
        <label> Request a new password</label>    
      </div>
      <form method="POST">
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
      </div>
      <div class="form-group">
        <input type="submit" name="" value="SEND PASSWORD LINK" class="btn login-btn">    
      </div>
      </form>
      <div class="form-group">
        <a href="<?php echo base_url('/session_controller/log_in'); ?>">Back to login</a>
        <span class="signup-link dropdown">
          <a href="#" data-toggle="dropdown">Sign up</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('/families/create/1'); ?>">as family</a></li>
            <li><a href="<?php echo base_url('/aupairs/create'); ?>">as au-pair</a></li>
            <li><a href="#">as admin</a></li>
          </ul>
        </span>
      </div>     
  </div>
  <div class="mask"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>