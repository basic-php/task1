<?php
//================================
//==    First Task Assignment   ==
//================================

$FirstNumber = 13; #Store var of type integer holding 1st number
$SecondNumber= 15; #Store var of type integer holding 2nd number
$ThirdNumber = 10; #Store var of type integer holding 3rd number

# this equation Multiplies 1st & 2nd number then finds the reminder for them
$Reminder = ($FirstNumber * $SecondNumber) % $ThirdNumber; 


if($Reminder == 8) #this code check if the reminder is euqal to 8
     
    //print out the message withen with reminder
    echo "The Reminder( ".$Reminder." ) is equal to 8 <br>"; 

else if($Reminder > 8) #this code check if the reminder is Greater then 8
     
    echo "The Reminder( ".$Reminder." ) is Greater than 8 <br>";

else #if non of the above is executed then this code is

    echo "The Reminder( ".$Reminder." ) is Less than 8 <br>";
 



