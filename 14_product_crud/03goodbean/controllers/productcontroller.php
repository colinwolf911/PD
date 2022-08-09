<?php

namespace app\controllers;

use app\Router;
use product;

class productcontroller{

    public function index(Router $router){
        echo "index page";

        $search=$_GET['search']??'';
        //render a form
        $products= $router->db->getproducts($search);
        $router->renderview('products/index',[
            'products'=>$products,
            'search'=>$search
        ]);

    }
    public function create(Router $router){
        echo "create page";
        $errors=[];
        $productData=[
            'title'=>'',
            'description'=>'',
            'image'=>'',
            'price'=>'',
        ];
        if ($_SERVER['REQUEST_METHOD'==='POST']){
            $productData['title']=$_POST['title'];
            $productData['description']=$_POST['description'];
            $productData['price']=$_POST['price'];
            $productData['imagefile']=$_POST['imagefile']?? null;

            $products=new product();
            $products->load($productData);
            $products->save();
            header('Location: /products');
            exit;


        }
    
        $router->renderview('products/create',[


            'products'=>$products,
            'errors'=>$errors
        ]);
    }
    public function update(){
        echo "update page";
    }
    public function delete(){
        echo "delete page";
    }

}

?>