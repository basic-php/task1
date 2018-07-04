<?php
$array=array(
     "a",
     "u",
     "h",
     "k"
);
/*add item to array
array push  
تضيف العناصر في نهاية المصفوفه
array unshift
تضيف العناصر الجديده في بداية المصفوفه
*/
array_push($array,"t","e","R");
array_unshift($array,"q",9,8,6);
/*
index array use sort array
*/
sort($array,SORT_REGULAR);
 /*
 array rand
 */
$randKey=array_rand($array,3);
echo "<h2>". "randkey" . "</h2>";
echo $array [$randKey[0]]  ."<br>";
echo $array [$randKey[1]]  . "<br>";
echo $array [$randKey[2]]  ."<br>";

/*
array unque 
 */

$uniq=array_unique($array);
echo "<pre>";
print_r($uniq);
echo "</pre>";




