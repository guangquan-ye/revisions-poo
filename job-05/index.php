<?php 

require_once 'Product.php';

$product = new Product();
$product->setId(7);

$productInfo = $product->getProductById();

$product1 = new Product($productInfo['id'], $productInfo['name'], $productInfo['category_id'], [$productInfo['photos']], $productInfo['price'], $productInfo['description'], $productInfo['quantity'], $productInfo['createdAt'], $productInfo['updatedAt']);


echo "<pre>";
var_dump($product1);
echo "</pre>";

$category = $product1->getCategory();

echo "<pre>";
var_dump($category);
echo "</pre>";

?>