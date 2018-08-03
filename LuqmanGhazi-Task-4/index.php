<?php

//=====================================
//===== Task 4: String opreations =====
//=====================================

# 1- 

$str1 = "bellguim won 3rd place in the world cup it's really sad";

# made an arry of elements from the string using explode

$arr1 = explode(" ",$str1);

# 2-
# Printing the array 

echo "<pre>";

print_r($arr1);

echo "</ pre>" . "<br>";

# 3-
# (-8) will cancel all elements but the first 3 and put them in arr2

$arr2 = explode (" ", $str1, -8);

foreach($arr2 as $str){

# print 3 elements in a random way
echo str_shuffle($str) . "<br>";

}

# 4-
# Making 1st letter of every word Capital...

$str1 = ucwords($str1);

$arr3 = explode(" ",$str1);

# printing the array

echo "<pre>";

print_r($arr3);

echo "</ pre>" . "<br>";

# 5-
# strlen() returns letter number of a string 

echo "Is the string's letter number > 6 ?" . "<br>";

if ( strlen($str1) > 6) {

    echo "Yes". "<br>";

} else {

    echo "No";
    
}

# 6-
# Made a string with tags
$str2 = "this is a <b>Bold Text</b>,it's <i>very italicy funny</i>, also 6 O'clock";

#Print to check
//echo $str2 . "<br>";

#Removed the Tags
$str2_NoTags = strip_tags($str2);

#Print to check
//echo $str2_NoTags . "<br>"; 

#Added slashses 
$str2_NoTags_WithSlashes = addslashes($str2_NoTags);

#print to check
//echo $str2_NoTags_WithSlashes . "<br>";
