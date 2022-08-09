<?php

$SOH = 100;
$Quantity = 300000;
$Availability??='in store';


// Sample if
if($SOH===100){
    echo"in stock";
}
// Without circle braces
if($SOH===100) echo"in stock";
// Sample if-else
if($SOH>0){
    echo"in stock";
}else{
    echo"out of stock";
}
// Difference between == and ===
$SOH==100;//true
$SOH=='100';//true

$SOH===100; //true
$SOH==='100'; //false checking type as well

// if AND
if ($SOH>0 && $Quantity>=100){
    ECHO( ("$Availability==in store")&&($Quantity==100));
}
// if OR
if ($SOH===0 || $Quantity<=100){
    ECHO( ("$Availability==out of store")&&($Quantity==0));
}
// Ternary if
echo $SOH<1  ?'OUT OF STORE':'IN STORE';

// Short ternary
$dearSOH=$SOH ?:0;
echo '<pre>';
var_dump($dearSOH);
echo '</pre>';




// Null coalescing operator
$notAvailability=isset($Availability)? $Availability:'out of store';

$notAvailability=$Availability?? 'out of store';
// switch

$cAvailability =('SOH') ;// IN OR OUT
$Availability??=true;
$Quantity??=100;
switch($cAvailability){
    case 'SOH'>0:
        echo 'in store ';
        break;
    case 'Availability'>0:
        echo 'in store ';
        break;
    case 'Quantity'>=100:
        echo "$Quantity is 100";
        break;
    default:
    echo "Invalid !";
}