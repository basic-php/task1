<?php
//define var
$num1=10;
$num2=15;
$num3=13;
//arithmeetic operation
$resault=$num1*$num2;
$mod=$resault%$num3;
//chek The mod
if($mod==8)
    {
        echo "The number is equal to :8";
    }
elseif($mod>8)
    {
        echo "The number is bigger than to :8";
    }
else
    {
        echo "The number is smaller than to :8";
    }
?>