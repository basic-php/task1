<?php 
$h = array("json","developer","php","html","html","css");
echo "المصفوفه الخاصه بي : <br>";
echo print_r($h);
echo "<br>----------------------------<br>";
echo "اضافه الى المصفوفه {'JS'} <br>";
array_push($h,"JS");
echo print_r($h);
echo "<br>----------------------------<br>";
echo "ترتيب المصفوفه الخاصه بي <br>";
shuffle($h);
echo print_r($h);
echo "<br>----------------------------<br>";
echo "عنصر عشوائي : ";
echo $h[array_rand($h,1)];
echo "<br>----------------------------<br>";
echo "طبع المصفوفه بدون تكرار : <br>";
$new = array_unique($h);
foreach ($new as $all) {
    echo $all."<br>";
}
?>
