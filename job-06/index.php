<?php 

require_once 'Product.php';
require_once 'Category.php';

$product = new Product();
$category = new Category();

$product->setId(7);

$productInfo = $product->getProductById();

$category->setId($productInfo['category_id']);

$product1 = new Product($productInfo['id'], $productInfo['name'], $productInfo['category_id'], [$productInfo['photos']], $productInfo['price'], $productInfo['description'], $productInfo['quantity'], $productInfo['createdAt'], $productInfo['updatedAt']);

$category = $product1->getCategory();
$categoryInfo = $category->getProducts();

echo "<pre>";
var_dump($categoryInfo);
echo "</pre>";



// echo "<pre>";
// var_dump($product1);
// echo "</pre>";



// echo "<pre>";
// var_dump($category);
// echo "</pre>";

?>