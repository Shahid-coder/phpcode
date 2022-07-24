<?php
//writing to a file in php
$fptr=fopen("C:/xampp/htdocs/shahidphp/files/index.txt2","w");
fwrite($fptr,"This is the best file on this planet. Please dont argue with me on this one.");
fwrite($fptr,"This is another content.");
//appending to a file in php
$fptr=fopen("C:/xampp/htdocs/shahidphp/files/index.txt2","a");
fwrite($fptr,"This is being appended to a file");
fclose($fptr);
?>