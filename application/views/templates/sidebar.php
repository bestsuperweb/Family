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
                <li>
                    <a href="<?php echo base_url('index.php/index/roadmap/'); ?>">Stappenplan</a>                                    
                </li>
                <li>
                    <a data-toggle="collapse" href="#collapse-submenu" class="active">Profiel</a>
                    <div class="panel-collapse collapse" id="collapse-submenu">
                        <ul>
                            <li><a href="<?php echo base_url('index.php/index/profile/1'); ?>">Basisinformatie</a></li>
                            <li><a href="<?php echo base_url('index.php/index/profile/2'); ?>">Over het gastgezin</a></li>
                            <li><a href="<?php echo base_url('index.php/index/profile/3'); ?>">Over de au-pair</a></li>
                            <li><a href="<?php echo base_url('index.php/index/profile/4'); ?>">Documenten</a></li>                     
                        </ul>
                    </div>                     
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/index/matches/'); ?>">Matches</a>
                </li>                
            </ul>
        </div>
<!-- /#sidebar-wrapper -->