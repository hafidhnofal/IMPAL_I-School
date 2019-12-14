<?php
$clo=0;
if($clo==0){
    $clo=$tm;
}

if (isset($_POST['class'])){
    $clo = $_POST['class'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Schedule</title>
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
			<li class="parent active"><a data-toggle="collapse" href="#sub-item-1">
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
					<li><a class="" href="<?php echo base_url();?>admin/student_show">
						<span class="fa fa-arrow-right">&nbsp;</span> Show All Student
					</a></li>
					<li><a class="" href="<?php echo base_url();?>admin/student_input">
						<span class="fa fa-arrow-right">&nbsp;</span> Input Student
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-book">&nbsp;</em> Teacher Data <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="<?php echo base_url();?>admin/teacher_show">
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
				<li class="active">Input Schedule</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Input Schedule</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
                <form action="<?php echo base_url();?>admin/get_schedule_from_class" method="POST">
					<div class="panel-heading">Select Class :
                    
                <select class="form-control col-lg-3" name="class" onchange="this.form.submit();">
                <option value="">Choose the Class first. . .</option>
                    <?php 
                        
                        foreach($class as $each){ ?>
                            <option <?php if($each['classid']==$idcls) echo 'selected="selected"';?> value="<?php echo $each['classid']; ?>"><?php echo $each['classnumber']; ?></option>;
                    <?php }?>
                    </select>
                    
                </form>
                <?php 
                if(isset($_POST['iclass'])){ 
                $idcls=$_POST['class'];} ?>

                    </div>
					
					<div class="panel-body articles-container">
                    <?php if($idcls==0){echo '-';}
                    
                    else {
                        ?>
                        
                    
						<table class="table">
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
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                        <select class="form-control" name="sub">
                                        <?php foreach($sub as $each){ ?>
                                            <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                        <?php }?>
                                        </select>
                                        <button type="submit" class="btn btn-success btn-md">+</button>
                                    </form>
                                
                                <?php }?>
                                
                                </td>
								<td scope="col">
                                <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?>
                                </td>
                                <td scope="col">
                                <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?>
                                </td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='07.00-08.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '07.00-08.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">08.00 - 09.00</td>
								<td scope="col">
                                    <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?>
                                

                                
                                </td>
								<td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='08.00-09.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '08.00-09.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">09.00 - 10.00</td>
								<td scope="col"> <?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='09.00-10.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '09.00-10.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">10.00 - 11.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='10.00-11.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '10.00-11.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">11.00 - 12.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub"">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='11.00-12.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '11.00-12.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
                              <tr>
								<td scope="col">12.00 - 13.00</td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Monday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Monday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
								<td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Tuesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Tuesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Wednesday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Wednesday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Thursday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Thursday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Friday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Friday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
                                <td scope="col"><?php 
                                    $s=0;
                                        foreach($sc as $scd){
                                            if($scd['times']=='12.00-13.00' and $scd['day']=='Saturday'){
                                                echo $scd['subjectname'];?>
                                                <a href="<?php echo base_url(); ?>admin/del_schedule/<?=$scd['id'] ?>/<?=$clo ?>"><button class="btn btn-danger">X</button></a>
                                                <?php 
                                                $s=1;
                                                break;
                                            }
                                        }?>
                                        
                                <?php
                                if($s!=1){?>
                                    <form action="<?php echo base_url(); ?>admin/input_schedule/<?= '12.00-13.00' ?>/<?= $idcls ?>/<?= 'Saturday' ?>/<?=$clo ?>" method="POST">
                                    <select class="form-control" name="sub">
                                    <?php foreach($sub as $each){ ?>
                                        <option value="<?php echo $each['subjectid']; ?>"><?php echo $each['subjectname']; ?></option>';
                                    <?php }?>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-md">+</button>
                                </form>
                                
                                <?php }?></td>
							  </tr>
							</tbody>
						  </table>

						  <?php } ?>
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
