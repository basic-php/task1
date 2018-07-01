<?php
$num1 = 13; // variable number 1
$num2 = 15; // variable number 2
$num3 = 10; // variable number 3

$res = $num1 * $num2 * $num3 ;  // variable results the multiplcation of the above var's
$mod = $res % 8;  // variable gives mod of the (reslt mod 8)

if ($mod == 8) { 
     // if the mod equal 8
    echo "The result of mod is = " . $mod ;
}else if ($mod > 8) {
    // if the mod larger than 8
    echo "just 8 "  ;
}else { 
    // else do this
    echo "none of above happend and reslt is = " . $mod ;
}
?>
