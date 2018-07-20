<?php

//================================
//==== Task 2: Year Function..====
//================================

function YearCheck( $Year1 , $Year2 ) {

    if ($Year1 < 2010 || $Year2 > 2020 ){

        echo "They Fit the Rule"."<br>";
    }
    else {

        # The Next contion is set so that if Year1 < Year2 we increment it, while doing the opposite if Year1 > Year2.....
        if( $Year1 < $Year2 ){

            while ($Year1 <= $Year2 )

                echo $Year1++ . "<br>";
        }
        else {

            while($Year1 >= $Year2)

                 echo $Year1-- . "<br>";

        }
        
}
}

YearCheck(2011,2019); # Function Call