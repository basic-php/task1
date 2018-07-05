<?php
$lang =array("html","css","js","bootstrab","php","css");

$lang[] = "angular" ;//اضافة عنصر
$lang[] = "ionic" ;//اضافة عنصر

echo "<pre>";
 print_r( $lang); //طباعة المصفوفة بعد اضافة العناصر   
 echo "</pre>";

 sort($lang);// ترتيب تصاعدي من الاول الى الاخر
 echo "<pre>";
 print_r( $lang); //  طباعة المصفوفة بعد الترتيب    
 echo "</pre>";

 rsort($lang);//ترتيب عكسي تنازلي من الاخر الى الاول 
 echo "<pre>";
 print_r( $lang); //طباعة المصفوفة بعد الترتيب      
 echo "</pre>";

  $radomkey =array_rand($lang,3);//طباعة عناصر عشوائية
  echo $lang[$radomkey[0]] ."<br>";
  echo $lang[$radomkey[1]] ."<br>";
  echo $lang[$radomkey[2]] ."<br>";

  $unique =array_unique($lang);//استبعاد العناصر المتكررة
  echo "<pre>";
   print_r( $unique); //طباعة المصفوفة بعد استبعاد العناصر المتكررة    
   echo "</pre>";
?>