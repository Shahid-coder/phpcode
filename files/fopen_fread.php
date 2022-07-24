<?php
$fptr=fopen("C:/xampp/htdocs/shahidphp/files/index.txt","r");
// echo var_dump($fptr);
if(!$fptr){
	die("unable to open this file.Please enter a valid filename");
}
$content=fread($fptr,filesize("C:/xampp/htdocs/shahidphp/files/index.txt"));
echo $content;
fclose($fptr);
?>