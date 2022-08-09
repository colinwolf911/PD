
<?php

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//image=&title=&description=+&price=
//key value pair and seperated  by using get it will shows mage=&title=oneplus&description=+brand+news+&price=10000
//therefore post is more safty
/*echo '<pre>';
var_dump($_POST);
echo '</pre>';*/
//because we don't have anything to post therefore there are a lot error 
//we need to check
//we need use super global server and now need to dump it now 
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';
//exit;

//upload the files supergobla  //next add attributes to the forms enctype="multipart/form-data"

//<form action=" " method="post" enctype="multipart/form-data">
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';
//exit;


$errors=[];

//cannot see the $title because it is inside the if 
//therefore we need 
$title=' ';
$price=' ';
$description=' ';

//PRINT THE REQUEST METHOD
//echo $_SERVER['REQUEST_METHOD'].'<br>';
//super method
if($_SERVER['REQUEST_METHOD']=='POST'){
 $title=$_POST['title'];//TEST
$description=$_POST['description'];
$price=$_POST['price'];
$date=date('Y-m-d H:i:s');
//insert statement from user
//$pdo->prepare("INSERT INTO products (title,image,description,price,create_date)
//VALUE('$title',' ','$description',$price,'$date')");
//have to check the not statement !$title statisied $titile

//$errors=[] to check the errors such as didn't providing title etc price ...
//$errors=[];errors has to be moved forward before exho servers to see
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
$imagePath='';
//check the image
//echo '<pre>';
//var_dump($image);
//echo '</pre>';
//exit;
//even image is empty and there's still having some in there  by checking the image :if($image &&$image['tmp_name'])
if($image &&$image['tmp_name']){
  //moving to random dictory by creating image folder before move the image
  $imagePath='images/'.randomString(8).'/'.$image['name'];
  //make dictory
  mkdir(dirname($imagePath));
  echo '<pre>';
  var_dump($_FILES);
  echo '</pre>';


  //avoid the overide
  move_uploaded_file($image['tmp_name'],$imagePath);
}


  //safe statement from users 
$statement=$pdo->prepare("INSERT INTO products (title,image,description,price,create_date)
VALUES(:title,:image,:description,:price,:date)");

//':title',$title is from the post 
$statement->bindValue(':title',$title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description',$description);
$statement->bindValue(':price',$price);
$statement->bindValue(':title',$title);
$statement->bindValue(':date',$date);
$statement->execute();
//REDIRECT USERS 
header('Location:index.php');
 }
}


//saving the image as a random string:
function randomString ($n){


  $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str='';
  for($i=0;$i<$n;$i++){
    $index =rand(0,strlen($characters)-1);
    $str.=$characters[$index];
  }
  return $str;
}

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
    <h1>create new Product</h1>

<?php //waring for the error?>
<?php if (!empty($errors)):?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
       <div><?php echo $error ?></div>
      <?php endforeach;?>
  </div>
<?php endif;?>
  <form action=" " method="post" enctype="multipart/form-data">
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









