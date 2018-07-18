<?php

// multi-dimensional array:-
// $people = array
// (
//     "ALI" => array("ali", 12, "shop"),
//     "HUSSAIN" => array("hussain", 22, "resturent")
// );

// echo "<h3> This is my test array:</h3>";
// foreach ($people as $key => $person)
// {
//     echo $key . ": " . "<br>";
//     foreach($person as $info)
//     {
//         echo $info . "<br>";
//     }
//     echo "<br>";
// }

// array method :-
// * in_array
// in_array(needle, haystack, type)
// دالة ترجع صح ام خطأ 
// needle: الكلمة الذي تبحث عنه
// haystack: اسم المكان الذي تبحث فيه

// type: هل يقارن بال آيدنتيكال ام لا
// $names = array("taymoor", "ali", "yousif", 12);
// if(in_array("12", $names, false))
// {
//     echo "Yes";
// } 
// else
// {
//     echo "No";
// }

// * array_search:
// array_array(needle, haystack, type)
// دالة ترجع اندكس واذا غير موجود ترجع قيمة نيل 
// $names = array("taymoor", "ali", "yousif", 12);
// if (array_search("muhamed", $names, true))
// {
//     echo "yes";
// }
// else
// {
//     echo "no";
// }


// * array_key_exists
// array_key_exists(needle, haystack)
// needle : key
// يتعامل مع اسوسييتف ارري
// دالة ترجع صح ام خطأ 
// $names = array(
//     "first" => "taymoor",
//     "second" => "abdeen",
//     "last" => "qasim",
// );
// $a = array("aaa","bbb");
// if (array_key_exists("first", $a))
// {
//     echo "yes";
// }


// * array_push:
// array_push(array, value1, value2, value3)
// يضيف القيم الى اخر مصفوفة
// وكم قيمة نكتب عند الاضافة تقبل
// يتعامل مع انديكسد ارري
// $names = array ("taymoor", "abdeen", "qasim",
// );
// echo "<pre> before : ";
// print_r($names);
// echo "</pre>";
// array_push($names, "sonallah");
// echo "<pre> after : ";
// print_r($names);
// echo "</pre>";


// * array_unshift:
// array_unshift(array, value1, value2, value3)
// يضيف القيم الى اول مصفوفة
// وكم قيمة نكتب عند الاضافة تقبل
// يتعامل مع انديكسد ارري
// $names = array ("taymoor", "abdeen", "qasim");
// echo "<pre> before : ";
// print_r($names);
// echo "</pre>";
// array_unshift($names, "sonallah");
// echo "<pre> after : ";
// print_r($names);
// echo "</pre>";


// * array_pop:
// array_pop(array)
// يحذف اخر قيمة من مصفوفة
// ترجع قيمة عنصر محذوف يمكن طباعته او تضعه في المتغير
// $names = array ("taymoor", "abdeen", "qasim");
// echo "<pre> before : ";
// print_r($names);
// echo "</pre>";
// $item = array_pop($names);
// echo "<pre> after : ";
// print_r($names);
// echo "</pre>";

// * array_shift:
// array_shift(array);
// يحذف اول قيمة من مصفوفة وتبدأ انديكش من صفر
// ترجع قيمة عنصر محذوف يمكن طباعته او تضعه في المتغير
// $names = array ("taymoor", "abdeen", "qasim");
// echo "<pre> before : ";
// print_r($names);
// echo "</pre>";
// $item = array_shift($names);
// echo "<pre> after : ";
// print_r($names);
// echo "</pre>";

// * sort & rsort with indexed array:
// يرتب حسب فاليو وليس انديكس
// sort(array, type) or rsort(array, type)
// r : reverse
// type :
// * SORT_REGULER : يرتب نصوص اولا ثم الارقام بعدها واذا كان هناك ارقام نصي اي بين دبل كوتيشن كان يرتبه اولا وهو افتراضيوبكن لا ينكتب في استدعاء الدالة
// * SORT_STRING : يرتب ارقام اولا ثم النصوص لان كل شيء يتعامل مع ك نصوص
// يتعامل مع انديكسد ارري
// ما ترجع شيء
// $names = array ("taymoor", "2020", 2019, "abdeen", "qasim", 2018);
// sort($names); // SORT_REGULER
// echo "<pre> before : ";
// print_r($names);
// echo "</pre>";
// rsort($names, SORT_STRING);
// echo "<pre> after : ";
// print_r($names);
// echo "</pre>";
// rsort($names);
// echo "<pre> reverse : ";
// print_r($names);
// echo "</pre>";



