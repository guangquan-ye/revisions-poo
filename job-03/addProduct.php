<?php 

require_once 'ProductModel.php';

$product = new Product();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    
    $product->createProduct($id, $name, $price, $description, $quantity);
  
}


?>

<form action="" method="post">
    <input type="number" name="id" placeholder="id">
    <input type="text" name="name" placeholder="name">
    <input type="number" name="category_id" placeholder="category">
    <input type="number" name="price" placeholder="price">
    <input type="text" name="description" placeholder="description">
    <input type="number" name="quantity" placeholder="quantity">
   
    <input type="submit" name="submit" value="submit">