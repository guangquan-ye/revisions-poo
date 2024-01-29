<?php 

require_once 'Product.php';


$product = new Product(
    null,
    'T-shirt',
    1,
    ['https://picsum.photos/200/300'],
    1000,
    'a beautiful t-shirt',
    10,
    new DateTime(),
    new DateTime()
);
$product->create();


?>