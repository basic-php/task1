<?php
// تقوم بعمل مصفوفة 
$arr=array("Html","Css",1,"js","Html","php",8);
echo "<pre>";
print_r($arr);
echo "</pre>";

//تضيف عناصر في المصفوفة
 array_push($arr,"bootstrap",5,1);
echo "<pre>";
print_r($arr);
echo "</pre>";

//تقوم بعمل ترتيب للمصفوفة
sort($arr,SORT_REGULAR);
echo "<pre>";
print_r($arr);
echo "</pre>";

//تستخرج عدد معين من العناصر عشوائي 
 $rand=array_rand($arr,3);
echo $arr[$rand[0]]. "<br>";
echo $arr[$rand[1]]. "<br>";
echo $arr[$rand[2]]. "<br>";
 
// تطبع جميع المصفوفة بأستبعاد القيم المتكررة
$uniqe=array_unique($arr);

echo "<pre>";
print_r($uniqe);
echo "</pre>";
?>





