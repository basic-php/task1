<?php
// first requirement
$st = "this is@ a beautiful@ day";
$arr = explode(" ",$st);
print_r($arr);
print "<br>";
 

// second

$key = array_rand($arr,1);
 print_r($arr[$key]);
 print "<br>";


 //third
echo ucfirst(array_shift($arr)).'<br>';

// fourth
foreach($arr as $word)
{
 if(strlen($word)>6)
 echo "YES <br>";

 else echo "NO <br>";
}

//fifth
$tagLess = array();
foreach($arr as $word)
{ 
    $tagLess[] = str_replace("@","/",$word);
}
print_r($tagLess);

?>