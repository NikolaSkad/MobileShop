<?php

require('database/DBController.php');
require('database/Product.php');
require('database/Card.php');

$db=new DBController();

$product = new Product($db);
$best_phone = $product->getData();
$brands = $product->getDataBrand();
//Card object
$Card = new Card($db);


?>
