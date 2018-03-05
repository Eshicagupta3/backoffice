<?php
header("Content-Type: application/json; charset=UTF-8");
require '../connect.php';
if(@$_GET['category'])
	{	$c=$_GET['category'];

$query1="SELECT * FROM event where category='$c'";
$query_run1=mysqli_query($conn,$query1);
}
else{
	$query1="SELECT * FROM event";
$query_run1=mysqli_query($conn,$query1);
}
$json=array();
if(@mysqli_num_rows($query_run1)>0)
{
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json[]=$row;
}
$json= json_encode($json);
echo $json;
file_put_contents("event_show.json", $json);
}
mysqli_close($conn);

?>