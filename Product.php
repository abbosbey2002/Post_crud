<?php 

require_once "config/bootstrap.php";

$product_id=$_GET['id'];

$product=Post::getProduct($product_id)[0];

// delete product  




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $product->title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="card container mt-4
  
    <h5 class="card-title"><?= $product->title ?></h5>
    <textarea cols='15' rows='15'  class="form-control post_body" name='body' id="floatingTextarea"><?= $product->body ?> </textarea>
   <div class="container m-4">
    <a href='Delete.php?id=<?= $product_id ?>' class='btn btn-danger'> Delete </a>
    <a href='Update.php?id=<?= $product_id ?>' class='btn btn-primary'> Update </a>
   </div>

</div>
    
</body>
</html>