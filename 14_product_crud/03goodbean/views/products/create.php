<h1>create new products</h1>
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
    <h1>Products CRUD</h1>
 //create a link and after button has been clicked.    
<p>
<a  href="create.php"class="btn btn-success">Create Product</a>
</p>

<form>
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="submit" >search</button>
  <input type="text" class="form-control" placeholder="Search for products" name="search" value="<?php echo $search ?>">
</div>

</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php //putting index here?> 
    <?php foreach($products as $i=>$products): ?>
        <tr>
      <th scope="row"><?php echo $i+1?></th>
      <?PHP //output image ?>
      <td>
        <img src="<?php echo $products['image']?>"class="thumb-image">
      </td>
      <td><?php echo $products['title']?></td>
      <td><?php echo $products['price']?></td>
      <td><?php echo $products['create_date']?></td>
      //update 
      <td><a href="update.php?id=<?php echo $products['id']?>"><button class="btn btn-sm btn-outline-primary">Edit</button></a>
      <form style="display:inline-block" method="POST" action="delete.php">
        <input type="hidden" name="id" value="<?php echo $products['id']?>">
        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
      </form>
     

      
</td>
    </tr>
        
        <?php endforeach;?> 
        
     
  </tbody>
</table>
  </body>
</html>



