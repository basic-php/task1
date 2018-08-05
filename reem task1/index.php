<?php
/*

Define three variables...
multiplaction $num1*$num2
 and Show the output of the rest of the section $num5
*/
$num1=13;       
$num2=15;
$num3=10;
//operators
$num4=$num1*$num2;   //$num1*$num2=195
$num5=$num4%$num3;   //Output of the rest of the section ....//195%10=5


echo $num5;          //print 5
echo "<br>";
echo "<br>";         


if ($num5==8){   //Verification  if 5==8 
	echo "this is Output of the rest of the section:" ."8";    //Execute if the condition is met
}
elseif ($num5>8) {    //Verification  if 5>8 
	echo "the number :".$num5."is larger than "."8";        //Execute if the condition is met 2
}

//If the higher conditions are not met then this sentence will be printed
else{
	echo "Output of the rest of the section".$num5;       
}



?>

