<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student - Materials</title>
	<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/theme-midnight.css" id="theme-css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Welcome</span>, Student of I-School</a>
				<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a href="<?php echo base_url();?>login/logout" ><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
                <div class="profile-usertitle-name"><?php echo $student['name'];?></div>
				<div class="profile-usertitle-status">Nim: <?php echo $student['nis'];?></div>
                <div class="profile-usertitle-name">Class: <?php echo $student['classnumber'];?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?php echo base_url();?>student/home"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url();?>student/grade"><em class="fa fa-list-alt">&nbsp;</em> Grade</a></li>
			<li><a href="<?php echo base_url();?>student/attendance"><em class="fa fa-list-alt">&nbsp;</em> Attendance</a></li>
            <li><a href="<?php echo base_url();?>student/schedule"><em class="fa fa-list-alt">&nbsp;</em> Schedule</a></li>
            <li class="active"><a href="<?php echo base_url();?>student/materials"><em class="fa fa-list-alt">&nbsp;</em> Materials - Show</a></li>
			<li><a href="<?php echo base_url();?>student/assignment"><em class="fa fa-exclamation-circle">&nbsp;</em> Assignment</a></li>
			<li><a href="<?php echo base_url();?>student/profile"><em class="fa fa-pencil-square-o">&nbsp;</em> Profile</a></li>
	
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Materials</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
					<div class="panel-heading">
					<a href="<?php echo base_url(); ?>student/materials"><button class="btn btn-Link"><em class="fa fa-arrow-left">&nbsp;</em>Back</button></a>
						Materials Show</div>
					<div class="panel-body">
							
								<!-- Name input-->
								<div class="form-group">
									<label class="" for="name">Subject</label>
									<div class="">
                                        <?php echo $materials['subjectname']; ?>
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="" for="email">Title</label>
									<div class="">
                                    <?php echo $materials['materials_name']; ?>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="" for="message">Information</label>
									<div class="">
                                    <?php echo $materials['ket_materials']; ?>
									</div>
								</div>
								
								<div class="form-group">
									<label class="" for="message">Download Materials</label><br>
									<a href="<?php echo base_url(); ?>student/download_materials/<?= $materials['id']; ?>/<?= $materials['image']; ?>"><button class="btn btn-primary"><em class="fa fa-download">&nbsp;</em>Download</button></a>
									<div class="">
									
                                    <img src="<?php echo base_url();?>img/materials/<?php echo $materials['image']; ?>" alt="" width="1024" height="600" style="margin-top:10px;">
									</div>
								</div>
						
					</div>
				</div>
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
