
<?php

 $arr=array("afnan","mohammed","suha","ali","khaldun","salih","ali");
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 $arr[]="rayan";
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 sort($arr);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 $randomkey=array_rand($arr,3);
 echo $arr[$randomkey[0]],"<br>";
 echo $arr[$randomkey[1]],"<br>";
 echo $arr[$randomkey[2]],"<br>";

 $unique=array_unique($arr);
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
?>

