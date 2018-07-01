
 <?php

function Years($date1,$date2)  {

 if($date1<2010 || $date2>2020 ){// الشرط الاول اذا كان  التاريخ الاول اقل من 2010 او التاريخ الثاني اكبر من 2020
  
   return "date1 = 2005<2010 or  date2 = 2021>2020 ";

 }else
   
for ($i=$date1; $i<=$date2 ; $i++) { // والا اذا لم يتحقق الشرط الاول يتحقق الثاني وهو عدد السنوات من 2010 الى 2020
    echo $i ."<br>";
}  
 

}
echo "<h2> 1- condition1 is vaild  if date1<2010 or date2>2020  </h2>";//عنوان توضيحي للشرط الاول
echo Years(2005,2021) ."<br>"; // ناتج الشرط الاول

echo "<br>";
echo "<br>";

echo " <h2> 2- condition2  is vaild if condition1 is not true </h2>"; //عنوان توضيحي للشرط الثاني
echo " <h3> the yeares from 2010 to 2020</h>"; 
echo "<br>"; 
echo Years(2010,2020) ."<br>";// ناتج الشرط الثاني

?> 
