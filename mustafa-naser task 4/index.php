<?php
  $str = "a,b,c,d,e,f,g"; // created a string
  $arr = explode(",",$str); // convert string to array


  echo "<pre>";
  print_r($arr); //printing array
  echo "</pre>";

  shuffle($arr); //shffuling the array

  echo "<pre>";
  print_r($arr); //printing array
  echo "</pre>";

  $strr = ucfirst(implode($arr));
  // convert array to string
  // make first letter of the string capitale letter


  echo $strr ; //printing string

  if (strlen($strr) > 6) { //compare string to 6
      echo "<br>Ye<br>"; //printing string
      echo strlen($strr); //printing number of letter

  } else {
      echo "<br>No<br>"; //printing string
      echo strlen($strr); //printing number of letter
  }



  $str2 = "@mustaf\a"; 
  $ns = stripslashes($str2); // remove back slashes
  echo "<br>". str_replace("@","",$ns); 
  // remove or (replace) @ the tag

?>
