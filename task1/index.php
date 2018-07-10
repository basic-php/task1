<?php
$number1=18;
$number2=20;
$number3=11;
$bl = $number1 * $number2;
$mod= $bl % $number3;

if ($mod == 10) {

	echo "this number equle" . $mod;

}elseif ($mod >10) {

echo "this number mod gigger 10";
}else{

	echo "this number not equle" .$mod;
	
}


?>