<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body><?php

// while sometimes it will be infinite 
$counter = 0;
/*while ($counter < 100) {
    echo $counter . '<br>';

    if ($counter === 1) {
        break;
    }
    $counter++;
    break;
}*/
// Loop with $counter

// do - while
/*
do {
    echo $counter. '<br>';
} while ($counter < 100);
// for
for ($i=0;$i<100;$i++){
    echo $i. '<br>';
}
*/
// foreach
$products=["SKU","Item Name","Brand","availability"];
foreach($products as $i=>$product){
    echo $i. ' '.$product. '<br>';
}

// Iterate Over associative array.
$ProductList=[
    'SKU'=>'ADCIPB102',
    'Item Name'=>'Adonit Folio Case for iPad 10.2" (Gen 7, 8, 9)',
    'availability'=>true,
    'SOH'=>0,
    'image'=>['https://res.cloudinary.com/dbrtm8pf6/image/upload/v1633929002/uploads/6eae278b/products/3344/images/qfjovzwkym1r3wnic8xv_1633929000.jpg','https://res.cloudinary.com/dbrtm8pf6/image/upload/v1633929031/uploads/6eae278b/products/3345/images/ADCIPB109_0_1626591494_1633929028.jpg']
];
//ARRAY CANNOT BE CONVERT STRING 

foreach ($ProductList as $key=>$value){
    //ARRAY CANNOT BE CONVERT STRING  IN IMAGE []
    //BY IMPlODE TO CONVERT
    if(is_array($value)){
        ECHO $key. ' '.implode(",",$value). '<br>';
    }else {
        echo $key .' '.$value .'<br>';
    }

   
}
?>
</body>
</html>



