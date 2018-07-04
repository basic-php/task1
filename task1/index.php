<?php
//var
$var1=10;
$var2=15;
$var3=13;
$rusalt=$var1 * $var2 % $var3;

if($rusalt==8){
echo "it is mod equal" .$rusalt;
} elseif($rusalt>8){
    echo "it is mod large then 8" .$rusalt;

}
else
{
    echo "the mod no equal 8 and no large then 8  "   ." it is mod equal  ".$rusalt;

}









?>