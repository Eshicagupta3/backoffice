<?php
header("Content-Type: application/json; charset=UTF-8");
   
require($_SERVER["DOCUMENT_ROOT"] . "/zealicon/connect.php");
$query1="SELECT * FROM registration";

$query_run1=mysqli_query($conn,$query1);
$json=array();
if(@mysqli_num_rows($query_run1)>0)
{
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json[]=$row;
}
$json= json_encode($json);
echo $json;
file_put_contents("showregister.json", $json);
}

?>