<?php

require __DIR__ . './Modules/Product.php';
require __DIR__ . './Modules/Movie.php';
require __DIR__ . './Modules/Serie.php';

$product = new Product('titolo','category','sony');
$movie = new Movie('titolo','category','studios',2001, 120);
$serie_tv = new SerieTV('titolo','category', 1989, 2003,'episodi 200','stagioni 6');

echo '<h1>Production<h1/>';
echo '<p>'. $product->getDetails(). '<p/>';

echo '<hr/><h1>Movie<h1/>';
echo '<p>'. $movie->getDetails(). '<p/>';

echo '<hr/><h1>Serie<h1/>';
echo '<p>'. $serie_tv->getDetails(). '<p/>';
