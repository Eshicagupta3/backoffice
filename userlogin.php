<?php
session_start();
require 'connect.php';
?>
<?php 
$luser=@mysqli_real_escape_string($conn, $_REQUEST['luser']);
$lpass=@mysqli_real_escape_string($conn, $_REQUEST['lpass']);
$query="SELECT * FROM society WHERE username ='$luser' AND  BINARY password='$lpass'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{
	  $_SESSION['societyuser']=$luser;
	  setcookie('societyuser',$luser,time()+60*60*7,"/");
	header('location: user/event_add.php');	
}
else
{
	require 'home.php';
	echo "<script type='text/javascript'>
            alert('user name or password incorrect')
            </script>";
}
?>