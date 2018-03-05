<?php
@session_start();
if($_SESSION['societyuser'])
{
require '../connect.php';
require 'user.php';
?>
<html>
<head>
<title>ADD CTC</title>

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
	function submitVol(){

  if(form1.svolname.value == ''||form1.svolroll.value == '' ||form1.svolbranch.value == ''){
    alert(" please fill required fields");
    return;
  }
 var svolname=form1.svolname.value;
  var svolroll=form1.svolroll.value;
var svolbranch=form1.svolbranch.value;

       var  the_data='svolname='+svolname+'&svolroll='+svolroll+'&svolbranch='+svolbranch;
       var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','volunteer_add1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;
            alert('ctc has been added');
    }
  }

  xhttp.send(the_data);  
 
};
</script>
</head>
<body>

	<div class="row">
	<div class="container">
		<div class="col-sm-5 col-xs-3"></div>
		<div class="col-sm-4 col-xs-6"><br>
      <center><h3>Add CTC</h3><br></center>
   <form action="" class="form1 form-bordered" method="post" name="form1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="svolname" name="svolname" class="form-control" placeholder="volunteer name" required>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="svolroll" name="svolroll" class="form-control" placeholder="volunteer roll no" required>
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <div class="input-group">
                                                <select id="category" name="svolbranch" class="form-control">
                                                 <option>IT</option>
                                                  <option>ME</option> 
                                                   <option>CSE</option> 
                                                   <option>CE</option> 
                                                   <option>EE</option>
                                                   <option>EEE</option>
                                                     <option>EC</option>
                                                      <option>other</option>  
                                                </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-success" onclick="submitVol()" style="font-size: 15px;" >Add CTC</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


</body>
</html>
<?php
	mysqli_close($conn);
}
else{
    header('location: ../home.php');
}
?>