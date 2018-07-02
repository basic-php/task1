<?php

//we wrote the variables and gave them initail value
$x=13;
$y=15;
$z=10;

//make multiplication on two variables
echo "the mult is: ".$y * $z."<br>" ;

//make the operator mod on two variables
echo "the mod is: ".$y % $z."<br>" ;

//cheaking if the mode operator is equal, bigger or less than 8
if ($y % $z==8)
{
    echo "the number ".$y % $z. "it is equal to 8"."<br>" ;
}

else if ($y % $z>8)
{
    echo "it is greater than 8".$y % $z."<br>" ;
}
else {
   echo "the number ".$y % $z."is not equal to 8 and also not greater than 8"."<br>" ;
}


?>