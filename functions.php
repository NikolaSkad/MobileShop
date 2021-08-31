<?php

require('database/DBController.php');
require('database/Product.php');

$db=new DBController();
$product = new Product($db);


?>
