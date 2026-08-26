<?php 

$name = "Tawsif";
echo "<h1>$name</h1>";

$color = "red";
echo "My car is $color<br>";

// PHP String Functions
echo strlen("Hello"); 
echo str_word_count("Hello World!"); 
echo strpos("Hello World!", "World"); 
echo str_replace("World", "PHP", "Hello World!"); 
echo strrev("WebTech");

// PHP Array Functions
$arr=array("Tawsif", "Rifat", "Sakib");
echo implode(". ", $arr);
array_push($arr, "Rudro");

$arr1=array("Tawsif", "Ronie", "Rudro");
echo array_merge($arr, $arr1);
echo_r(array_reverse($arr1));

$arr2=array("6,3,7,2");
sort($arr2);
echo_r($arr2);




// PHP Variable Functions
var_dump(is_int(10));
var_dump(is_string("Ajax/Json"));
var_dump(is_nan((acos(8))));
var_dump(is_array($arr));

// PHP Constants
define("Site", "WebTech");
echo Site;


echo date("Y-m-d");
echo round(0.60);
echo time ();


?>

