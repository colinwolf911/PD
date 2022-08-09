<?php


/*$products=["SKU","Item Name","Brand","availability"];
    foreach($products as $i=>$product){
        echo $i. ' '.$product. '<br>';
    }
     */
// Function which prints "Hello I am Zura"
function ProductList(){
    echo "retrives";

}
ProductList().'<br>';
ProductList().'<br>';
ProductList().'<br>';

// Function with argument
 function ProductList0($product){
   // echo "retrived from list $product";
   //return "retrived from list $product"; it won't call a function
   return "retrived from list $product";
 }
 //because the return need to print out 
 echo ProductList0('Brand').'<br>';
 echo ProductList0('Item Name').'<br>';

// Create sum of two functions

function totalQuantity($FORCE,$Macger){
    return $FORCE+$Macger;
}
echo totalQuantity(23,300);

// Create function to sum all numbers using ...$nums
function totalQuantity0(...$nums){
    echo '<pre>';
    var_dump($nums);
    echo '</pre>';

}
echo totalQuantity0(71,58,36,85,99,100);

//me for loop
function totalQuantity1(...$nums){
    foreach($nums as $i=>$nums){
        echo $i. ' '.$nums. '<br>';
    }
     

}
echo totalQuantity1(71,58,36,85,99,10);

//traversy for loop
function totalQuantity2(...$nums){
   $totalQuantity2=0;
   foreach ($nums as $n){
    $totalQuantity2+=$n;
   }
   return $totalQuantity2;
     

}
echo totalQuantity2(71,58,36,8,99,10). '<br>';

// Arrow functions
function totalQuantity3(...$nums){
    /*$totalQuantity3=0;
    foreach ($nums as $n){
        $totalQuantity3+=$n;
    }
    return $totalQuantity3;*/
//pass two arguments 1. $nums 2. arrow function fn(parrements) 
//return array_reduce($nums# first values,fn($carry#carry next iteration, $n#second values..)=>$carry#sum(first+second)+$n#next values)
   return array_reduce($nums,fn($carry, $n)=>$carry+$n);
}
echo totalQuantity3(1,58,36,8,99,10,11);
