<?php
echo "welcome to the stage where we ready to get connected to a database <br>";
//ways to connect to mysql Database
// 1.MySQLI extension
// 2.POD
//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="dbshahid";
//create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
//create a db
$sql="CREATE_DATABASE dbshahid";
$result=mysqli_query($conn,$sql);
/*//check for the database connection success
if($result){
	echo "The db was created successfully";
}
else{
	echo "The db was not created successfully because of this error-->".mysqli_error($conn);
}*/
/*
echo "The result is ";
echo var_dump($result);
echo "<br>";*/
//die if connection was not successful
if(!$conn){
	die("connection was not successful:".mysqli_connect_error());
}
else{
	echo "connection was successful";
}
// create a table in the db
$sql="CREATE TABLE `phptrip`(`sno` INT(6) NOT NULL AUTO_INCREMENT,`name` VARCHAR(12) NOT NULL,`dest` VARCHAR(6) NOT NULL,PRIMARY KEY(`SNO`))";
$result=mysqli_query($conn,$sql);
//variables to be inserted into the table
$name="vikrant";
$destination="russia";
//inserting data
$sql="INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( '$name', '$destination')";
//add a new trip to thhe Trip table in the database
if($result){
	echo "The record has been inserted successfully";
}
else{
	echo "The record was not inserted successfully because of this error-->".mysqli_error($conn);
}
//selecting and displaying data from mysql using mysqli
?>