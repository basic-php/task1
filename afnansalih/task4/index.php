<?php
$str="i love php so much and php is easy";
echo $str."<br>";
$arr=explode(" ",$str);
echo "<pre>";
print_r($arr);
echo "</br>";

$str=implode(" ",$arr);
echo($str)."<br>";

echo  ucfirst($str)."<br>"; 

shuffle( $arr );
echo "<pre>";
print_r( $arr);  
echo "</pre>"; 


$length=strlen($str);
echo $length."<br>";
if($length>6){
    echo"yes"."<br>";
}else{
    echo "no"."<br>";
}

$str2="i will go at <b> 6 </b> o'clock ";
$stripped=strip_tags($str2);
echo $stripped."<br>";
$skipped=addslashes($stripped);
echo $skipped;


?>
