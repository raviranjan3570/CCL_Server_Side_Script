<?php

include 'DatabaseConfig.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
 
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$pis = $_POST['pis'];
$password = $_POST['password'];
 
$Sql_Query = "select * from salary where EMP_CODE = '$pis' and PASSWORD = '$password' ";

$result = mysqli_query($con, $Sql_Query);  
$json_array = array();  
while($row = mysqli_fetch_assoc($result)

 {  
   $json_array[] = $row;  
 }

echo json_encode(array('salary' => $json_array));

}

mysqli_close($con);

?>