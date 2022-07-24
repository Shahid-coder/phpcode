<?php
//Start the session and get data
session_start();
if(isset($_SESSION['username'])){
	echo "welcome".$_SESSION['username'];
echo "<br> your favourite category is".$_SESSION['favcat'];
}
else{
	echo "Please login to continue";
}
?>