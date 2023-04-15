<?php 

require_once 'config/bootstrap.php';

$posts=Post::getAll();

// print_r($posts);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbos's blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel='stylesheet' href='style.css'>
</head> 
<body  >

  <header>
    <nav class="navbar navbar-light">
      <a class='btn ' href='Create.php'> Add a product </a>
      
</nav>
</header>
   
    
    <p>
        <?php  foreach($posts as $post): ?>
            <div class="card">
  <h5 class="card-header bg-light">Featured</h5>
  <div class="card-body bg-light"> 
    <h5 class="card-title"><?= $post->id .". ". $post->title  ?></h5>
    <textarea  class="form-control post_body" name='body' id="floatingTextarea"><?= $post->body ?> </textarea>
    <a href="Product.php?id=<?= $post->id ?>" class="btn btn-primary m-3">Go somewhere</a>
  </div>
</div>
            <?php  endforeach; ?>
       </p> 
       
       
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>