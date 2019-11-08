<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student - Schedule</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/style/style.css">
    <style>
a:link, a:visited {
  color: black;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-style: solid;
  margin: 5px;
  height: 20px;
  width: 150px;
}
a:hover, a:active {
  background-color: red;
}

.b {
  color: black;
  padding-top: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  background-color: #ff0033;
  font-size: 15px;
  height: 30px;
  width: 70px;
}
.b:hover, .b:active {
  background-color: #cc0000;
}
</style>
</head>
<body>

<table>
    <div class=" ">
      <tr>
        <th style="text-align : center; font-size : 200%" width="5000px">I-School</th>
        <th><a href="<?php echo base_url();?>login/logout" class="b">Log Out</a></th>
            </tr>
    </div>
  </table>

  <table>
             <tr>
                 <th rowspan="2" width="250px" >
                   <form>
                      <div style="margin-left:1px; font:100; margin-top:-170px"></div>
                      <img src="../img/student.png" alt="image" title="Legend" width="200" height="200"/>
                     <ul>
                     <div style="text-align:center; margin-left:-30px"><?php echo $user['name'];?></div>
                        <div style="text-align:center; margin-left:-30px"><?php echo $user['nis'];?></div>
                     </ul>
                     <a href="<?php echo base_url();?>student/view_grade" >Grade</a>
                     <a href="<?php echo base_url();?>student/view_attend" >Attendance</a>
                     <a href="<?php echo base_url();?>student/view_schedule" style=" background:blue">Schedule</a>
                     <a href="<?php echo base_url();?>student/view_materials" >Materials</a>
                     <a href="<?php echo base_url();?>student/view_grade" >Assignment</a>
                     <a href="<?php echo base_url();?>student/view_profile" >Profile</a>

                 <th colspan="2" width="10000px" height="650px" >
              <table border="1" >
                <tr>
                  <th width="2000px">Days</th>
                  <th width="2000px">Time</th>
                  <th width="2000px">Room</th>
                  <th width="2000px">Code Subject</th>
                  <th width="2000px">Subject</th>
                  <th width="2000px">Class</th>
                  <th width="2000px">Status</th>
                </tr>
              </table>
              <table >
                <tr>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                  <th width="2000px" height="650px"></th>
                </tr>
              </table>
              </th>
         </table>


</body>
</html>
