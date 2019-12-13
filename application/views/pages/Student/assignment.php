<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student - Assigment</title>
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
            <li><a href="<?php echo base_url();?>student/materials"><em class="fa fa-list-alt">&nbsp;</em> Materials</a></li>
			<li class="active"><a href="<?php echo base_url();?>student/assignment"><em class="fa fa-exclamation-circle">&nbsp;</em> Assignment</a></li>
			<li><a href="<?php echo base_url();?>student/profile"><em class="fa fa-pencil-square-o">&nbsp;</em> Profile</a></li>
	
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Assignment</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-md-12">
        <div class="panel panel-default ">
					<div class="panel-heading">Assignment</div>
					<div class="panel-body timeline-container">
						<ul class="timeline">
                        <?php foreach ($ass as $data): ?>
							<li>
								<div class="timeline-badge <?php if($data['submint']==0){echo '';}else{echo 'success';} ?>"><i class="glyphicon glyphicon-<?php if($data['submint']==0 and $data['grade']==0){echo 'minus';}elseif($data['submint']==1 and $data['grade']==0){echo 'ok';}else{
									echo 'ok-circle';
								} ?>"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
									<?php if($data['submint']!=0 and $data['grade']!=0){?>

									<div class="col-xs-1 date">
										<div class="large"><?php echo $data['grade']; ?><span class="text-muted small" style="font-size:15px">/100</span></div>
										<div class="text-muted">Point</div>
									</div>
									<?php }?>
										<h4 class="timeline-title"><?php echo $data['subjectname']; ?> - <span style="color:black;font-weight:bold"> <?php echo $data['assignmentname']; ?></span></h4>
									</div>
									<div class="timeline-body">
										<p><?php echo $data['ket_assignment']; ?></p>
									</div>
                                    <a href="<?php echo base_url(); ?>student/assignment_show/<?= $data['assignmentid'] ?>/<?= $data['id'] ?>"><button class="btn btn-info">Readmore...</button></a>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
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