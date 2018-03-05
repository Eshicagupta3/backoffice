<?php
session_start();
if(  $_SESSION['adminuser1'])
{
require '../connect.php';
require 'admin.php';
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
  if (form1.susername.value == ''||form1.spassword.value == ''){
    alert(" please fill required fields");
    return;
  }
    var susername=form1.susername.value;
  var spassword=form1.spassword.value;

 
  var  the_data='susername='+susername+'&spassword='+spassword;
  var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','society_add1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;
            alert('Society has been added');
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
      <center><h3>Add Society</h3><br></center>
		 <form action="" class="form1 form-bordered" method="post" name="form1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="susername" name="susername" class="form-control" placeholder="Username" required>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" id="spassword" name="spassword" class="form-control" placeholder="Password" required>
                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-success" onclick="submitRegister()" style="font-size: 15px;" >Add Society</button>
                                        </div>
                                    </form>
                                </div>
                          <div class="col-sm-3 col-xs-2"></div>
                          </div></div>
                          <br><hr><br>
						  <div class="row">
                <div class="col-sm-3 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
						  <div class="panel panel-default"> 
						  <div class="panel-heading">Society Login Detail</div> 
						  <table class="table"> 
						  <thead> 
						  <tr> <th>ID</th> <th>Username</th> <th>Password</th></tr> 
						  </thead> 
						  <tbody> 
						  <?php
					$query = "select * from society order by id desc";
					$results = @mysqli_query($conn,$query);
					while ($row = @mysqli_fetch_array($results))
					{
						echo '<tr> <th>'.$row['id'].'</th> <td>'.$row['username'].'</td> <td>'.$row['password'].'</td> </tr>';
					}
						  ?>
						  </tbody> 
						  </table> 
						  </div>
            </div>
            <div class="col-sm-1 col-xs-2"></div>
          </div>

						  
                            
</body>
</html>
<?php
}
else{
    header('location: ../home.php');
}
@mysqli_close($conn);
?>