// * asort & arsort with value in associative array:
// asort(array) : 'a' it's associative 
// يكون ترتيب حسب كيس
// $names = array (
//     "FIRST" => "taymoor",
//     "SECOD" => "2020",
//     "THIRD" => 2019,
//     "FOURTH" => "abdeen",
//     "FIVTH" => "qasim",
//     "SIXTH" => 2018
// );
// asort($names); // اذا نكتب سورت عادي اي بدون حرف أي يفتهم انها مصفوفة اندكسيد ارري فيكون فيها انديكس من صفر 
// echo "<pre> assosiative : ";
// print_r($names);
// echo "</pre>";


// * ksort & krsort with key in associative array:
// asort(array) : 'k' it's key 
// يكون ترتيب حسب كيس
// $names = array (
//     "FIRST" => "taymoor",
//     "SECOD" => "2020",
//     "THIRD" => 2019,
//     "FOURTH" => "abdeen",
//     "FIVTH" => "qasim",
//     "SIXTH" => 2018
// );
// ksort($names); // اذا نكتب سورت عادي اي بدون حرف أي يفتهم انها مصفوفة اندكسيد ارري فيكون فيها انديكس من صفر 
// echo "<pre> assosiative : ";
// print_r($names);
// echo "</pre>";



// *array_revese(array, preserve)
// preserve: اذا كان صح يحافظ على انديكس اي يبدل مكان انديكس كذلك واذا كان خطأ يبقى انديكس ثابت ويتغير قيم فاليو فقط وهو افتراضي اي الخطأ
// يرجع ارري لازم انت تستقبله اي تضعه اما في نفس ارري ام في ارري اخر 
// $names = array ("taymoor", "abdeen", "qasim");
// echo "<pre>before: ";
// print_r($names);
// echo "</pre>";
// $names = array_reverse($names, false); // array_reverse($names, true);
// echo "<pre>after: ";
// print_r($names);
// echo "</pre>";


// *shuffle(array)
// يرتب العناصر عشوائيا في كل مرة شكل
// ما ترجع شيء ولا تحافظ على كيس او انديكس
// $names = array ("taymoor", "abdeen", "qasim");
// echo "<pre>before: ";
// print_r($names);
// echo "</pre>";
// shuffle($names);
// echo "<pre>after: ";
// print_r($names);
// echo "</pre>";



// *array_fill(index, number, value)
// ملئ ارري بالقيم
// index: رقم الاندكس اي يضيف منه
// nummber: عدد مرات تكرار
// value: قيمة
// $job = array_fill(0, 3, "programmer");
// $job = array_fill(0, 3, array("ali", "yousif")); // for multi-dimensional array
// $job = array_fill(0, 3, array_fill(0, 3, "muhammed"); // so for multi-dimensional array 
// echo "<pre>";
// print_r($job);
// echo "</pre>";


// array_sum(array);
// يتعامل مع انديكسد ارري و اسوسييتف ارري
// يتعامل مع انتيجر فلوت وسترينك اذا كان رقم واذا كان داخل سترينك بداية رقم ثم ياتي نص يعمل تجاهل للنص ياخذ بداية فقط
// $num = array("10", "3.3", "15taymoor", "100ali200");
// echo "<pre>";
// print_r($num);
// echo "</pre>";
// $sum = array_sum($num);
// echo $sum;


