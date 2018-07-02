<?php

function generateyear($year1,$year2){
    if($year1<2010 || $year2>2020){
        echo "true";
    }else{
        for($i=$year1;$i<=$year2;$i++){
            echo $i ."</br>";
        }
    }
}
//generateyear(2009,2021);
generateyear(2011,2019);

?>