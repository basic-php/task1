<?php
echo "string1 value :<br><br>";
 $str = "to be or not to be";
 echo $str."<br><br>";
 $arr = str_word_count($str,1);
 echo "The string as array .";
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 echo "shuffled array";
 shuffle($arr);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 echo "The shuffled as string with upper case first<br><br>";
foreach ($arr as $value) {
    echo  ucfirst($value)." ";
}
echo"<br>";
echo "Does the letters count greater than 6  : ";
if(strlen($str) >6 ) echo"Yes<br>"; else echo "No<br>";
echo "-------------------------------------<br><br>
str2 value equal  : <br><br>";
$str2 = "I've too <b>many</b> sayab's books.";
echo $str2 ."<br><br>";
echo "str2 after adding slashes and remove tags<br><br>";
echo addslashes(strip_tags($str2));
?>