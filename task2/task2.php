<?php
function year($d_num1,$d_num2)
{   //check condition 
  
    if(($d_num1<2010 ) || ($d_num2>2020))
       
   { echo " years between 2010 && 2020 " ; }
    
    else
        
    for($i=$d_num1;$i<=$d_num2;$i++)
    
         { echo $i . "<br/>";}
    
    
}
//call function 
year(2010,2020);




?>
