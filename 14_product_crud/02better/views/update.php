
<?php
/**@var $pdo\PDO */

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//redict by the id
$id=$_GET['id']??null;

if(!$id){
    header('Location: index.php');
    exit;
}
$statement=$pdo->prepare('SELECT *FROM products WHERE id=:id');
$statement->bindValue(':id',$id);
$statement->execute();
$products=$statement->fetch(PDO:: FETCH_ASSOC);

echo '<pre>';
var_dump($products);
echo '</pre>';
exit;

$errors=[];

//cannot see the $title because it is inside the if 
//therefore we need 
$title= $products['title'];
$price=$products['price'];
$description=$products['description'];

//PRINT THE REQUEST METHOD
//echo $_SERVER['REQUEST_METHOD'].'<br>';
//super method
if($_SERVER['REQUEST_METHOD']=='POST'){

$title=$_POST['title'];//TEST
$description=$_POST['description'];
$price=$_POST['price'];




if(!$title){
  $errors[]='Product title is required';
}
if(!$price){
  $errors[]='Product price is required';
}
//creating image folder before move the image is_dir
if(!is_dir('images')){
  mkdir('images');
}



//only put the not empty array into db
if (empty($errors)){
//checking wether the image has been loaded 
//moving from ['tmp_name'] to somewhere else
$image=$_FILES['image'] ?? null;
$imagePath=$products['image'];
//delete old image



//check the image
//echo '<pre>';
//var_dump($image);
//echo '</pre>';
//exit;
//even image is empty and there's still having some in there  by checking the image :if($image &&$image['tmp_name'])
if($image &&$image['tmp_name']){
    if($products['image']){
        //unlink it removed
        unlink($products['image']);
    }


  //moving to random dictory by creating image folder before move the image
  $imagePath='images/'.randomString(8).'/'.$image['name'];
  //make dictory
  mkdir(dirname($imagePath));



  //avoid the overide
  move_uploaded_file($image['tmp_name'],$imagePath);
}


  //safe statement from users 
$statement=$pdo->prepare("UPDATE  products SET (title=:tilte,image=:image,description=:description,price=:price WHERE id=:id);
VALUES(:title,:image,:description,:price,:date)");

//':title',$title is from the post 
$statement->bindValue(':title',$title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description',$description);
$statement->bindValue(':price',$price);
$statement->bindValue(':title',$title);
$statement->bindValue(':id',$id);
$statement->execute();
//REDIRECT USERS 
header('Location:index.php');
 }
}
function randomString ($n){


  $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str='';
  for($i=0;$i<$n;$i++){
    $index =rand(0,strlen($characters)-1);
    $str.=$characters[$index];
  }
  return $str;
}


//saving the image as a random string:


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php //include_once 'views/partials/header.php ?>
    <p>
        <a href="index.php" class="btn btn-secondary">Go back to Products</a>
    </p>






    <h1>Update Product<b><?php echo $products['title']?></b></h1>

    <?php include_once "form .php"?>

<?php //waring for the error?>
<?php if (!empty($errors)):?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
       <div><?php echo $error ?></div>
      <?php endforeach;?>
  </div>
<?php endif;?>
  <form action=" " method="post" enctype="multipart/form-data">
    //display some image

    <?php if ($product['image']):   ?>
        <img src="<?php echo $product['image']?>" class="update-image">

        <?php endif;?>
  <div class="mb-3">
    <label >Product Image</label>
    <br>
    <input type="file" name="image"> 
    <br>
  </div>
  <div class="mb-3">
    <label >Product Title</label>
    //save the title 
    <input type="text" name="title" class="form-control" value="<?php echo $title?>"> 
  </div>
  <div class="mb-3">
    <label >Product Description</label>
    <textarea  class="form-control" name="description"><?php echo $description?> </textarea>
  </div>
  <div class="mb-3">
    <label >Product Price</label>
    <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price?>"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </body>
</html>









