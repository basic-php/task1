

  <?php
 
  
   $num1 = 13;//الرقم الاول
  
   $num2 =15;// الرقم الثاني
  
   $num3 = 10; // الرقم الثالث
  
   $num4 = $num1* $num2 ;// ضرب الاول بالثاني
   echo $num4;// طبع حاصل الضرب
  
   echo "<br>";
  
   $num5 = $num4 % $num3;  // المتبقي من القسمة بين حاصل ضرب الرقمين الاول والثاني على الرقم الثالث
   echo  $num5;// طبع المتبقي من القسمة

   echo "<br>";
   
   if (  $num5 == 8 ) {//اذا المتبقي من القسمة يساوي 8
    echo "the remaining  number equel"." $num5";// اطبع الرقم المتبقي من القسمة يساوي 8

   }elseif (  $num5 > 8) {//والا اذا كان المتبقي من القسمة اكبر من8

    echo "the remaining  number greater than 8";//اطبع الرقم المتبقي اكبر من 8

   }else {//والا 

    echo "the remaining  number is random";//اطبع الرقم المتبقي عشوائي
       
   }
 

 ?>  


