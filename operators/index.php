<?php
/*
operators in php
1.Arithmetic operators
2.Assignment operators 
3.comparison operators 
4.logical operators
*/
$a=28;
$b=72;
//Arithmetic operator
echo "For a+b,the result is".($a+$b)."<br>";
echo "For a-b,the result is".($a-$b)."<br>";
echo "For a*b,the result is".($a*$b)."<br>";
echo "For a/b,the result is".($a/$b)."<br>";
echo "For a**b,the result is".($a**$b)."<br>";
echo "For a%b,the result is".($a%$b)."<br>";
//Assignment operator
$x=$b;
echo "For x,the result is".$x."<br>";
$b-=8;
echo "For b,the result is".$b."<br>";
$b*=8;
echo "For b,the result is".$b."<br>";
$b/=8;
echo "For b,the result is".$b."<br>";
$b%=8;
echo "For b,the result is".$b."<br>";
//comparison operators
$x=2;
$y=8;
echo "For x==y,the result is";
echo var_dump($x==$y);
echo "<br>";
echo "For x<=y,the result is";
echo var_dump($x<=$y);
echo "<br>";
echo "For x>=y,the result is";
echo var_dump($x>=$y);
echo "<br>";
echo "For x<>y,the result is";
echo var_dump($x<>$y);
echo "<br>";
//logical operators
$m=true;
$n=false;
echo "For m && y,the result is";
echo var_dump($m && $n);
echo "<br>";
echo "For m || y,the result is";
echo var_dump($m || $n);
echo "<br>";
echo "For !m,the result is";
echo var_dump($m);
echo "<br>";
echo "For !n,the result is";
echo var_dump($n);
echo "<br>";
?>
