
<?php

// What is a variable
// in php there's no types to declare it $

// Variable types
//string
//integer
//float
//null
//array
//object
//resource

// Declare variables
$name='products';
$price=85;
$isAvailably=true;
$invoicePrice=32.72;
$image=Null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $price.'<br>';
echo $isAvailably.'<br>';
echo $invoicePrice.'<br>';
echo $image.'<br>';
// Print types of the variables
echo gettype($name).'<br>';
echo gettype($price).'<br>';
echo gettype($isAvailably).'<br>';
echo gettype($invoicePrice).'<br>';
echo gettype($image).'<br>';

// Print the whole variable
var_dump($name,$price,$isAvailably,$invoicePrice,$image);
// Change the value of the variable
$name=false;

// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
is_string($name);
is_int($price);
is_bool($image);
is_float($invoicePrice);
is_double($isAvailably);
// Check if variable is defined
isset($name);
isset($price);
// Constants
define('PI',3.1415);
echo PI.'<br>';
// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
