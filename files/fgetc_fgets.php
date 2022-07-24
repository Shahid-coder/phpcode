<?php
$fptr=fopen("C:/xampp/htdocs/shahidphp/files/index.txt","r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));
//reading a file line by line
/*while ($x=fgets($fptr)) {
	echo $x;
}
echo "end of the file has reached";*/
// echo fgetc($fptr);
/*//reading a file character by chartacrter
while ($x=fgetc($fptr)) {
	echo $x;
	//break;
}
echo "End of the file has reached";
*/
//write a program which reads the content of a file until it has been encountered
while ($x=fgetc($fptr)) {
	echo $x;
	if ($x==".") {
		break;
	}
}
fclose($fptr);
?>
