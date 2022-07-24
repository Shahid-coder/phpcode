<?php
function avgMarks($marksArr){
	$sum=0;
	$i=1;
	foreach ($marksArr as  $value) {
		$sum+=$value;
		$i++;
	}
	return $sum/$i;
}
function processMarks($marksArr){
	$sum=0;
	foreach ($marksArr as  $value) {
		$sum+=$value;
	}
	return $sum;
}
$rohan=[22,12,28,82,98,102];
$sumMarks=processMarks($rohan);
$sumMarks=avgMarks($rohan);
echo "Total marks scored by rohan out of 600 is$sumMarks <br>";
$shahid=[98,92,102,108,102,92];
$sumMarksShahid=processMarks($shahid);
$sumMarksShahid=avgMarks($shahid);
echo "Total marks scored by shahid out of 600 is $sumMarksShahid <br>";
?>