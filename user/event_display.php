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
         var j=document.querySelectorAll("edit1").value;
  j=parseInt(j);
   alert(j);
var elms = document.querySelectorAll("#myP");
for(var i = j; i < j+1; i++) 
  elms[i].readOnly = false;


      document.getElementById("show").style.display="block";
    }

</script> 
</head>
<body>

	
<div class="row">
                <div class="col-sm-3 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">

          
              
              <?php
              $i=0;
          $query = "select * from society where username='$s'";
          $results = @mysqli_query($conn,$query);
          $row = @mysqli_fetch_array($results);
            $sid=$row['id'];
             $query1 = "select * from event where sid='$sid'";
          $results1 = @mysqli_query($conn,$query1);
           while($row1 = @mysqli_fetch_array($results1))
          {
            
            ?>
            

             <div class="panel panel-default"> 
              <div class="panel-heading">Society event details
                 
            </div> 
            <button onclick="myFunction()" style="float: right;">Edit</button>
            <form name="form2" method="post">
             <table class="table" style="table-layout: fixed;">
               
           <?php
          $i++;
           
            ?> <input type="submit" value="Save" id="show" style=" float: right; display: none;">
              <tr><b>Short Desc</b></tr><tr> <textarea id="myS" name="eid" style="border-width: 0; width: 90%;"  readonly><?php echo $row1['short_desc'] ?></textarea></tr>
               <hr><tr><b>Long Desc   </b></tr><tr><textarea id="myS1" name="eid" style="border-width: 0; width: 90%;"  readonly><?php echo $row1['long_desc'] ?></textarea></tr>
           <tr> <th>ID</th> <th>name</th> <th>date time</th><th></th><th>contact1</th><th>mob</th><th>contact2</th><th>mob2</th><th>prize1</th><th>prize2</th><th>category</th></tr> 
           <tr> <th><input type='text' id="myP" name="eid" style="border-width: 0" value='<?php echo $row1['id'] ?>' readonly></th> <td><input type='text' id="myP1" name="eid" style="border-width: 0" value='<?php echo $row1['name'] ?>' readonly></td>
  
               <td><input type='text' id="myP2" name="eid" style="border-width: 0" value='<?php echo $row1['datetime'] ?>' readonly></td> <td></td><td><input type='text' id="myP3" name="eid" style="border-width: 0" value='<?php echo $row1['contact1'] ?>' readonly></td> <td><input type='text' id="myP4" name="eid" style="border-width: 0" value='<?php echo $row1['mob1'] ?>' readonly></td>
                <td><input type='text' id="myP5" name="eid" style="border-width: 0" value='<?php echo $row1['contact2'] ?>' readonly></td> 
                <td><input type='text' id="myP6" name="eid" style="border-width: 0" value='<?php echo $row1['mob2'] ?>' readonly></td> 
                <td><input type='text' id="myP7" name="eid" style="border-width: 0" value='<?php echo $row1['prize1'] ?>' readonly></td> <td><input type='text' id="myP8" name="eid" style="border-width: 0" value='<?php echo $row1['prize2'] ?>' readonly></td> <td><input type='text' id="myP9" name="eid" style="border-width: 0" value='<?php echo $row1['category'] ?>' readonly></td>
           </tr>
           <input type='hidden' value='$i' name='edit1' id='edit1' class='edit1'>
            <?php
             echo "";
           // echo '<tr> <th>'.$row1['id'].'</th> <td>'.$row1['name'].'</td><td>'.$row1['datetime'].'</td> <td>'.$row1['contact1'].'</td> <td>'.$row1['mob1'].'</td> <td>'.$row1['contact2'].'</td> <td>'.$row1['mob2'].'</td> <td>'.$row1['prize1'].'</td> <td>'.$row1['prize2'].'</td> <td>'.$row1['category'].'</td>  </tr>';
            ?>
          </table>
        </form>
        </div>
       <b> <hr color="red" style="border-width: 2px; border-color: black;"></b>
  
          <?php
         
         }
              ?>
           
          
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