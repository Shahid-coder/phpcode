<?php
// $arr=array("this","that","what",);
// echo $arr[0];
// echo $arr[1];
//associative arrays
$favcol=array(
	"coder"=>"red",
	"shahid"=>"yellow");
foreach ($favcol as $key => $value) {
	echo "Favourit key of $key is $value <br>";
}
// echo $favcol["shahid"];
//multi-dimensional arrays 
//creating a two dimensional array
$multiDim=array(
array(2,8,12,28),
array(2,8,102,108),
array(2,8,108,82));
// echo var_dump($multiDim);
// echo $multiDim[0][0];
// for ($i=0; $i < count($multiDim); $i++) { 
// 	echo var_dump($multiDim[$i])."<br>";
// 	}
for ($i=0; $i < count($multiDim); $i++) { 
	for ($j=0; $j < count($multiDim[$i]); $j++) { 
			echo $multiDim[$i][$j]." ";
		}
		echo "<br>";
	}
?>