<?php

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $pis = '9080908';
 $email = 'raviranjan3570@gmail.com';
 $password = 'Ravi@0908';

 $CheckSQL = " SELECT * FROM salary WHERE EMP_CODE = '$pis' AND EMAIL='$email' ";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'User Already Registered';

 }

else{ 

$Sql_Query = " UPDATE salary SET EMAIL = '$email' WHERE EMP_CODE = '$pis' ";

$Sql_Query_Password = " UPDATE salary SET PASSWORD = '$password' WHERE EMP_CODE = '$pis' ";

 if(mysqli_query($con,$Sql_Query) && mysqli_query($con,$Sql_Query_Password))

{

 echo 'Registered Successfully';

}
else

{

 echo 'Something went wrong';

}
 
}
 
 mysqli_close($con);

?>