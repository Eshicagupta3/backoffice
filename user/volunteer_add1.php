<?php
session_start();
require("../connect.php");
$user=$_SESSION['societyuser'];
$svolname=@mysqli_real_escape_string($conn, $_REQUEST['svolname']);
$svolroll=@mysqli_real_escape_string($conn, $_REQUEST['svolroll']);
$svolbranch=@mysqli_real_escape_string($conn, $_REQUEST['svolbranch']);

	$query1 = "select id from society where username='$user'";
					$res = @mysqli_query($conn,$query1);
					$row = @mysqli_fetch_array($res);
						$sid=$row['id'];

$query="insert into volunteer values('','$sid','$svolname','$svolroll','$svolbranch')";
$query_run=@mysqli_query($conn,$query);

?>