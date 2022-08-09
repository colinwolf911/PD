<?php


require_once "Person.php";
require_once "Student.php";


$student =new Student("john","white",'123456');

echo '<pre>';
var_dump($student);
echo '</pre>';
// What is class and instance
//blueprint objective
//varables 

/*$p=new Person("personal","digital");

// not working because of private echo $p->age=$age(30);
$p->setAge(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();

*/
//static for p2
/*$p2=new Person('mark','twin');
$p2->name='john';
$p2->surname='white';
echo '<pre>';
var_dump($p2);
echo '</pre>';
//echo Person::$counter;//2 two objects has been created
echo Person::getCounter();
//instance
//$p=new Person();
//$p->name='Personal';
//$p->surname='Digital';

//$p1=new Person();
//$p1->name='john';
//$p1->surname='white';
//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//echo $p->name='Personal';
//echo $p->surname='Digital';
*/


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
?>