<?php
 /*-----------------------*
  -- solve the first task --
  --   by : ibrahimAyad   --
  *   --------------------*/

 $num1 = 10; // store 10 in $num1
 $num2 = 15; // store 15 in $num2
 $num3 = 13; // store 13 in $num3
 $mul = $num1 * $num2; //  10  * 15  = 150
 $mod = $mul % $num3;  //  150 mod 13 = 7
 if($mod == 8)   // $mod equal 7 so the result of $mod  == 8  is false. 
  {
    echo  "the mod is equal " . $mod ; // print this if mod result equal  8.
  }
 else if($mod > 8 )   // $mod equal 7 so the result of $mod  > 8  is false. 
  {
    echo  "the mod is equal " . $mod . " and it is greater than  8";  // print if mod result greater than 8.
  }
 else   // $mod equal 7 so the result of $mod  < 8  is true. 
  {
    echo  "the mod is equal " . $mod . " and it is smaller than  8";  // if mod result less than 8.
  }

?>