<?php

require_once 'config/bootstrap.php';

$product_id=$_GET['id'];

$result=Post::Delete($product_id);

if($result==1){
    header("location:index.php");
    exit();
}


