<?php
session_start();
if(  $_SESSION['societyuser'])
{
require("../connect.php");
$user=$_SESSION['societyuser'];
$sevent=@mysqli_real_escape_string($conn, $_REQUEST['sevent']);
$shortdesc=@mysqli_real_escape_string($conn, $_REQUEST['shortdesc']);
$longdesc=@mysqli_real_escape_string($conn, $_REQUEST['longdesc']);
$edaatetime=@mysqli_real_escape_string($conn, $_REQUEST['edaatetime']);
$contact1=@mysqli_real_escape_string($conn, $_REQUEST['contact1']);
$contact2=@mysqli_real_escape_string($conn, $_REQUEST['contact2']);
$ph1=@mysqli_real_escape_string($conn, $_REQUEST['ph1']);
$ph2=@mysqli_real_escape_string($conn, $_REQUEST['ph2']);
$prize2=@mysqli_real_escape_string($conn, $_REQUEST['prize1']);
$prize1=@mysqli_real_escape_string($conn, $_REQUEST['prize1']);
$cat=@mysqli_real_escape_string($conn, $_REQUEST['cat']);
	$query1 = "select id from society where username='$user'";
					$res = @mysqli_query($conn,$query1);
					$row = @mysqli_fetch_array($res);
						$sid=$row['id'];
echo $sid."vhb";
$query="insert into event values('','$sid','$sevent','$shortdesc','$longdesc','$edaatetime','$contact1','$ph1','$contact2','$ph2','$prize1','$prize2','$cat','')";
$query_run=@mysqli_query($conn,$query);
if($query_run)
{

}
}
?>