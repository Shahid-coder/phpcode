<?php
//Start the session and get data
session_start();
session_unset();
session_destroy();
echo "<br> You have been loged out";
?>