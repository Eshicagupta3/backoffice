<?php
@session_start();
if($_SESSION['societyuser'])
{
  $s=$_SESSION['societyuser'];
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
  function myFunction() {
    document.getElementById("myP").readOnly = false;
      document.getElementById("myP1").readOnly = false;
      document.getElementById("myP2").readOnly = false;
      document.getElementById("show").style.display="block";

   // document.getElementById("myP").contentEditable = true;
   
}
	function submitCtc(){

  if(form1.sctcname.value == ''||form1.sctcroll.value == '' ||form1.sctcbranch.value == ''){
    alert(" please fill required fields");
    return;
  }
 var sctcname=form1.sctcname.value;
  var sctcroll=form1.sctcroll.value;
var sctcbranch=form1.sctcbranch.value;
var ctc=form2.ctce.value;
       var  the_data='sctcname='+sctcname+'&sctcroll='+sctcroll+'&sctcbranch='+sctcbranch;
       var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','ctc_add1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;
   if(ctc>0)
    alert("ctc already exist");
  
   else{
   
    alert("ctc has been added");
   }

    }
    
  }


  xhttp.send(the_data);  
};

function submitCtc1(){
alert("cvghj");
 var sctcname=form2.sctcid.value;
 var sctcname=form2.sctcname.value;
  var sctcroll=form2.sctcroll.value;
var sctcbranch=form2.sctcbranch.value;

       var  the_data='sctcname='+sctcname+'&sctcroll='+sctcroll+'&sctcbranch='+sctcbranch;
       var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','ctc_add2.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText; 

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
                                                <input type="text" id="sctcname" name="sctcname" class="form-control" placeholder="CTC NAME" required>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="sctcroll" name="sctcroll" class="form-control" placeholder="CTC ROLL NO" required>
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <div class="input-group">
                                                <select id="category" name="sctcbranch" class="form-control">
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
                                            <button class="btn btn-sm btn-success" onclick="submitCtc()" style="font-size: 15px;" >Add CTC</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
<div class="row">
                <div class="col-sm-3 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
              <div class="panel panel-default"> 
              <div class="panel-heading">Society Login Detail

 <button onclick="myFunction()" style="float: right;">Edit</button> 
  
</div> 
<form name="form2" method="post" action="ctc_add2.php">

              <table class="table"> 
              <thead> 
              <tr><th>id</th> <th>NAME</th> <th>ROLLNO</th> <th>BRANCH</th></tr> 
              </thead> 
              <tbody> 
              
                 
              <?php
              $i=0;
          $query = "select * from society where username='$s'";
          $results = @mysqli_query($conn,$query);
          $row = @mysqli_fetch_array($results);
            $sid=$row['id'];
             $query1 = "select * from ctc where sid='$sid'";
          $results1 = @mysqli_query($conn,$query1);
          while($row1 = @mysqli_fetch_array($results1)){
            if(@mysqli_num_rows($results)>0){
              $i++;
            ?>
           
            <tr> <th><input type='text' id='myPp' name="sctcid" style="border-width: 0" value='<?php echo $row1['id'] ?>' readonly></th><th><input type='text' id='myP' name="sctcname" style="border-width: 0" value='<?php echo $row1['name'] ?>' readonly></th>
              <td><input type='text' id='myP1' name="sctcroll" style="border-width: 0" value='<?php echo $row1['rollno'] ?>' readonly></td>
             <td> <input type='text' id='myP2' name="sctcbranch" style="border-width: 0" value='<?php echo $row1['branch'] ?>' readonly></td><td><input type="submit" value="Save" id="show" style="display: none; float: right;"></td></tr><?php
         }
       }
              ?>
 <input type="hidden" name="ctce" value="<?php echo $i?>">

              </tbody> 

              </table> 
</form>
              </div>
            </div>
            <div class="col-sm-1 col-xs-2"></div>
          </div>

</body>
</html>
<?php

	@mysqli_close($conn);
}
else{
    header('location: ../home.php');
}
?>