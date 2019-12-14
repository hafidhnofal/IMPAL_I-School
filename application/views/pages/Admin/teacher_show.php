<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin -  Show All Teacher</title>
	<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/styles.css" rel="stylesheet">
	
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
				<div class="profile-usertitle-name"><?php echo $admin['name'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
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
			<li><a href="<?php echo base_url();?>admin/home"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?php echo base_url();?>admin/subject"><em class="fa fa-list-alt">&nbsp;</em> Subject</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-calendar">&nbsp;</em> Schedule <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url();?>admin/schedule_show">
						<span class="fa fa-arrow-right">&nbsp;</span> Show Schedule
					</a></li>
					<li><a class="" href="<?php echo base_url();?>admin/schedule_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Input Schedule
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-book">&nbsp;</em> Student Data <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a href="<?php echo base_url();?>admin/student_show">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Student
					</a></li>
					<li><a class="" href="<?php echo base_url();?>admin/student_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Input Student
					</a></li>
				</ul>
			</li>
			<li class="parent active"><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-book">&nbsp;</em> Teacher Data - Show<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li ><a class="" href="<?php echo base_url();?>admin/teacher_show">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Teacher
					</a></li>
					<li><a class="" href="<?php echo base_url();?>admin/teacher_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Input Teacher
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-book">&nbsp;</em> Parent Data <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="<?php echo base_url();?>admin/parent_show">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Parent
					</a></li>
					<li><a class="" href="<?php echo base_url();?>admin/parent_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Input Parent
					</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url();?>admin/profile"><em class="fa fa-exclamation-circle">&nbsp;</em> Admin Profile</a></li>
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Teacher Data - Show All Teacher</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			<?php
		if($this->session->flashdata('alert')) {
  			$message = $this->session->flashdata('alert');?>
			<div class="alert bg-<?php echo $message['class']?>" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em><?php echo $message['message']; ?> </div>
		<?php }?>
				<h1 class="page-header">Show All Teacher</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
                
                        
                    </div>
					
					<div class="panel-body articles-container">
						<table class="table table-striped">
							<thead class="thead-dark">
							  <tr>
								<th scope="col">NIP</th>
								<th scope="col">Name</th>
								<th scope="col">Gander</th>
                                <th scope="col">Age</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Class</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
							  </tr>
							</thead>
                            <tbody>
                                  <?php foreach ($tea as $data): ?>
                                  <tr>
                                        <th scope="row"><?php echo $data['nip']; ?></th>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php if($data['gender']=='l'){
                                                echo "Male";
                                            }else{
                                                echo "Female";
                                            }; ?></td>
										<td><?php echo date_diff(date_create($data['birthdate']),date_create('today'))->y; ?></td>
										<td><?php echo $data['phone']; ?></td>
                                        <td><?php echo $data['classnumber']; ?></td>
                                        <td><?php echo $data['password']; ?></td>
                                        <td>
											<a href="<?php echo base_url(); ?>admin/e_teacher/<?= $data['nip'] ?>"><button class="btn btn-primary">Edit</button></a>
										</td>
                                    </tr>
                                  <?php endforeach; ?>

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
	<script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(500, 0).slideUp(500, function() {  
           $(this).remove();  
         });  
       }, 2000);  
     });  
   </script>
</body>
</html>
