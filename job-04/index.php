<?php


require_once 'Product.php';



$product = new Product();

$products = $product->getProductById("1");


$product3 = new Product($products['id'], $products['name'], $products['category_id'], [$products["photos"]], $products['price'], $products['description'], $products['quantity'], $products['createdAt'], $products['updatedAt']);
echo "<pre>";
var_dump($product3);
echo "</pre>";

