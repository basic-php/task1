<?php
//1) Convert String to Array
$str="php task4 for laravel path code for iraq";
$arr=explode(" ", $str);

//2) Print The array content
echo "<pre>";
print_r($arr);
echo "</pre>";

//3) shffle the string charcter
shuffle($arr);

foreach ($arr as $i)
{
    echo $i." ";
}
echo "<br><br>";
//4) upper case String
$up= implode(" ", $arr);
echo ucwords($str)."<br><br>";

//5) check the String
if(strlen($str)>6)
    echo "yes"."<br><br>";
else 
    echo "no";

//6) delete any tag from the String
$str2 ="i love <h1>php</h1> because it's 'easy'";

echo addslashes(strip_tags($str2));

?>