<?php
session_start();
require("../connect.php");
$user=$_SESSION['societyuser'];
$sctcname=@mysqli_real_escape_string($conn, $_REQUEST['sctcname']);
$sctcroll=@mysqli_real_escape_string($conn, $_REQUEST['sctcroll']);
$sctcbranch=@mysqli_real_escape_string($conn, $_REQUEST['sctcbranch']);

	$query1 = "select id from society where username='$user'";
					$res = @mysqli_query($conn,$query1);
					$row = @mysqli_fetch_array($res);
						$sid=$row['id'];
$query2 = "select * from ctc where  sid='$sid'";
  $results = @mysqli_query($conn,$query2);
         if(@mysqli_num_rows($results)==0){
         	$_SESSION['ctc']="yes";
$query="insert into ctc values('','$sid','$sctcname','$sctcroll','$sctcbranch')";
$query_run=@mysqli_query($conn,$query);

}
else{
	
}
?>