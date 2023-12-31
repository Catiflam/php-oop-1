<?php

class Movie extends Product{

  public static $unite_misure = 'minute';
  public $title;
  public $category;
  public $productor;
 public $published_year;
 public $running_time;

 public function __construct(
  string $title,
  string $category,
  string $productor,
  float $published_year,
  float $running_time
){
  parent::__construct($title, $category, $productor);
  $this->published_year = $published_year;
  $this->running_time = $running_time;
} 
public function getDetails(){
  return 
  "<strong>Titolo:<strong/>$this->title,<br>
   <strong>Categoria:<strong/>$this->category,<br> 
   <strong>Produttore:<strong/>$this->productor,<br> 
   <strong>Anno d'uscita:<strong/>$this->published_year,<br>
   <strong>Durata:<strong/> $this->running_time";
}

};