<?php

#-> [File]

////////////////////////////// (64) //////////////////////////////

$fileName = "taymoorAbdeen.txt";

// هل الملف موجود يرجع ترو او فولس 
// file_exists($fileName)

// هل الملف قابل للقراءة ترجع ترو او فولس
// is_writable($fileName)

/*
if (file_exists($fileName))
{
    if(is_writable($fileName))
    {
        echo "yes is writable";
    }
    else 
    {
        echo "no isn't writable";
    }
}
else
{
    echo "file is not found";
}
*/

////////////////////////////// (65) //////////////////////////////

// انشاء فولدار باسم اللي تبعث له
// mkdir("folderName");

// حذف فولدار باسم اللي تبعث له
// rmdir("folderName");

// يطبع مسار واسم الملف بالامتداد اللي انت فيها
// echo __FILE__; // res: D:\Computer\Web\PhpTasksWithIssa\task1\MyTemp\index.php

// هل فولدار موجود
// is_dir("taymoor");

////////////////////////////// (66) //////////////////////////////

# الفولدر
// يجيب فولدر اللي انا فيه لكن يجب ابعثله مسار كلي للملف اللي انا اشتغل فيه
// echo dirname("D:\Computer\Web\PhpTasksWithIssa\\task1\MyTemp\index.php");
// او ابعثله قيمة __فايل__ اللي يرجع نفس الشيء
// echo dirname(__FILE__); // res: D:\Computer\Web\PhpTasksWithIssa\task1\MyTemp
// echo dirname(__FILE__);

// يجيب فولدر اللي انا فيه
// echo __DIR__; // res: D:\Computer\Web\PhpTasksWithIssa\task1\MyTemp

// __DIR__ هو  dirname(__FILE__);

// اذا في سافيكس اكتب دوت امتداد دالة بيسنيم ترجع بدون امتداد في هذه الحالة استفاذ من اسم الملف بدون امتداد
// basename(path req, suffex: امتداد opt)

# الملف
// echo basename(__FILE__); // index.php رجع اسم الملف مع امتداد
// echo basename(__FILE__, ".php"); // index رجع اسم الملف بدون امتداد




////////////////////////////// (1) //////////////////////////////

$str = "my name is taymoor abdeen";
// يجلب بعد كلمة ايس الى اخير
$firstName = strstr($str, "is");
echo $firstName . "<br>";


////////////////////////////// (2) //////////////////////////////

// يجلب انديكس الكلمة محددة
$pos = stripos($str, "abdeen");
echo $pos . "<br>";

////////////////////////////// (3) //////////////////////////////

// عرض عدد معين من النص بتحديد رقم الانديكس من خطوة الثانية
$numberOfCharacter = substr($str, $pos, 3);
echo $numberOfCharacter . "<br>";

////////////////////////////// (4) //////////////////////////////

// جلب محتوى الصفحة الثانية ولا يتوقف اذا غير موجود
include_once("page2.php");




?>