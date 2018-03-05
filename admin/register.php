<?php
session_start();
require 'admin.php';
if(  $_SESSION['adminuser1'])
{}
else{
    header('location: ../home.php');
}
?>
<html>
<head>
<title>chat</title>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/zealicon/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/zealicon/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/zealicon/assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="/zealicon/assets/img/l1.png" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/zealicon/assets/js/bootstrap.min.js"></script>
<script>

  function submitRegister() {
  if (form1.rusername.value == ''||form1.remail.value == ''||form1.rcontact.value == ''||form1.rroll.value == ''){
    alert(" please fill required fields");
    return;
  }
    var user=form1.rusername.value;
  var email=form1.remail.value;
 var contact=form1.rcontact.value;
 var course=form1.rcourse.value;
 var branch=form1.rbranch.value;
 var year=form1.ryear.value;
 var roll=form1.rroll.value;

 
  var  the_data='user='+user+'&email='+email+'&contact='+contact+'&course='+course+'&branch='+branch+'&year='+year+'&roll='+roll;
  var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','register1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
      document.getElementById('').innerHTML = xhttp.responseText;
    }
  }

  xhttp.send(the_data); 
}
</script>  
</head>
<body><br>
<div class="row">
	<div class="container">
		<div class="col-sm-5 col-xs-3"></div>
		<div class="col-sm-4 col-xs-6"><br>
      <center><h3>Registration</h3><br></center>
		 <form action="" class="form1 form-bordered" method="post" name="form1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="rusername" name="rusername" class="form-control" placeholder="Username" required>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="email" id="remail" name="remail" class="form-control" placeholder="Email" required>
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="rcontact" name="rcontact" class="form-control" placeholder="contact" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="rcourse" name="rcourse" class="form-control">
                                                 <option>Btech</option>
                                                  <option>MBA</option> 
                                                   <option>Mtech</option> 
                                                </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="rbranch" name="rbranch" class="form-control">
                                                 <option>EC</option>
                                                  <option>IT</option> 
                                                   <option>ME</option> 
                                                   <option>CS</option> 
                                                   <option>CE</option>
                                                   <option>EEE</option>
                                                   <option>EE</option>
                                                   <option>other</option>    
                                                </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="ryear" name="ryear" class="form-control">
                                                 <option>1<sup>st</sup></option>
                                                  <option>2<sup>nd</sup></option> 
                                                   <option>3<sup>rd</sup></option> 
                                                   <option>4<sup>th</sup></option>     
                                                </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="rroll" name="rroll" class="form-control" placeholder="rollno" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-success" onclick="submitRegister()" style="font-size: 15px;" >Register</button>
                                        </div>
                                    </form>
                                </div>
                          <div class="col-sm-3 col-xs-2"></div>
                          </div>
                          </div>      
</body>
</html>