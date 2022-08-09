<?php

class product{



    public ? int $id=null;
    public ? string $title=null;
    public ? string $description=null;
    public ? float $price=null;
    public ? string $imagepath=null;
    public ? array $imageFile=null;


    public function load($data){
        $this ->id =$data['id']??null;
        $this ->title=$data['title'];
        $this ->description=$data['description']??'';
        $this ->price=$data['price'];
        $this ->imagepath=$data['imagepath']?? null;
        $this ->imageFile=$data['imageFile']?? null;
    }


    public function save(){
        $errors=[];
        if (!$this->title){
            $errors[]="product title is required";
        }

        if ($this-> price ){
            $errors[]="product price is required";
        }
        if (!is_dir(__DIR__.'../public/images') ){
            mkdir(__DIR__.'../public/images');
        }
        
    }
}


?>