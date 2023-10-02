<?php

class Product{

  public $title;
  public $category;
  public $cinema;
  public $cast;
  
}
class Movie extends Product{

  public $title;
  public $category;
  public $cinema;
  public $cast;
 public $published_year;
 public $running_time;

} 
class SerieTv extends Product{
  public $title;
  public $category;
  public $cast;
  public $aired_from_year;
  public $aired_to_year; 
   public $number_of_episodes;
   public $number_of_seasons;
}

$product = new Product();
$movie = new Movie();
$serie_tv = new SerieTV();

echo '<h1>Book<h1/>';
var_dump($product);

echo '<hr/><h1>Movie<h1/>';
var_dump($movie);

echo '<hr/><h1>Serie<h1/>';
var_dump($serie_tv);