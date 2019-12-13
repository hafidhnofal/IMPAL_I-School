<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parent - Profile</title>
	<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style90.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/theme-lime.css" id="theme-css">
	
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Welcome</span>, Parent of I-School</a>
				<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a href="<?php echo base_url();?>login/logout" style="color:Blue;"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $parent['name'];?></div>
				<div class="profile-usertitle-status">Name Student: <?php echo $student['name'];?></div>
        <div class="profile-usertitle-name">NIS: <?php echo $student['nis'];?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li><a href="<?php echo base_url();?>parentt/home"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url();?>parentt/grade/<?= $student['nis'] ?>"><em class="fa fa-list-alt">&nbsp;</em> Grade</a></li>
			<li><a href="<?php echo base_url();?>parentt/attendance/<?= $student['nis'] ?>"><em class="fa fa-list-alt">&nbsp;</em> Attendance</a></li>
            <li><a href="<?php echo base_url();?>parentt/schedule/<?= $student['nis'] ?>"><em class="fa fa-list-alt">&nbsp;</em> Schedule</a></li>
			<li class="active"><a href="<?php echo base_url();?>parentt/profile/<?= $student['nis'] ?>"><em class="fa fa-pencil-square-o">&nbsp;</em> Profile</a></li>
	
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">Your Profile</div>
					
					<div class="panel-body articles-container">
                    <section class="hero-section spad">
                        <div class="container-fluid" style="margin-left:27px;">
                            <div class="row">
                                <div class="col-xl-10 offset-xl-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="hero-info">
                                                <h2><?php echo $parent['name'];?></h2>
                                            </div>
                                            <div class="hero-info">
                                                <h3 style="margin-bottom:12px;">Information :</h3>
                                                <ul>
                                                    <li><span>Date of Birth</span><?php echo $parent['birthdate'];?></li>
                                                    <li><span>Name Student</span><?php echo $student['name'];?></li>
                                                    <li><span>Nis Student</span><?php echo $student['nis'];?></li>
                                                    <li><span>Phone </span><?php echo $parent['phone'];?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
						  
					</div>
				</div><!--End .articles-->
				
				
			</div><!--/.col-->
		</div><!--/.row-->

	</div>	<!--/.main-->
	  

  <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>asset/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>asset/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>asset/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>asset/js/custom.js"></script>
	
</body>
</html>
