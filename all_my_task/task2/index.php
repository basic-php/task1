function codeforiraq($n1,$n2){
    if (is_integer($n1) and is_integer($n2)){
        if (($n1 < 2010 or $n2 > 2020)){
            echo "ok";           
        }else{
            echo "no <br>";
            for ($i = $n2; $i < $n1; $i++) {
                echo $i . "<br>";
            }
        }
    }
}