<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student - Home</title>
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
</style>
</head>
<body>

<table>
    <div class=" ">
      <tr>
        <th style="font-size : 200%" width="1000px">Student</th>
        <th style="text-align : center; font-size : 200%" width="5000px">I-School</th>
        <th><button type="button" style="background:red; font-size : 20px; width:100px; height:50px">Log Out</button></th>
      </tr>
    </div>
  </table>

  <table>
             <tr>
                 <th rowspan="2" width="250px" ><form>

                      <div style="margin-left:1px; font:100; margin-top:-170px"></div>
                      <img src="../img/student.png" alt="image" title="Legend" width="200" height="200"/>
                     <ul>
                          <div style="text-align:center; margin-left:-30px"><?php echo $user['name'];?></div>
                          <div style="text-align:center; margin-left:-30px"><?php echo $user['nis'];?></div>
                     </ul>
                     <a href="" target="_blank" >Grade</a>
                     <a href="" target="_blank" >Attendance</a>
                     <a href="" target="_blank" >Schedule</a>
                     <a href="" target="_blank" >Materials</a>
                     <a href="" target="_blank" >Assignment</a>
                     <a href="" target="_blank" >Profile</a>

                 <th colspan="2" width="10000px" height="650px" > INFORMATION </td>
         </table>
</body>
</html>
