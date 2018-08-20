<?php
$str = "Hi my name is mustafa naser and iam a student."; // created a string
$pos = strpos($str, "mustafa"); // find the index of the word "mustafa
echo $pos ."<br>";

$num = substr_count($str,'na',0); // find the number of the word "is"
echo $num ."<br>";

echo substr($str, $num) ."<br>"; // display a substring from the index of $num


$myfile = @fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt")) ."<br>";
fclose($myfile);



?>
