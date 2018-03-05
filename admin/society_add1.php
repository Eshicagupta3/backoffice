<?php
session_start();
require 'admin.php';
if(  $_SESSION['adminuser1'])
{
require("../connect.php");

$susername=@mysqli_real_escape_string($conn, $_REQUEST['susername']);
$spassword=@mysqli_real_escape_string($conn, $_REQUEST['spassword']);
$query="insert into society(username,password) values('$susername','$spassword')";
echo $query;
$query_run=mysqli_query($conn,$query);
}
?>