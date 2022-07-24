<?php
$servername="localhost";
$username="root";
$password="";
$database="dbshahid";
//create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
//die if connection was not successful
if(!$conn){
	die("connection was not successful:".mysqli_connect_error());
}
else{
	echo "connection was successful <br>";
}

$sql="SELECT *FROM `phptrip`";
$result=mysqli_query($conn,$sql);
//find the no. of records returned
$num= mysqli_num_rows($result);
echo $num;
echo "records found in the database <br>";
//display the rows returned by the sql query
if($num>0){
	$row=mysqli_fetch_assoc($result);
	echo var_dump($row)."<br>";
	$row=mysqli_fetch_assoc($result);
	echo var_dump($row)."<br>";
}
//we can fetch in a better way using the while loop
while ($row=mysqli_fetch_assoc($result)) {
		// echo var_dump($row)."<br>";
	echo $row['sno']."hello".$row['name']."welcome to".$row['dest']."<br>";
}
?>