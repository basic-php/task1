<?php
$number1 = 10;
$number2 = 15;
$number3 = 13;

$mul = $number1  * $number2 * $number3;

$mod = $mul % $number1;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number2;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number3;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";



/*
«жб« д«ќ– г÷—ж» «бЏѕѕ жд÷Џе Ён г џн— «”ге  
mul
Ћг д«ќ– яб Џѕѕ жд” ќ—ћ »«ён «бЁ”г… жд÷Џ «бд нћ… Ён г џн— «”ге 
mod
Ћг дё«—д 
еб  ”«жн —ёг 8 гЏ »«ён «бё”г… «б–н гќ“жд Ён 
mod
«–« дЏг : «Ў»Џ д’
ж«б« «–« я«д «я»— гд 8 
«–« дЏг : «Ў»Џ д’ гЏ —ёг Ћг«дн…
ж«б« 
«Ў»Џ д’
*/

?>