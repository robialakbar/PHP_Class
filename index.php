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

/**
 *  Belajar Strings Function
 */
echo "<br>";
$first = "First Text  ";
$second = " second Text";
$third = $first;
echo $third;
echo "<br>";

echo trim($third);
echo "<br>";

/**
 * Belajar Array / Learning Array
 */
$odd_numbers = [1, 3, 5, 7, 9];

$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "the first number of odd is $first_odd_number <br>";
echo " the second number of odd is $second_odd_number <br>";
echo '<pre>';
echo var_dump($odd_numbers);
echo '</pre>';

/**
 * Belajar Array Function
 */
$num = [1, 2, 3, 4];
//array_push($num, 5);
//array_pop($num);
array_unshift($num, 0);
echo "<pre>";
var_dump($num);
echo "</pre>";

///////

$odd_numbers = [1, 3, 5, 7, 9];
$even_numbers =[2, 4, 6, 8, 10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
echo "<pre>";
echo var_dump($all_numbers);
echo "</pre>";

///////

$nomor = [3, 2, 4, 5, 1];
//sort($nomor);
rsort($nomor);
echo "<pre>";
echo var_dump($nomor);
echo "</pre>";


///////
// Variable array Key Value

$phone_numbers = [
    "robi al akbar" => "0878-9627-7896",
    "Imran Arsyad"  => "0898-0987-5748"
];
echo var_dump($phone_numbers);

?>


