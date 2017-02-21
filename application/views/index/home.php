<!-- views/index/home.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <h1><i><b>Welcome <?= ucfirst($user_type) ?></b></i></h1>
    <?php if($user_type == 'HBN'){ ?>
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    		<h3>Updates</h3>
    	</div>
    	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
    		<h3>Takenlijist</h3>
    	</div>
    </div>
    <?php } ?>
    </div>
</div>
