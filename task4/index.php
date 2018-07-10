<?php

$strs ="php famose langauge " ; //طباعة نص
// echo $strs ."<br>";
 $count = str_word_count( $strs,1 );//تحويل النص الى مصفوفة
// echo  $count."<br>";
echo "<pre>";
print_r( $count); //طباعة المصفوفة       
echo "</pre>"; 
 
shuffle( $count );
echo "<pre>";
print_r( $count);  //طباعة عناصر المصفوفة بشكل عشوائي      
echo "</pre>"; 


$strss =implode(" ",$count);// اعادة تحويل المصفوفة الى نص 
echo  ucfirst($strss) . "<br>";// طباعة النص اول حرف من اول كلمة كبير

 $len =strlen($strs) . "<br>";// حساب طول النص 
// echo $len ;
 if($len > 6){
 echo "yes" ."<br>";//اذا كان طول النص اكبر من عشرة اطبع نعم
 }else {
 echo "no" ."<br>";//والا اطبع لا
 }

 $strs2 ="i love<b> php </b> so much .it's famous langouge";//كتابة نص جديد
 echo   $strs2  ."<br>";// طباعة النص

 $strip = strip_tags( $strs2);//حذف تاثير التاكات 
 echo  $strip  ."<br>";//  طباعة النص بدون تاثير التاكات

 $slashes = addslashes( $strip);// اضافة سلاش الى النص
 echo   $slashes  ."<br>";// طباعة النص بالسلاش



?>