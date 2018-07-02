<?php

$num1=13;
$num2=15;
$num3=10;

$mul=$num1 * $num2 * $num3;
 echo $mul . "<br>";

 $div=($num1 % $num2 % $num3);
 echo $div . "<br>";

 if($div==8){
     echo"the result is equal  8";
 }else if($div>8){
     echo "the result is larger than 8";
 }else{
     echo "the result not equal & greater than 8";
 }

?>