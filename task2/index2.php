<?php
// define the function
function Year($date1,$date2)
{
    $msg=" ";
    //check the date
    if ($date1<2010 && $date2>2020)
    {
        return "The date is less than 2010 and greatr than 2020";
    }
    //print all date
    else
    {
        for ($i=$date1;$i<=$date2;$i++)
        {
            $msg.= $i." ";
        }
     return $msg;
    }
}
//call the function
echo Year(2009,2022);

?>