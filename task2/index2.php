<?php
// define the function
function Year($date1,$date2)
    {
        //check the date 
        if ($date1<2010 && $date2>2020)
            {
                echo "The date is good";
            }
            //print all date
            else
            {
                for ($i=$date1;$i<=$date2;$i++)
                {
                    echo $i."<br>";
                }
            }
    }
    //call the function
    Year(2002,2022);

?>