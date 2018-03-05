<?php
session_start();
if(isset($_COOKIE['societyuser']))
{
  $luser=$_COOKIE['societyuser'];
session_destroy();
setcookie('luser','',time()-3600,"/");
header('location: ../home.php');
}
else{
session_destroy();
	header('location: ../home.php');
}
?>