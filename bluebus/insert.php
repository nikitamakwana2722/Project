<?php
include "config.php";
$YourName=$_REQUEST['YourName'];
$PhoneNumber=$_REQUEST['PhoneNumber'];
$Email=$_REQUEST['Email'];
$Message=$_REQUEST['Message'];

$insert="INSERT INTO`data`(`YourName`,`PhoneNumber`,`Email`,`Message`)values('$YourName','$PhoneNumber','$Email','$Message')";
$result=mysqli_query($con,$insert);
if($result==true)
{
	header("location:contact.php");
}
else
{
	echo"not";
}
?>