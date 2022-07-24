<?php
//include "connMySQL\db_connect.php";
require 'c:\xampp\htdocs\shahidphp\connMySQL\db_connect.php';
echo "this";
$sql="SELECT*FROM`phptrip`";
$result=mysqli_query($conn,$sql);
//find the no of records returned
$num=mysqli_num_rows($result);
echo $num;
echo "records found in the database<br>";
while ($row=mysqli_fetch_assoc($result)) {
	echo $row['sno'].".hello".$row['name']."WELCOME To".$row['dest']."<br>";
}
?>