<?php 

require_once 'Product.php';


$product = new Product();


$product->setId(7);

$product1 = $product->findOneById(1);




echo "<pre>";
var_dump($product1);
echo "</pre>";
?>