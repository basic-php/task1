<?php
echo "<h1>Task 4 </h1><br>";
$text = "Hello php . I love you";
echo "Text as : ' $text ' <br><br>";
$code_array = str_word_count($text,TRUE);
echo "1 and 2 - array : <br>";
echo "<pre>";
print_r($code_array);
echo "</pre>";
shuffle($code_array);
echo '3 - Array shuffle : " ';
foreach ($code_array as $k) {
    echo $k . " ";
}
echo '"<br><br>';
echo '4 - ucfirst first text : " ';
foreach ($code_array as $k) {
    echo ucfirst($k) . " ";
}
echo '"<br><br>';
echo "5 - count and if 6 : ";
if (strlen($k) > 6 ){
    echo "{ ok } <br>";
}else{
    echo "{ no } <br>";
}
$new_text = "<p>and i love</p> ( html and css )";
echo "<br> 6 - new value : " .$new_text;
echo "<br><br> Delete tag : ";
echo strip_tags($new_text);
?>

