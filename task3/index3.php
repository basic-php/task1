<?php
//1) & 2) define Array and add value
$arr=array('html','css','javascript','html','bootstrap','jquare','php','sql','css');

//3) Sort the Array and print Array
sort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

//4) print some rand Value
$rand= array_rand($arr,4);

for ($i=0;$i<count($rand);$i++)
    echo $arr[$rand[$i]]."<br>";

//5) delete the repeated value and print the new array
$unique= array_unique($arr);
    
    echo "<pre>";
    print_r($unique);
    echo "</pre>";
?>