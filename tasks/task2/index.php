<?php

function Compare($date1,$date2)
{
if($date1 <2010 || $date2>2020)
{
  return "<p>date1 < 2010 or date2>2020</p>";
}
 else
{
   $sentence = "";
   for($i = $date1;$i<=$date2;$i++)
    $sentence .= $i . "<br>";
    return $sentence;
}

}
$date1 = 2011; $date2 = 2021; //first value of date1 & date2
echo "if first condition is commit<br>"; 
echo "----------------------------<br>";
echo "when date1 equal " . $date1 . " and date2 equal " . $date2."<br>";
echo Compare($date1,$date2) . "<br>";  // 2011,2021 the parms value
$date1 = 2010; $date2 = 2020; // the new value of date1 and date2
echo "if second condition is commit<br>";
echo "----------------------------<br>";
echo "when date1 equal " . $date1 . " and date2 equal " . $date2 . "<br>";
echo Compare($date1,$date2) . "<br>"; // 

?>