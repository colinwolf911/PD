<?php
namespace app;
use \PDO $pdo;
  //USE IT AS A CLASS
class database{
    public \PDO $pdo;
    public function __construct()
    {
        //\PDO as a gobal 
        //or use PDO 
    $this->pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    public function getproducts($search=''){
        $search=$_GET['search']??'';
        if($search){
        $statement=$this->pdo->prepare('SELECT *FROM products WHERE title LIKE :title ORDER BY create_date DESC');
        $statement->bindValue(':title',"%$search%");
        }else{
        $statement=$this->pdo->prepare('SELECT *FROM products ORDER BY create_date DESC');
        }
        
        $statement->execute();
        //BE FETCH AS ASSOCATE ARRAY 
        // and save it as products
        return  $statement->fetchAll(PDO::FETCH_ASSOC);
    }



}





?>