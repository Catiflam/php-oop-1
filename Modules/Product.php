<?php

class Product{

  public $title;
  public $category;
  public $productor;
  
  
  public function __construct(
    string $title,
    string $category,
    string $productor,
  )
  {
    $this->setTitle($title);
    $this->category = $category;
    $this->productor = $productor;
  }

  public function setTitle($title){
    if(empty($title))
    return false;
  $this->title = $title;
  }

  public function getDetails(){
    return 
    "Titolo:$this->title,<br>
     Categoria:$this->category,<br> 
     Produttore:$this->productor";
  }
};