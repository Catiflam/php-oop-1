<?php
class Movie{

  public $name;
  public $category;
  public $price;

  public $discount;


  public function __construct(

    $name,
    $category,
    $price,
  ){
    $this->name = $name;
    $this->category = $category;
    $this->price = $price;
    $this->setDiscount($price);
  }

  public function setDiscount($price){
    $this->discount = $price > 10 ? 5 : 0;
  }
  public function finalPrice($price){
    $final_price =$this->price - ($this->price / 100 * $this->discount);
    return "$ $final_price";

  }


} 
