<?php
$servername="localhost";
$username="root";
$password="";
$database="dbshahid";
//create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
//die if connection was not successful
if(!$conn){
	die("sorry we failed to connect:".mysqli_connect_error());
}
else{
	echo "connection was successful <br>";
}
$sql="SELECT * FROM `phptrip` WHERE `dest`='China'";
$result=mysqlil_query($conn,$sql);
//find the no. of records returned
//usage of where clause to fetch data from thhe database
$num= mysqli_num_rows($result);
echo $num."records found in the database <br>";
$no=1;
if($num>0){
	while ($row=mysqli_fetch_assoc($result)) {
	echo $no.".hello".$row['name']."welcome to".$row['dest']."<br>";
	$no=$no+1;
	}
}
//usage of WHERE CLAUSE to update data 
$sql="UPDATE `phptrip` SET `name` = 'coderupdated' WHERE `sno` = 3";
$result=mysqli_query($conn,$sql);
echo var_dump($result);
$aff =mysqli_affected_rows($conn);
echo "<br>no. of affected rows:";
if ($result) {
	echo "we updated the record successfully";
}
else{
	echo "we could not update the record successfully";
}
?>