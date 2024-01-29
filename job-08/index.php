<?php 

require_once 'Product.php';


$product = new Product();


echo "<pre>";
var_dump($product->findAll());
echo "</pre>";
?>