<?php
//=====================================================
//==== Task 5: Advanced String And File Opreations ====
//=====================================================

# 1-


$MyStr = "PHP is waaay easier then C++, C++ it's just too complicated ";

# Brings The String That Is After The Word Including It Too
$StringWanted = strstr( $MyStr , "waaay" );

echo "1- Your string (**" . $StringWanted . "**)<br> <br>" ;


# 2-


# This Code Will Save the Index of The Word Wanted 
$IndexOfWord = stripos( $MyStr , "c++" );

# Output For Checking
echo "2- The Word (**c++**) You Searched For is At This Index(**" . $IndexOfWord . "**) ." . "<br> <br>" ;


# 3-


# Made a Sub String using the index from 2nd Demand
$BranchString = substr( $MyStr , $IndexOfWord , 34 );

echo "3- The Sub String: (**" .$BranchString ."**) <br> <br>";


# 4-

# Adds Content From Another Page And If The Page Doesn't Exist , Then No Thing Will Happen To The Webpage
@include 'page2.php';


?>
