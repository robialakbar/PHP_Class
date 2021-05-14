<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Belajar Hello World
 */
echo "Hello world";

echo "<br>";


/////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Belajar Variable Number
 */
$number_1 = 80;
$number_2 = 40;
$equals = $number_1 + $number_2;
echo $equals;
//atau
echo "<br>";
echo $number_1 + $number_2;
echo "<br>";


////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Belajar Variable String
 */
$text_1 = "robi";
$text_2 = "al akbar";
$nama_saya = $text_1."". $text_2;
echo $nama_saya;
echo "<br>";
//atau
echo $text_1 .''. $text_2;


///////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Belajar Strings
 */
echo "<br>";
$string = "robi al akbar";
$output = " {$string} adalah seorang \"Programmer\"";
echo $output;
echo "<br>";

/**
 * Belajar Numbers -> Kita Bisa mengecek apakah variable tersebut type float, integer atau string dll dengan metode bool(true / False)
 */
$num_1 = 10.1;
$num_2 = 10;
$string = "robi";
echo var_dump(is_float($num_1));
echo "<br>";
echo var_dump(is_integer($num_1));
$ciri = var_dump(is_integer($num_1));
echo "<br>";
echo "$num_1 is float $ciri";
echo "<br>";
echo "$num_2 is integer";
echo "<br>";
echo "$string is String";
echo "<br>";
/**
 * belajar math Operation
 */
echo (max(100, -100, 1000, 50,120, 170));       // Looking for the Maximum Value / Mencari Angka Maksimal pada array
echo "<br>";
echo (min(1000, 100, 120, -10, 10, 20, 78));    // Looking for the minimum value / Mencari Angka Minimal pada array
echo "<br>";
echo (sqrt(64));                                // devide Value / Membagi angka 
echo "<br>";
echo (rand(10, 100));                           // Random Value / Mengacak Angka
echo "<br>";
echo (round(5.8));                              // Rounding value / Membulatkan Angka
echo "<br>";
/**
 * Belajar Constant / Learning Constant
 */
define ("username", "robi al akbar",TRUE);
echo username;

?>

