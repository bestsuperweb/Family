<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('assets/img/logo_white.png'); ?>" class = "logo-img" >
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>">Home</a>                   
        </li>

<?php if($user_type == 'family') { ?>       

        <li>
            <a href="<?php echo base_url('index.php/index/roadmap/'); ?>">Stappenplan</a>                                    
        </li>
        <li>
            <a data-toggle="collapse" href="#collapse-submenu" class="active">Profile</a>
            <div class="panel-collapse collapse" id="collapse-submenu">
                <ul>
                    <li><a href="<?php echo base_url('index.php/index/profile/1'); ?>">Basic Information</a></li>
                    <li><a href="<?php echo base_url('index.php/index/profile/2'); ?>">About Host</a></li>
                    <li><a href="<?php echo base_url('index.php/index/profile/3'); ?>">About au-pair</a></li>
                    <li><a href="<?php echo base_url('index.php/index/profile/4'); ?>">Documents</a></li>                     
                </ul>
            </div>                     
        </li>
        <li>
            <a href="<?php echo base_url('index.php/index/matches/'); ?>">Matches</a>
        </li>                
            
<?php }else if($user_type == 'aupair') { ?>
        
        <li>
            <a href="<?php echo base_url('index.php/index/roadmap/'); ?>">Journey</a>                                    
        </li>
        <li>
            <a data-toggle="collapse" href="#collapse-submenu" class="active">Profiel</a>
            <div class="panel-collapse collapse" id="collapse-submenu">
                <ul>
                    <li><a href="<?php echo base_url('index.php/index/profile/1'); ?>">General</a></li>
                    <li><a href="<?php echo base_url('index.php/index/profile/2'); ?>">Experience</a></li>
                    <li><a href="<?php echo base_url('index.php/index/profile/4'); ?>">Documenten</a></li>                     
                </ul>
            </div>                     
        </li>
        <li>
            <a href="<?php echo base_url('index.php/index/matches/'); ?>">Matches</a>
        </li>

<?php } ?>

    </ul>
</div>
<!-- /#sidebar-wrapper -->