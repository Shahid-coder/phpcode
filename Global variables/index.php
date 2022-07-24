<?php
$x=22;//global variables
$y=28;
function printValue(){
	// $x=28;//local variable
	global $x,$y;//give me the access of local variable
	echo "The value of your variable is x is $x and y is $y";
}
echo $x;
printvalue();
echo var_dump($GLOBALS);
?>