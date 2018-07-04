


<?php
/*
use function dont ruturn  value
function echo value 
using 2 pramter year1 & year2 


*/






Function year($year1,$year2){

    if($year1<2010  || $year2>2020 )
    {
       echo " year1 equal  ". $year1  ."  " . "and year2 equal " . $year2 ; 
    }
    else{
        for($i=$year1 ;$i<=$year2;$i++)
        {
          echo $i . "<br>";  
        }
    }
}


year(2018,2022);






















?>