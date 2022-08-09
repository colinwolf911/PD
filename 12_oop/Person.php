<?php
/*
 User: 
 objectives here
 ?int accept null valueable as well
 */
require_once "Person.php";


class Person{
    public string $name;
    public string $surname;
    //protected  replace private to access the class
    //private ?int $age;
    protected ?int $age;
    public static int $counter=0;

//construct to excuted the instance has been created.
//construct to avoid repeat $p=new Person();
//$p->name='Personal';
//$p->surname='Digital';
    public function __construct($name,$surname){
        echo $name. ' '.$surname;
        //this arrow->keys to access the properity
        $this->name=$name;
        $this->surname=$surname;
        //self for static instance
        self::$counter++;

    }

    //class as private
    //we need to set to retrive the value
    public function setAge($age){
        $this->age=$age;
    }
    //for return private function
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }

}






?>