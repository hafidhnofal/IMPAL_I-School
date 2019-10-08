<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login I-School</title>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/style/style.css">
</head>
<body>  
    <div class="kotak_login">
        <h1>Login</h1>
        <h2>I-School</h2>
        <form action="<?php echo base_url();?>login/action_login" target="_parent" method="post" id="form_login" class="has-validation-callback">
            <label for="">ID Login</label>
            <input type="text" name="id" id="" class="form_login" placeholder="ID . .">
            
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form_login" placeholder="Password . .">

            <br/>
            <label for="">Login As</label>
            <select name="role" id="" class="form_login">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="parent">Parent</option>
                <option value="admin">Admin</option>
            </select>

            <input type="submit" value="LOGIN" class="tombol_login">
        </form>
    </div>
</body>
</html>