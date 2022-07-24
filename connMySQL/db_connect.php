<?php
//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="dbshahid";
//create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
//die if connection was not successful
if(!$conn){
	die("Sorry we failed to connect:".mysqli_connect_eror());
}
else{
	echo "connection was successful";
}