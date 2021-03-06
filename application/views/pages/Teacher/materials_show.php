<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher - Home</title>
	<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/theme-iris.css" id="theme-css">
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
				<a class="navbar-brand" href="#"><span>Welcome</span>, Teacher of I-School</a>
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
				<div class="profile-usertitle-name"><?php echo $teacher['name'];?></div>
				<div class="profile-usertitle-status">Nip: <?php echo $teacher['nip'];?></div>
                <div class="profile-usertitle-name">Class: <?php echo $teacher['classnumber'];?></div>
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
			<li><a href="<?php echo base_url();?>teacher/home"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url();?>teacher/grade"><em class="fa fa-list-alt">&nbsp;</em> Grade</a></li>
			<li><a href="<?php echo base_url();?>teacher/attendance"><em class="fa fa-list-alt">&nbsp;</em> Attendance</a></li>
      		<li><a href="<?php echo base_url();?>teacher/schedule"><em class="fa fa-list-alt">&nbsp;</em> Schedule</a></li>
      		<li class="parent active "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-calendar">&nbsp;</em> Materials - Show All<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url();?>teacher/materials">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Materials
					</a></li>
					<li><a class="" href="<?php echo base_url();?>teacher/materials_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Materials
					</a></li>
				</ul>
			</li>
			<li class="parent"><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-calendar">&nbsp;</em> Assignment<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?php echo base_url();?>teacher/assignment">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Assignment
					</a></li>
					<li><a class="" href="<?php echo base_url();?>teacher/assignment_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Assignment
					</a></li>
					<li><a class="" href="<?php echo base_url();?>teacher/assignment_check">
						<span class="fa fa-arrow-right">&nbsp;</span> Check Assignment
					</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url();?>teacher/profile"><em class="fa fa-pencil-square-o">&nbsp;</em> Profile</a></li>
	
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Materials - Show</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
					<div class="panel-heading">
                    <a href="<?php echo base_url(); ?>teacher/materials"><button class="btn btn-Link"><em class="fa fa-arrow-left">&nbsp;</em>Back</button></a>
						Materials for Class: <?php echo $materials['classnumber']; ?></div>
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
									<label class="" for="message">Image</label>
									<div class="">
                                    <img src="<?php echo base_url();?>img/materials/<?php echo $materials['image']; ?>" alt=""  width="1024" height="600" style="margin-top:10px;">
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
