<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login I'School</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/vendor/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style113.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/main.css">
</head>
<body>

<div id="particles-js"></div>

<div class="text" style="border-radius: 25px;">
    <form action="<?php echo base_url();?>login/action_login" target="_parent" method="post" id="form_login" class="login100-form validate-form">
        <span class="login100-form-title p-b-37" style="color: rgb(241, 202, 235);">
          Login I'School
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
          <input class="input100" type="text" name="id" placeholder="id"  style="Border: none;">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password"  style="Border: none;">
          <input class="input100" type="password" name="password" placeholder="password">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
          <select name="role" class="input100" style="Border: none;">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="parent">Parent</option>
            <option value="admin">Admin</option>
          </select>	
          <span class="focus-input100"></span>
        </div>

        <?php if($this->session->flashdata('alert')) {
  			  $message = $this->session->flashdata('alert');?>
          <div class="alert alert-<?php echo $message['class']?>">
           <?php echo $message['message']; ?>
        </div>
    <?php }?>
    
      
         
        <div class="container-login100-form-btn">
            <input type="submit" value="LOGIN" class="login100-form-btn">
        </div>

        <div class="text-center p-t-20 p-b-20">
          <span class="txt1">
            Forgot Password? Contact Admin!
          </span>
        </div>



        <div class="text-center">
          <a href="#" class="txt2 hov1">
    
          </a>
        </div>
      </form>
</div>
  <script src='<?php echo base_url();?>asset/vendor/jquery/S6Ptkwu_qA.js'></script>
  <script  src="<?php echo base_url();?>asset/vendor/jquery/script.js"></script>

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