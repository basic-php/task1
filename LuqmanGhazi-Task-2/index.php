<?php

//================================
//==== Task 2: Year Function..====
//================================

function YearCheck( $Year1 , $Year2 ) {

    if ($Year1 < 2010 || $Year2 > 2020 ){

        echo "They Fit the Rule"."<br>";
    }
    else {

        # IF Year1 < Year2.
        if( $Year1 < $Year2 ){

            while ($Year1 <= $Year2 )

                echo $Year1++ . "<br>";
        }
        # IF Year1 > Year2.
        else {

            while($Year1 >= $Year2)

                 echo $Year1-- . "<br>";

        }
        
}
}

YearCheck(1996,2020); # Function call

/*Output Sample

Inpiared By Taymoor Abdeen... 

 
YearCheck(1996,2020);
"The Condition is Met (Year1 < 2010 or Year2 > 2020 or both)"
 

YearCheck(2019,2011);
-If condtion is not met and Year1 > Year 2
2019
2018
2017
2016
2015
2014
2013
2012

YearCheck(2011,2019); 
-If condtion is not met and Year1 < Year 2
2011
2012
2013
2014
2015
2016
2017
2018
2019


*/





