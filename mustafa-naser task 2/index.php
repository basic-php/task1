<?php

function f1($var1, $var2){
    if ($var1 < 2010 || $var2 > 2020 ) {
        echo " less than 2010 or larger than 2020";
    }else {
        echo " between 2010 and 2020";
    }
}



 f1("2010","2020");

?>
