<?php

$str= "php task5 for laravel path code for iraq";

//1) 

$arr= str_word_count($str,1);

echo "1) postion of word 'laravel' in the string = ".array_search("laravel",$arr)."<br>";

//2) 

$pos= stripos($str,"COdE");

echo "2) postion of specifed char in string 'code' = ".$pos."<br>";

//3)

echo substr($str, $pos);

//4)

include ('function.php');

?>

