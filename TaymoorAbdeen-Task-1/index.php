<?php
$number1 = 10;
$number2 = 15;
$number3 = 13;

$mul = $number1  * $number2 * $number3;

$mod = $mul % $number1;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number2;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number3;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";



/*
اولا ناخذ مضروب العدد ونضعه في دائم اسمه
mulثم ناخذ كل عدد ونستخرج باقي الفسمة ونضع النتيجة
mod
ثم نقارن
هل تساوي رقم 8 مع باقي القسمة الذي مخزون في
mod
اذا نعم: اطبع نص
و اذا كان اكبر من 8
اذا نعم: اطبع نص مع رقم دون
والا
اطبع نصx
*/
?>