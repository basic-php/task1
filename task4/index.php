<?php

$str1="ilove php";
//تم تحويل النص الى مصفوفه وحفظها في المتغير $arr
$arr=str_split($str1);
// طباعة المصفوفه
echo "<pre>";
print_r($arr);
echo "</pre>";
//تم تحويل الحروف الى نص من جديد 
$str2=implode(" ",$arr);
//عرض النص بشكل حروف بشكل عشوائي يتغير كل ما يتم الصفحه
$str3=str_shuffle($str2);
echo $str3 ."<br>" ;
//تحويل اول حرف من المصفوفه الى حرف كبير
$str4=ucfirst($str2);
echo "<br>".  $str4  ."<br>";
//عمل عداد يحسب عدد حروف النص اذا كان عددهم اكبر من 6 يتم طباعة نعم اذا لا يتم طباعة كلمة لا
$count=str_word_count($str2);
if($count>6){
              echo "نعم" ."<br>";
            }else
            {   
              echo "لا" ."<br>";
            }

  $as=" i'love'php'much";
  $sk=addslashes($as);          
  echo  $sk;

?>