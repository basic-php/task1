<?php

function datee($d1,$d2)
{
    
     
    // comparing both values 
    if($d1<2010 || $d2>2020)
     echo "condition is met <br>";
     
    else {
       
       for($i = $d1;$i<=$d2;$i++)
         echo $i."<br>";


         }

 

}
// now we call the function
  datee(2010,2055);
  datee(2015,2019);


?>