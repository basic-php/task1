<?php

$arr  = array("apple","apple","banana","orange","pineapple"); // initialization array
$arr[] = "lemon"; // add lemon to the array
$arr[] = "blueberry"; // add blueberry to the array 
sort($arr); // sort the array according to the value
$arr2 = array_rand($arr,3); // get random entry
echo "Random elements :<br>";
echo "<ul>";
foreach ($arr2 as $entry) { // print random elements
    echo "<li>";
    print($arr[$entry]);
    echo "</li>";
}    
echo"</ul>";
$arr = array_unique($arr); //delete all duplicated values
echo "All array element without duplicate element : <br>";
echo "<ul>";
foreach ($arr as $value) { // print all elements without duplicate
    echo "<li>";
    print($value);
    echo "</li>";
}    
echo"</ul>"; 

/*--------------------------------
-- This code made by ibrahimAyad--
--------------------------------*/










?>