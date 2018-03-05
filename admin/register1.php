<?php
require($_SERVER["DOCUMENT_ROOT"] . "/zealicon/connect.php");

$user=@mysqli_real_escape_string($conn, $_REQUEST['user']);
$email=@mysqli_real_escape_string($conn, $_REQUEST['email']);
$contact=@mysqli_real_escape_string($conn, $_REQUEST['contact']);
$year=@mysqli_real_escape_string($conn, $_REQUEST['year']);
$branch=@mysqli_real_escape_string($conn, $_REQUEST['branch']);
$course=@mysqli_real_escape_string($conn, $_REQUEST['course']);
$roll=@mysqli_real_escape_string($conn, $_REQUEST['roll']);
$query="insert into registration values('','$user','$email','$contact','$course','$branch','$year','$roll')";
$query_run=@mysqli_query($conn,$query);
?>