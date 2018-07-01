<?php
function codeforiraq($n1,$n2){
    if (is_integer($n1) and is_integer($n2)){ // تحقق انو هوه ادخل تاريخ او ارقام
        if (($n1 < 2010 or $n2 > 2020)){ // اذا التاريخ الاول اصغر من 2010 
            // او التاريخ الثاني اكبر من 2020
            return "ok";           
        }else{ // اذا متنفذ الشرط الفوك
            $all = "";
            for ($i = $n2; $i <= $n1; $i++) { 
                $all .= $i . " ";
            }
            return $all;
            }
    }
}

// Test for function
echo "<h2>if value1 < 2010 or value2 > 2020</h2><br>";
echo codeforiraq(2009,2022);
echo '<h2><br>--------------------------<br></h2>';
echo '<h2>if not ( value1 < 2010 or value2 > 2020 )</h2><br>';
echo codeforiraq(2020,2000);
// end Test 
?>  
