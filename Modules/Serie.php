<?php
class SerieTv extends Product{
  public $title;
  public $category;
  public $aired_from_year;
  public $aired_to_year; 
   public $number_of_episodes;
   public $number_of_seasons;

   public function __construct(
    string $title,
    string $category,
    float $aired_from_year,
    float $aired_to_year,
    string $number_of_episodes,
    string $number_of_seasons,
   ){
    parent::__construct($title, $category,'');

    $this->aired_from_year = $aired_from_year;
    $this->aired_to_year = $aired_to_year;
    $this->number_of_episodes = $number_of_episodes;
    $this->number_of_seasons = $number_of_seasons;
   }

   public function getDetails(){
    return 
    "<strong>Titolo:<strong/>$this->title,<br> 
    <strong>Categoria:<strong/>$this->category,<br> 
    <strong>Anno d'uscita,Primo episodio:<strong/>$this->aired_from_year,<br> 
    <strong>Anno d'uscita,Ultimo episodio:<strong/>$this->aired_to_year,<br>
    <strong>Episodi:<strong/>$this->number_of_episodes,<br>
    <strong>Stagioni:<strong/>$this->number_of_seasons";
  }

};


