<!-- views/index/matches.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <ul class="nav nav-pills nav-wizard">
	    <li class="active"><a href="#" data-toggle="tab">Home</a></li>
	    <li><a href="#" data-toggle="tab">About</a></li>
	    <li><a href="#" data-toggle="tab">Contact</a></li>
	</ul>
	<style type="text/css">
		.nav-pills.nav-wizard > li {
		  position: relative;
		  overflow: visible;
		  border-right: 15px solid transparent;
		  border-left: 15px solid transparent;
		}
		.nav-pills.nav-wizard > li + li {
		  margin-left: 0;
		}
		.nav-pills.nav-wizard > li:first-child {
		  border-left: 0;
		}
		.nav-pills.nav-wizard > li:first-child a {
		  border-radius: 5px 0 0 5px;
		}
		.nav-pills.nav-wizard > li:last-child {
		  border-right: 0;
		}
		.nav-pills.nav-wizard > li:last-child a {
		  border-radius: 0 5px 5px 0;
		}
		.nav-pills.nav-wizard > li a {
		  border-radius: 0;
		  background-color: #eee;
		}
		.nav-pills.nav-wizard > li:not(:last-child) a:after {
		  position: absolute;
		  content: "";
		  top: 0px;
		  right: -20px;
		  width: 0px;
		  height: 0px;
		  border-style: solid;
		  border-width: 20px 0 20px 20px;
		  border-color: transparent transparent transparent #eee;
		  z-index: 150;
		}
		.nav-pills.nav-wizard > li:not(:first-child) a:before {
		  position: absolute;
		  content: "";
		  top: 0px;
		  left: -20px;
		  width: 0px;
		  height: 0px;
		  border-style: solid;
		  border-width: 20px 0 20px 20px;
		  border-color: #eee #eee #eee transparent;
		  z-index: 150;
		}
		.nav-pills.nav-wizard > li:hover:not(:last-child) a:after {
		  border-color: transparent transparent transparent #aaa;
		}
		.nav-pills.nav-wizard > li:hover:not(:first-child) a:before {
		  border-color: #aaa #aaa #aaa transparent;
		}
		.nav-pills.nav-wizard > li:hover a {
		  background-color: #aaa;
		  color: #fff;
		}
		.nav-pills.nav-wizard > li.active:not(:last-child) a:after {
		  border-color: transparent transparent transparent #542a44;
		}
		.nav-pills.nav-wizard > li.active:not(:first-child) a:before {
		  border-color: #542a44 #542a44 #542a44 transparent;
		}
		.nav-pills.nav-wizard > li.active a {
		  background-color: #542a44;;
		}
	</style>
    <h1><i><b>Matches</b></i></h1>
    </div>
</div>
