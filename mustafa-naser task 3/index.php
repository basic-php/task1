<?php
    $arr = array("mustafa","naser","ahmed","mohemmed"); // creating array

    array_push($arr,"omar","omar"); //adding element to the array
    
    echo "<pre>";
    print_r($arr); //printing array
    echo "</pre>";

    sort($arr, SORT_REGULAR); //sorting array

    echo "<pre>";
    print_r($arr); //printing array
    echo "</pre>";


    $rand = array_rand($arr,2); // pick a random element from the array

    echo "-------------------- <br>";
    echo $arr[$rand[0]] . "<br>"; //printing random element
    echo $arr[$rand[1]]. "<br>";  //printing random element
    echo "-------------------- <br>";

    $aru = array_unique($arr); // an array that has no diplicates 

    echo "<pre>";
    print_r($aru); //printing array
    echo "</pre>";


?>
