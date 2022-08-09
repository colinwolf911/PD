<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.7;

// Arithmetic operations
echo $a+$b+$c.'<br>';
echo  $a+($b/$C).'<br>';
echo $a*$b .'<br>';
echo $a-$b.'<br>';
echo $a/$b.'<br>';


// Assignment with math operators
$a=$a+$b;
$a+=$b.'<br>';
echo $a.'<br>';
$a/=$b.'<br>';
echo $a.'<br>';
$a*=$b.'<br>';
echo $a.'<br>';
$a-=$b.'<br>';
echo $a.'<br>';
// Increment operator
//++
echo $a++ .'<br>';
echo ++$a.'<br>';

// Decrement operator
echo $a-- .'<br>';
echo --$a .'<br>';
// Number checking functions
is_float(1.5);
is_double(1.77);
is_int(7);
is_numeric("3.75");
is_numeric("7g.77");

// Conversion
$strNumber='2';
$number=(integer)$strNumber;
$number=intval($strNumber);
var_dump($number);

// Number functions
echo "abs(-17)".abs(-17).'<br>';
echo "pow(3,7)".pow(3,7).'<br>';
echo "sqrt(8)".sqrt(8).'<br>';
echo "max(3,7)".max(3,7).'<br>';
echo "min(3,7)".min(3,7).'<br>';
echo "round(7.7)".round(7.7).'<br>';
echo "round(9.1)".round(9.1).'<br>';
echo "floor(9.1)".floor(9.1).'<br>';
echo "ceil(9.1)".ceil(9.1).'<br>';
// Formatting numbers
$number=4313443212123156.89;
echo number_format($number,2,',','');
// https://www.php.net/manual/en/ref.math.php
