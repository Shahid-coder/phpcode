<?php
echo "while loops in php <br>";
//while loop
$i=0;
while ($i<=10) {
	echo $i;
	echo "<br>";
	$i++;
}
//for loop
for ($index=0; $index <=10; $index++) { 
	// for (initialization;condition;update)
	echo "The no. is $index <br>";
}
// do-while loop
/*
syntax:
do{
 some line of code to be executed here;
}while (condition);
*/
$i=0;
do{
	echo "$i <br>";
	$i++;
}while ($i<=10);
//for each loop
$arr=array("bananas","mango","bread","curry");
// for ($i=0; $i < count($arr); $i++) { 
// 	echo $arr[$i];
// 	echo "<br>";
// }
//better way to do this-for each loop
foreach ($arr as  $value) {
	echo "$value <br>";
}
?>