// array_rand(array, number)
// ترجع انديكس عنصر او عناصر عشوائيا من المصفوفة
// $names = array ("taymoor","omer", "yousif", "muhammed");
// echo "<pre>";
// print_r($names);
// echo "</pre>";
// $one = array_rand($names, 1); // يرجع انديكس واحد فقط وليس مصفوفة
// echo "one is: " . $names[$one] . "<br>"; // فيكون معرفة قيمة انديكس مرجع هكذا
// $i = 10;
// $group = array_rand($names, 2); // اذا كان 2 او اكثر يرجع انديكس على شكل مصفوفة
// for($i = 0; $i < 2; $i++)
// { 
//     echo "group[$i] is " . $names[$group[$i]] . "<br>"; // فيكون معرفة قيمة انديكس مرجع هكذا
// }


// * array_unique(array, Sort_type)
// ترجع مصفوفة لازم تضعه في متغير
// $names = array ("taymoor","omer", "yousif", "omer", "taymoor");
// echo "<pre>";
// print_r($names);
// echo "</pre>";
// $nuiqeNames = array_unique($names);
// echo "<pre>";
// print_r($nuiqeNames);
// echo "</pre>";


// * explode : انفجار
// explodr(spreater, sting, limit)
// spreater: حرف التي تبدأ بعدها قطع
// sting: النص المراد قطعه افتراضي عدد القطع
// limit:0 or possitive(maximam) or negative
// 0: بكون عنصر واحد في ارري
// possitive: تحدد عدد عنصر
// negative: يحذف من اخر حسب عدد
// $name = "taymoor abdeen qasim";
// $sepreaterNames = explode(" ", $name);
// echo "<pre>";
// print_r($sepreaterNames);
// echo "</pre>";

//  * implode or join : تجميع
// implode(spreater, array) // افتراضي للسبريتور هو نيلل
// join: نفس عمل امبلود
// $name = array ("taymoor","abdeen", "qasim");
// $myName = implode(" ", $name);
// $myName = join("*", $name);
// echo $myName;


// * str_split(string, length)
// يفصل نص الى قطع حسب عدد والباقي يبقى وافتراضي هي 1 عدد واذا عدد اكبر من طول النص يكون عنصر واحد فقط
// $name = "my name is taymoor";
// echo $name . "<br>";
// $newName = str_split($name, 3);
// echo "<pre>";
// print_r($newName);
// echo "</pre>";


// * chunk_split(string, length : افتراضي 76 , end: شيء يضيفه الى اخر وافتراضي سطر جديد \r\n)
// يفصل نص الى قطع حسب عدد والباقي يبقى وافتراضي هي 1 عدد
// $name = "my name is taymoor";
// echo $name . "<br>";
// $newName = chunk_split($name, 3, ".");
// echo "<pre>";
// print_r($newName);
// echo "</pre>";

// * str_replace(search, replace, string or array, count)
// حساسة لحالة حروف
// يمكن تبعث سترينك او ارري وترجع حسب ما بعثت له
// $name = "pph is easy, pph is famous, phhp it's java";
// echo $name . "<br>";
// $newName = str_replace("pph", "php", $name);
// echo $newName. "<br>";
// // كم كلمة تم تبديله
// echo $c. "<br>";
// // يمكن تبدل مجموعة كلمات بكلمة واحدة
// $newName = str_replace(array("pph", "phhp" , "]h["), "php", $name, $c);
// echo $newName. "<br>";
//  //يمكن تبدل مجموعة كلمات بمجموعة حسب ترتيب
// // اذا كان عدد عناصر في ريبليس اقل من سيرج ف افتراضيا يضع امبتي ستريك يعني نيلل
// $newName = str_replace(array("pph", "java"), array("php","javascript", ), $name, $c);
// echo $newName. "<br>";
// $newName = str_replace(array("pph", "java"), array("php"), $name, $c);
// echo $newName. "<br>";



// * str_repeat(string, number);
// // يكرر نص حسب عدد المعطى  
// $name = "taymoor";
// $names = str_repeat($name, 12);
// echo $names;


// * str_shuffle(string, number);
// // يعمل خربطة للحروف في النص  
// $name = "taymoor";
// $names = str_shuffle($name);
// echo $names;


// * strlen(string)
// // يحسب عدد حروف او رموز يعني يحسب طول النص
// $name = "taymoor";
// $count = strlen($name);
// echo $count;



