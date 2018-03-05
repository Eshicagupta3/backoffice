<?php
if(isset($_COOKIE['aauser']))
{
  $aauser=$_COOKIE['aauser'];
  $_SESSION['adminuser1']=$aauser;
header('location: admin/register.php');
}
?>
<html>
<head>
<title>chat</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="/zealicon/assets/img/l1.png" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
 
<style>

.box{
  width: 50%;
    border: 1px solid #485048;
    padding: 50px;
    position: absolute;
    left: 25%;
    box-shadow: 5px 5px #ABB4AB;
}
.a1{
  font-size: 20px;
   color: black
}
.hpad1{
  text-align: center;
  
}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{
  color: #3B643B;
  font-weight: bold;
  font-size: 25px;
  background-color: white;
}
.nav-pills>li>a:hover{
    background-color: white;
}

</style>
</head>
<body>
<br><br><br><br>
<div class="box">

<ul class="nav nav-pills nav-justified">
 
<li   class="active"><a href="#login" data-toggle="pill" class="a1">Society</a></li>
 <li>
<a href="#admin" class="a1" data-toggle="pill">Admin</a>  </li>

</ul>
<br><br>
        
<div class="tab-content">
<div id="login" class="tab-pane fade in active">
<form method="post" action="userlogin.php">
<input id="login_username" class="form-control" type="text" placeholder="user" name="luser" style="padding: 20px;" required><br>
 <input id="login_password" class="form-control" type="password" placeholder="Password" name="lpass" style="padding: 20px;" required><br>
<center><input type="submit" class="btn btn-success " value="User Login" name="login" style="font-size: 15px; padding: 12px;"></center>
</form>
</div>

<div id="admin" class="tab-pane fade">
<form method="post" action="adminlogin.php">
<input id="login_username" class="form-control" type="text" placeholder="admin user" name="auser" style="padding: 20px;" required><br>
 <input id="login_password" class="form-control" type="password" placeholder="admin Password" name="apass" style="padding: 20px;" required><br>
<center><input type="submit" class="btn btn-success" value="Admin Login" name="alogin" style="font-size: 15px; padding: 12px;"></center>
</form>
</div>



</div>
</div>
</body>
</html>

