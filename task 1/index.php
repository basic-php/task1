<?php
$var = 10*15*13;

 

$modFirst = $var%10;
$modSecond = $var%15;
$modThird = $var%13;

 if($modFirst==8 && $modSecond==8 && $modThird==8)
    echo "yes there mod is equal to 8";

    else if ($modFirst>8 && $modSecond>8 && $modThird>8)
    echo "there mod is greater than 8";

else echo "No";

 



?>