<?php
$name="shahid is a good boy";
echo $name;
echo "<br>";
echo "The length of"."my string is".strlen($name);
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo strpos($name,"shahid");
echo "<br>";
echo str_replace("shahid", "rohan", $name);
echo "<br>";
echo str_repeat($name, 200);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy   ");
echo "<br>";
echo ltrim("   this is a good boy ");
echo "</pre>";
?>