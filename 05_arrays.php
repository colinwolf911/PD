<?php

// Create array
//$products=array();

$products=["SKU","Item Name","Brand","availability"];

// Print the whole array
echo '<pre>';
var_dump($products);
echo '</pre>';


// Get element by index
echo $products[1].'<br>';


// Set element by index
$products[0]='Barcode';
echo '<pre>';
var_dump($products);
echo '</pre>';
// Check if array has element at index 2
isset($products[1]);//true

// Append element
$products[]='IMAGE_LINK';
echo '<pre>';
var_dump($products);
echo '</pre>';
// Print the length of the array
echo count($products).'<br>';

// Add element at the end of the array
array_push($products,'shipping_id');
echo '<pre>';
var_dump($products);
echo '</pre>';
// Remove element from the end of the array
echo array_pop($products);
echo '<pre>';
var_dump($products);
echo '</pre>';
// Add element at the beginning of the array
array_unshift($products,'shipping time');
echo '<pre>';
var_dump($products);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($products);
// Split the string into an array explode
$string="SKU,Item Name,Brand,availability";
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';
// Combine array elements into string impode("&")
echo implode("&",$products);
// Check if element exist in the array in_array('image_link',$products);
echo '<pre>';
var_dump(in_array('image_link',$products));
echo '</pre>';

// Search element index in the array array_search('image_link',$products);
echo '<pre>';
var_dump(array_search('image_link',$products));
echo '</pre>';
// ####Merge two arrays array_merge($products,$brands)
$brands=["Adonit", "Airthings","Anki,","Backbone","Bluelounge
","Bold","Bonelk"];
echo '<pre>';
var_dump(array_merge($products,$brands));
echo '</pre>';
//new notations var_dump([...$products,...$brands]) for php 7
$brands=["Adonit", "Airthings","Anki,","Backbone","Bluelounge
","Bold","Bonelk"];
echo '<pre>';
var_dump([...$products,...$brands]);
echo '</pre>';



// Sorting of array (Reverse order also)sort($products);  reverse order rsort($products);

echo '<pre>';
var_dump($products);
echo '</pre>';
sort($products);
echo '<pre>';
var_dump($products);
echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$ProductList=[
    'SKU'=>'ADCIPB102',
    'Item Name'=>'Adonit Folio Case for iPad 10.2" (Gen 7, 8, 9)',
    'availability'=>true,
    'SOH'=>0,
    'image'=>['https://res.cloudinary.com/dbrtm8pf6/image/upload/v1633929002/uploads/6eae278b/products/3344/images/qfjovzwkym1r3wnic8xv_1633929000.jpg','https://res.cloudinary.com/dbrtm8pf6/image/upload/v1633929031/uploads/6eae278b/products/3345/images/ADCIPB109_0_1626591494_1633929028.jpg']
];
echo '<pre>';
var_dump($ProductList);
echo '</pre>';

// Get element by key
echo $ProductList['availability'].'<br>';


// Set element by key
$ProductList['number']='quality';
echo '<pre>';
var_dump($ProductList);
echo '</pre>';


//### Null coalescing assignment operator. Since PHP 7.4 ?? FOR CHECK
if (!isset($ProductList['availability'])){
    $ProductList['availability']='out of stock';
}
$ProductList['availability']??='out of stock';
$ProductList['availability']?? 'out of stock';

// Check if array has specific key

// Print the keys of the array array_keys($ProductList);
echo '<pre>';
var_dump(array_keys($ProductList));
echo '</pre>';

// Print the values of the arrayarray_values($ProductList);
echo '<pre>';
var_dump(array_values($ProductList));
echo '</pre>';
// Sorting associative arrays by values, by keys ksort($ProductList); by value asort  asort($ProductList);
ksort($ProductList);
echo '<pre>';
var_dump($ProductList);
echo '</pre>';

//by values
asort($ProductList);
echo '<pre>';
var_dump($ProductList);
echo '</pre>';
// Two dimensional arrays

$Dear=[
    ['SKU'=>'unique ID','availability'=>TRUE],
    ['SKU'=>'unique ID','availability'=>FALSE],
    ['SKU'=>'unique ID','availability'=>FALSE],
];
echo '<pre>';
var_dump($Dear);
echo '</pre>';
