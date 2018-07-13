<?php
$number1 = 10;
$number2 = 15;
$number3 = 13;

// اضرب رقمين واضع النتيجة في متغير
$mul = $number1  * $number2;


// المتغير باقي القسمة مع الرقم الثالث واضع النتيجة في متغير 
$mod = $mul % $number3;

// اذا مود يساوي ثمانية 
if ($mod == 8)

    // اطبع هذا الجملة مع قيمة مود

    echo "This is greater equal to 8".$mod;
// والا اذا مود اكبر من ثمانية
else if ($mod >8)

    // اطبع هذا الجملة مع قيمة مود مع رقم ثمانية
    echo "This is greater gratet than 8";

// والا
else
    // اطبع هذا الجملة  
    echo "This is another";
?>