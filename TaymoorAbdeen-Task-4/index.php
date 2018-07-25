<?php

////////////////////////////// (1) //////////////////////////////

// ÊÍæíá äÕ Çáì ãÕİæİÉ
$str = "this is solve task-4 of issa soffer";

$arr =  explode(" ", $str);

// äÚÑÖ ÍÊì äÊÃßÏ ãä ÊÍæá ÇáäÕ Çáì ÇáãÕİæİÉ
echo "<pre>";
print_r($arr);
echo "</pre>";


////////////////////////////// (2) //////////////////////////////

// ØÈÇÚÉ ÏÇÎá ÇáãÕİæİÉ
foreach ($arr as $value)
{
    echo $value . "<br>";
}


////////////////////////////// (3) //////////////////////////////

// ØÈÇÚÉ äÕ ÚÔæÇÆí
$randndex = array_rand($arr, 1);
$randString = $arr[$randndex];
echo $randString . "<br>";


////////////////////////////// (4) //////////////////////////////

// Úãá Çæá ÍÑİ ßÈíÑ ááäÕ ÇáÎÇÑÌ ãä ÇáãÕİæİÉ
$randString = ucfirst($randString);
echo $randString . "<br>";


////////////////////////////// (5) //////////////////////////////

// ÍÓÇÈ Øæá ÇáäÕ  ÇĞÇ ßÈÑ ãä 6 ÇØÈÚ äÚã
if (strlen($str) > 6)
{
    echo "yes" . "<br>";
}
// æÇáÇ ÇØÈÚ áÇ
else
{
    "no" . "<br>";
}

////////////////////////////// (6) //////////////////////////////

// äÕ ÍĞİ ÊÇßÇÊ ãäå æÇÖÇİÉ ÓáÇÔ Çáíå

$str2 = "My name's <b>taymoor</b> and my website is <a>taymoor.com</a> and i'm learning <i>php</i>";

echo $str2 . "<br>"; // ØÈÚ äÕ ÇÕáí
// ŞãÊ ÈÍĞİ ÊÇßÇÊ
$strWithoutTags = strip_tags($str2);
echo $strWithoutTags . "<br>"; // ØÈÚ ÈÚÏ ÍĞİ ÊÇßÇÊ
// ŞãÊ ÈÇÖÇİÉ ÓáÇÔ
$strWithslashes = addslashes($str2);
echo $strWithslashes . "<br>"; // ØÈÚ ÈÚÏ ÇÖÇİÉ ÊÇßÇÊ

?>