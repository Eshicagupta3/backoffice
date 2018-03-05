<?php
session_start();
if(isset($_COOKIE['aauser']))
{
  $user=$_COOKIE['aauser'];
session_destroy();
setcookie('aauser','',time()-3600,"/");
header('location: ../home.php');
}
else{
	header('location: ../home.php');
}
?>