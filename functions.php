<?php

require('database/DBController.php');
require('database/Product.php');
require('database/Card.php');

$db=new DBController();
$product = new Product($db);

//Card object
$Card = new Card($db);
?>