// * addslashes(string)
// // يستخدم للحماية في استخدام سينكل او دبل كويشن في قاعدة بيانات
// // يقوم باضافة سلاش
// $name = "My name is taymoor, I'm programmer";
// $newName = addslashes($name);
// echo $newName;


//* stripslashes(string)
// // يستخدم للحماية في استخدام سينكل او دبل كويشن في قاعدة بيانات
// // يقوم بحذف سلاش
// $name = "My name is taymoor, I\'m programmer";
// $newName = stripslashes($name);
// echo $newName;



//* striptags(string, allow)
// // allow : عناصر تسمح لهم البقاء في النص وما ينحذف
// // يعمل على حذف كل تاكات ات تي ام ال
// $str = "My name is <b>taymoor</b>, and <i>taymoor</i>";
// echo $str;
// echo "<br>";
// $newStr = strip_tags($str, "<i>");
// echo $newStr;



//* trim(string, charlist) تقليم
// rtrem : من اليمين فقط
// ltrem : من اليسار فقط
// // يقلم النصوص حسب الرموز او الحروف ولازم تبدأ من بداية النص او من اخير لان لا يمكن تقليم وسط بدون تقليم بداية او نهاية
// // charlist: رمز مراد حذفه
// // والافتراضي :
// \0  null
// \t Tap
// \n newline
// \r carriage return
// \x0b vertical tap
// " " space
// $str = " \t  \t     \n My name is taymoor   " ;
// echo var_dump($str) . "<br>" ;
// $newStr1 = trim($str);
// $newStr2 = rtrim($str);
// $newStr3 = ltrim($str);
// echo var_dump($newStr1) . "<br>";
// echo var_dump($newStr2) . "<br>";
// echo var_dump($newStr3) . "<br>";




// * str_word_count(string: req, format: opt, charlist: opt)
// ما يحسب اسبيشال كاركتر مثل & او غيره الا اذا تكتبه بال كارليست
// format: 
// 0: return Count as integer, it's defualt
// 1: return Count as indexed array.
// 2: return Count as associative array and keys is posion of string
// charlist : 
// by defualt ماكو شيء
// حروف يجب كتابتها وبدون فراغ بينهما

// $str = "i love php & javascript + react";
// echo $str . "<br>";
// $count = str_word_count($str);
// echo $count;

// $countIndexedArray = str_word_count($str, 1, "&+");
// echo "<pre>";
// print_r($countIndexedArray);
// echo "<pre>";

// $countAssociativeArray = str_word_count($str, 2);
// echo "<pre>";
// print_r($countAssociativeArray);
// echo "<pre>";



// * parse_str(string: req, array:opt)
// // يعمل على تجزئة اللينك الى متغيرات ذات قيمة او اذا كتب مصفوفة ينخزن في المصفوفة اسسوسييتف كل كي يكون متغير ومقابلها تكون فاليو
// // ما ترجع شيء لكن ينفذ الامر على متغير
// $link = "name=taymoor&age=22&job=studnt";
// parse_str($link);
// echo $name . "<br>";
// echo $age . "<br>";

// parse_str($link, $arr);
// echo $arr["name"];
// echo "<pre>";
// print_r($arr);
// echo "<pre>";




// * nl2br: newline to breakline
// * nl2br(str, type)
// type: 
// true: <br /> self close, it's by defult
// false: <br> not self close
// $str = "My name is taymoor \n and i'm love php";
// $newStr = nl2br($str);
// echo $newStr;



// * strpos(string:req, find:req, offset:opt)
// * stripos(string:req, find:req, offset:opt) i: case insestive
// * strrpos(string:req, find:req, offset:opt) r: from right
// * strripos(string:req, find:req, offset:opt) 

// // معرفة بوسيشن للكاركتر في النص
// offset: ابدأ من هذا الانديكس ابحث واذا كان لا يوجد ما يرجع شيئ
// offset: سالب يفيد لما ابدأ من يمين احسب
// $str = "iam love php and it's easy";
// $pos = strpos($str, "php");
// echo $pos;







?>