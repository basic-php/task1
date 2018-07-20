<?php
//creating array
$stNames = array("ali","ahmed","qasim");
//adding elements to last position
$stNames[] = "omar";
$stNames[4] = "ali";

print_r($stNames);
echo '<br> <br>';

 sort($stNames);
print_r($stNames);
echo '<br> <br>';


//picking 2 random values from original array
   print_r(array_rand($stNames,2));
   echo '<br> <br>';

  print_r(array_unique($stNames));


?>