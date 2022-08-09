<?php 
require_once "Person.php";


class Student extends Person{

    //add extra class
    public string $studentId;

    public function __construct($name,$surname,$studentId){
        
        //taking to its' own name and surname
        parent::__construct($name,$surname);
        $this->age=18;
        $this->studentId=$studentId;
    
        
    }






}







?>