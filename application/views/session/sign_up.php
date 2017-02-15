<!DOCTYPE html>
<html lang="en">
<head>
  <title>Set Password | HBN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link href="<?= base_url('assets/css/session/style.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
<body>
  <div class="login">
      <div class="logo"><img src="<?= base_url('assets/img/login_logo.png'); ?>" class="img-responsive"></div>
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
      <?php if(validation_errors()){ ?>
      <div class="alert alert-danger">
          <?php echo validation_errors(); ?>
      </div>
      <?php } ?>
      <form method="POST">
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
           <input type="submit" name="" value="SET PASSWORD" class="btn login-btn"> 
        </div>
      </form>        
  </div>
  <div class="mask"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>