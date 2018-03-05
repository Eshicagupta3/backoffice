<?php
session_start();
if(  $_SESSION['societyuser'])
{
require '../connect.php';
require 'user.php';
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
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <script>
function submitEvent(){

  if(form1.sevent.value == ''||form1.shortdesc.value == ''){
    alert(" please fill required fields");
    return;
  }
 var sevent=form1.sevent.value;
  var shortdesc=form1.shortdesc.value;
var longdesc=form1.longdesc.value;
 var edaatetime=form1.edaatetime.value;
  var contact1=form1.contact1.value;
   var contact2=form1.contact2.value;
    var ph1=form1.ph1.value;
     var ph2=form1.ph2.value;
      var prize1=form1.prize1.value;
       var prize2=form1.prize1.value;
       var cat=form1.cat.value;
       var  the_data='sevent='+sevent+'&shortdesc='+shortdesc+'&longdesc='+longdesc+'&edaatetime='+edaatetime+'&contact1='+contact2+'&ph1='+ph1+'&ph2='+ph2+'&prize1='+prize1+'&prize2='+prize2+'&cat='+cat;
       var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','event_add1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;
            alert('event has been added');
    }
  }

  xhttp.send(the_data);  
 
};
  </script>
  </head>
  <body><br>
    <div class="row">
  <div class="container">
    <div class="col-sm-5 col-xs-3"></div>
    <div class="col-sm-4 col-xs-6"><br>
      <center><h3>Add Society</h3><br></center>
   <form action="event_add1.php" class="form1 form-bordered" method="post" name="form1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="sevent" name="sevent" class="form-control" placeholder="Event Name" required>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="shortdesc" required>Short Description</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="longdesc" required>Long Description</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="datetime-local" name="edaatetime" class="form-control" required>
                                            
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div></div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="contact1" class="form-control" placeholder="Name of contact person 1" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="ph1" class="form-control" placeholder="Mob of contact person 1" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                            </div>
                    </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="contact2" class="form-control" placeholder="Name of contact person 2" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="ph2" class="form-control" placeholder="Mob of contact person 2" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                            </div>
                    </div>
                     <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="prize1" class="form-control" placeholder="1 prize amount" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
                                            </div>
                    </div>
                     <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="prize2" class="form-control" placeholder="2 prize amount" required>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
                                            </div>
                    </div>
                     <div class="form-group">
                                            <div class="input-group">
                                                <select id="category" name="cat" class="form-control">
                                                 <option>Coderz</option>
                                                  <option>Mechavoltz</option> 
                                                   <option>Robotiles</option> 
                                                   <option>Play it on</option> 
                                                   <option>Z-Wars</option>
                                                   <option>Coloralo</option>
                                                      
                                                </select>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" class="btn btn-sm btn-success"  style="font-size: 15px;" >Add Society</button>
                                        </div>
                                    </form>
                                    </div>
                          <div class="col-sm-3 col-xs-2"></div>
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
</body>
  </html>
