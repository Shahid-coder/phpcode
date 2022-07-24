<?php
//what is a session?
//used to manage informmation across different pages
session_start();
$_SESSION['username']="shahid";
$_SESSION['favcat']="Books";
echo "we have saved your session";
?>