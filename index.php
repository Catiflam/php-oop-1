<?php

require __DIR__ . './Modules/Product.php';
require __DIR__ . './Modules/Movie.php';
require __DIR__ . './Modules/Serie.php';

// $product = new Product('titolo','categoria','sony');
// $movie = new Movie('Spider-Man','Fantasy','Marvel',2001, 120);
// $serie_tv = new SerieTV('Stranger-Things','Fantasy', 2019, 2023,'episodi 12','stagioni 4');

$products = [
  new Movie('Spider-Man','azione, fantascienza, drammatico, sentimentale','Columbia Pictures, Marvel Enterprises, Laura Ziskin Productions',2002, 121),
  new SerieTV('Stranger-Things','fantascienza, drammatico, orrore, thriller', 2016, 2023,'episodi 34','stagioni 5'),
  new Movie('Mission-impossible','azione, spionaggio, thriller','Sony',1996, 110),
  new SerieTV('Loki','azione, avventura, fantastico, fantascienza, supereroi', 2021, 2023,'episodi 6','stagioni 2'),
  new Movie('Steve--Jobs','biografico, drammatico','Universal Pictures',2015, 122),
  new SerieTV('Scrubs','commedia, medico', 2001, 2010,'episodi 182','stagioni 8'),
  new Movie('The-Matrix','fantascienza, azione','Warner Bros',1999, 136),
  
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Object-oriented-programming-1</title>
  <!-- BOOTSTRP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <div class="container mt-5">
    <h1> Product List</h1>
    <div class="row g-3">
      <?php foreach($products as $product):?>
      <div class="col">
        <div class="card">
      <div class="card-body">
        <?= $product->getDetails()?>
      </div>
    </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
  
  
</body>
</html>