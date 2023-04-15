<?php

require_once "config/bootstrap.php";

$product_id=$_GET['id'];

$product=Post::getProduct($product_id)[0];


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title=$_POST['title'];
    $body=$_POST['body'];

    $result=POST::Update($title, $body, $product_id);

    if($result===1){
        header("location:Product.php?id=$product_id");
       }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

<div class="container mt-4">

    <form method="POST" action=''>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value='<?=$product->title ?>' class="form-control" id="title" name='title' aria-describedby="title">
            <div id="emailHelp" class="form-text">We'll share your text with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Body</label>
           
  <textarea  rows='14' class="form-control" placeholder="Leave a comment here" name='body' id="floatingTextarea"><?= $product->body ?> </textarea>



        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>
    
</body>
</html>