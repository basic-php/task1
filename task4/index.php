<?php

$str1="be patient the lessons you learn today will benefit you tomorrow";
//تم حساب عدد حروف النص 
$count=strlen($str1);
$arr=explode(" ",$str1);
echo "<pre>";
 print_r ($arr );
echo "</pre>";
//طباعة المصفوفه بشكل عشوائي
$ran=array_rand($arr,6);
echo $arr[$ran[0]]. "<br>";
echo $arr[$ran[1]]. "<br>";
echo $arr[$ran[2]]. "<br>";
echo $arr[$ran[3]]. "<br>";
echo $arr[$ran[4]]. "<br>";
echo $arr[$ran[5]]. "<br>";

//  اعادة المصفوفه الى نص ثم طباعة اول حروف من النص كابتل 
$str2=implode($arr);
echo "<br> ".ucfirst($str2)   ."<br>";
//مقارنه اذا كان عدد الحروف اكبر من 6 يطبع نعم اما اذا لا يطبع لا
if($count>6){
  echo "نعم";

}else {
  echo "لا";
}

// تم عمل نص اخر 
$str3="i '<br>' learn '<b>' php ";
$add=addslashes(strip_tags($str3));
echo($add);

?>