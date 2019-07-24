<?php

include 'DatabaseConfig.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
 
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$pis = $_POST['pis'];
$password = $_POST['password'];
$month = $_POST['month'];
$year = $_POST['year'];
 
$Sql_Query = "SELECT * FROM salary where EMP_CODE = '$pis' and PASSWORD = '$password' and MONTH = '$month' and YEAR = '$year' ";

$check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
if(isset($check)){
 
 echo "Data Matched";

}

else{

 echo "Invalid PIS_NO or Password Please Try Again";
}
 
}

else{
 echo "Check Again";

}

mysqli_close($con);

?>