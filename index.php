<?php

require_once __DIR__ . './Modules/db.php';


$product_1 = new Movie("Batman", "super-hero", 15);
$product_2 = new Movie("Mission-impossible","action", 10);

$product = [
  $product_1,
  $product_2,
];
// $product_1->name = 'Batman';
// $product_1->category ='super-hero';
// $product_1->time = 2;

// $product_2 = new Movie();
// $product_2->name ='Mission-impossible';
// $product_2->category = 'action';
// $product_2->time = 2;

var_dump($product);
