<?php /* 
_____________________________________________________
# task 4
1. تقوم بعمل تحويل للنص الى مصفوفة 
2. تقوم بطبع داخل المصفوفة 
3. تقوم بطباعة النص الذي اخرجته من المصفوفة على شكل عشوائي
4. تقوم بعمل اول حرف من النص الخارج من المصفوفة حرف كبير
5. تقوم بحساب عدد حروف النص اذا اكبر من 6 اطبع كلمة نعم و الا اطبع كلمة 
لا
6.تقوم بعمل نص ثاني وتحذف اي تاك فيه وتضيف سلاش
------------------------------------------------------*/
$str="I Love Php it is open soures ";
echo $str . "<br />";
                         /*-----------------  تقوم بعمل تحويل للنص الى 
مصفوفة ------------------------------*/
$str=explode(" ", $str);
                        /*-------------------. تقوم بطبع داخل المصفوفة 
-----------------------------------*/
echo "<pre>";
print_r($str);
echo "</pre>";
                      /*-----------------------تقوم بطباعة النص الذي 
اخرجته من المصفوفة على شكل عشوائي-------------*/

echo "----------------the value is randome <br /> ";
$rand=array_rand($str,7);
echo $str[$rand[0]]. "<br>";
echo $str[$rand[1]]. "<br>";
echo $str[$rand[2]]. "<br>";
echo $str[$rand[3]]. "<br>";
echo $str[$rand[4]]. "<br>";
echo $str[$rand[5]]. "<br>";
 
                /*---------------------تقوم بعمل اول حرف من النص الخارج 
من المصفوفة حرف كبير---------------*/
echo "------------------conver arr to string & ucfirst letter" . " <br 
/>" ;  
$str=implode(" ",$str);
$str=ucfirst($str);
echo $str . "<br />";
                       /*--------------------------تقوم بحساب عدد حروف 
النص اذا اكبر من 6 اطبع كلمة نعم و الا اطبع كلمة لا------*/
echo "--------------------count the leteter  of str if it less than  6 
then print yes or print no" ."<br />";
  
if(strlen ($str)> 6)
 echo "Yes :)" . " <br > <br />"; 
else
 echo "No :( <br>" ; 
                       /*---------------------------تقوم بعمل نص ثاني 
وتحذف اي تاك فيه وتضيف سلاش------------------------*/


$str2 = "I Love life :) &  <i>I</i>  love <b> php </b>  " ;
echo $str2 ."<br><br>";
echo "------------------------str2 after adding slashes and remove tags 
<br><br>";
echo addslashes(strip_tags($str2));








?>

