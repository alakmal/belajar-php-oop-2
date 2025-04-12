<?php

require_once "data/Product.php";

use Data\Product;

$product = new Product("Apple", 1000);

echo $product->getName() . PHP_EOL;

// $product->name = Orange ;  // error
// $product->price = 2000 ; // error