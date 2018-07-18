<?php
echo "hello mr Issa Sofer, This is second task" . "<br>" . "<br>";

// فنكشن تاخذ قيمتين 
function checkTwoNumber($number1, $number2) 
{
    // هل القيمة اولى اقل من 2010 او قيمة الثانية اكير من 2020 
    if ($number1 < 2010 || $number2 > 2020) 
    {
        // اذا تحقق الشرط اطبع هذه الجملة
        echo "This condition is executed : number1 smaller from 2010 or number2 greater than 2020" . "<br>";
    }
    // والا نفذ هذا ال لوب يطبع من اول القيمة الى اخير قيمة
    else 
    {
        // ضع للمتغير آي قيمة وهي القسمة الاولى
        // بما انه متغير آي اقل او يساوي من قيمة الثانية اطبعها وانزل سطر
        for ($i = $number1; $i <= $number2; $i++) 
        {
            echo $i . "<br>";
        }
    }
}

// استدعاء فنكشن وتمرير قيمتين 
checkTwoNumber(1996, 2018);

// شرح استدعاء فنكشن مع اختبار الشروط او 

/*

    1-
    checkTwoNumber(2013, 2018);

    يقوم بطباعة هذه الارقام لان ما تحقق ولا شرط
    2013
    2014
    2015
    2016
    2017
    2018

    ----------------------

    2-
    checkTwoNumber(1996, 2018);
    هنا يتحقق اول شرط ويقوم بطبع هذه الرسالة 
    This condition is executed : number1 smaller from 2010 or number2 greater than 2020
*/
?>