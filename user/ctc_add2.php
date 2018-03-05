<?php
session_start();
require("../connect.php");
$sctcid=@mysqli_real_escape_string($conn, $_REQUEST['sctcid']);
$sctcname=@mysqli_real_escape_string($conn, $_REQUEST['sctcname']);
$sctcroll=@mysqli_real_escape_string($conn, $_REQUEST['sctcroll']);
$sctcbranch=@mysqli_real_escape_string($conn, $_REQUEST['sctcbranch']);
echo $sctcid;
$query="UPDATE ctc SET name='$sctcname',rollno='$sctcroll', branch='$sctcbranch' WHERE id='$sctcid'";
$query_run=@mysqli_query($conn,$query);
header("location:ctc_add.php");

?>