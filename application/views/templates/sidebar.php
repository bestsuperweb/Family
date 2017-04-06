<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/img/logo_white.png'); ?>" class = "logo-img" >
            </a>
        </li>
        <li>
            <a href="<?= base_url('index/home'); ?>">Home</a>                   
        </li>
<?php if($this->aauth->is_member(4)) { ?>       

        <li>
            <a href="<?= base_url('index/roadmap/'); ?>">Stappenplan</a>                                    
        </li>
        <li>
            <a href="<?= base_url('index/profile/1'); ?>" class="active">Profile</a>
            <div class="panel-collapse collapse <?php if($title == 'Profile'){echo 'in';} ?>" id="collapse-submenu">
                <ul>
                    <li><a href="<?= base_url('index/profile/1'); ?>">Basic Information</a></li>
                    <li><a href="<?= base_url('index/profile/2'); ?>">About Host</a></li>
                    <li><a href="<?= base_url('index/profile/3'); ?>">About au-pair</a></li>
                    <li><a href="<?= base_url('index/profile/4'); ?>">Documents</a></li>                     
                </ul>
            </div>                     
        </li>
        <li>
            <a href="<?= base_url('index/matches/'); ?>">Matches</a>
        </li>                
            
<?php }else if($this->aauth->is_member(5)) { ?>
        
        <li>
            <a href="<?= base_url('index/roadmap/'); ?>">Journey</a>                                    
        </li>
        <li>
            <a href="<?= base_url('index/profile/1'); ?>" class="active">Profile</a>
            <div class="panel-collapse collapse <?php if($title == 'Profile'){echo 'in';} ?>" id="collapse-submenu">
                <ul>
                    <li><a href="<?= base_url('index/profile/1'); ?>">General</a></li>
                    <li><a href="<?= base_url('index/profile/2'); ?>">Experience</a></li>
                    <li><a href="<?= base_url('index/profile/3'); ?>">Documenten</a></li>                     
                </ul>
            </div>                     
        </li>
        <li>
            <a href="<?= base_url('index/matches/'); ?>">Matches</a>
        </li>

<?php }else if($this->aauth->is_member(6)) { ?>

        <li>
            <a href="<?= base_url('index/families/'); ?>">Families</a>                                    
        </li>
        <li>
            <a href="<?= base_url('index/aupairs/'); ?>">Au-pairs</a>                                    
        </li>
        
<?php } ?>

    </ul>
</div>
<!-- /#sidebar-wrapper