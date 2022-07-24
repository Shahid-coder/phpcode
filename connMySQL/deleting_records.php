<?php
$servername="localhost";
$username="root";
$password="";
$database="dbshahid";
//create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("sorry we failed to connect:".mysqli_connect_error());
}
else{
	echo "connection was successful <br>";
}

$sql="DELETE FROM `phptrip` WHERE `dest` = 'japan'";
$result=mysqli_query($conn,$sql);
$aff =mysqli_affected_rows($conn);
echo "<br>no. of affected rows:$aff<br>";
if($result){
	echo "Delete successfully";
}
else{
	$err=mysqli_error($conn);
	echo "Not delete successfully due to this error -->$err";
}
?>