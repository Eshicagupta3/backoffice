<?php
session_start();
require 'connect.php';
?>
<?php 
$auser=@mysqli_real_escape_string($conn,@$_POST['auser']);
$apassword=@mysqli_real_escape_string($conn,@$_POST['apass']);
$query1="SELECT * FROM admin WHERE user ='$auser' AND BINARY password='$apassword'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
	  $_SESSION['adminuser1']=$auser;
	  setcookie('aauser',$auser,time()+60*60*7,"/");
	header('location: admin/register.php');	
}
else
{
	require 'home.html';
	echo "<script type='text/javascript'>
            alert('user name or password incorrect')
            </script>";
}
?>