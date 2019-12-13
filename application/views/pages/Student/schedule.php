<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student - Schedule</title>
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
				<a class="navbar-brand" href="#"><span>Welcome</span>, Admin of I-School</a>
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
            <li class="active"><a href="<?php echo base_url();?>student/schedule"><em class="fa fa-list-alt">&nbsp;</em> Schedule</a></li>
            <li><a href="<?php echo base_url();?>student/materials"><em class="fa fa-list-alt">&nbsp;</em> Materials</a></li>
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
				<li class="active">Schedule</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Schedule</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">Schedule Class: <?php echo $student['classnumber'];?></div>
					<div class="panel-body articles-container">
						<table class="table table-striped">
							<thead class="thead-dark">
							  <tr>
								<th scope="col">Time</th>
								<th scope="col">Monday</th>
								<th scope="col">Tuesday</th>
                                <th scope="col">Wednesday</th>
                                <th scope="col">Thursday</th>
                                <th scope="col">Friday</th>
                                <th scope="col">Saturday</th>
							  </tr>
							</thead>
							<tbody>
                            <tr>
								<td scope="col">07.00 - 08.00</td>
								<td scope="col">
                                <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                <?php
                                if($s!=1){?>
                                    -
                                <?php }?>
                                </td>
								<td scope="col">
                                <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?>
                                </td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?>
                                </td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">08.00 - 09.00</td>
								<td scope="col">
                                    <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?>

                                </td>
								<td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Thursday	'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">09.00 - 10.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">10.00 - 11.00</td>
								<td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">11.00 - 12.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">12.00 - 13.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];
                                                $s=1;
                                                break;
                                            }
                                        }?> 
                                <?php
                                if($s!=1){?>
								-
                                    <?php }?></td>
							  </tr>
							</tbody>
						  </table>
						  
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
