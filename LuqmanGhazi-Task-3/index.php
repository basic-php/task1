<?php
//=================================
//=== Task 3 - Array Opreations ===
//=================================

# 1-
#Array Intiation
$numbers = array(2,8,4,6,10,9,10,1);

#2-
#Added 16 values using array_push()
Array_push($numbers,1,2,2,3,4,7,6,5,5,6,3,7,9,8,5,2);

#3-
#Sort the array in Ascending order 
sort($numbers);

#4-
#Shuffle the array for random values 
shuffle($numbers);

echo "Values elemenated from the array, ByeBye ;_;" . " :<br>";
for ($i = 0; $i < 5; $i++)
{
    # output the 5 values elemenated by the Function array_pop()
    echo array_pop($numbers) . "<br>";
   
}

#5-
# Deleted all repeting values using array_unique() Methoed
$Unique_Numbers  = array_unique($numbers);    

#sort is to help with the program's final output
sort ($Unique_Numbers );

echo "<br>" ."<pre>";

print_r($Unique_Numbers); 

echo "</pre>";
