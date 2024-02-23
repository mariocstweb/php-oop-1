<?php
// Definisco la classe Movies
class Movies
{
  // Attributi
  public $name;
  public $genre;
  public $duration_minutes;
  public $platform;
  public $director;

  public $actors = [];
  

  // Costruttore
  public function __construct($name, $genre, $duration_minutes, $platform, $director, $actors =[]){
    $this->name = $name;
    $this->genre = $genre;
    $this->duration_minutes = $duration_minutes;
    $this->platform = $platform;
    $this->director = $director;
    $this->actors = $actors;
  }

  // Funziona per formattare la durata del film
  public function getFormattedTime() {
    // Calcolo le ore
    $hours = floor($this->duration_minutes /60); 
    // Calcolo i minuti
    $minuts= $this->duration_minutes %60;
    return $hours .":". $minuts;
  }
}

class Director
{
  public $name;
  public $nationality;

  public function __construct($name, $nationality){
    $this->name = $name;
    $this->nationality = $nationality;
  }
}

class Actor
{
  public $name;
  public $nationality;

  public function __construct($name, $nationality){
    $this->name = $name;
    $this->nationality = $nationality;
}
}

$director1 = new Director('Michael Bay', 'USA');
$director2= new Director('Chad Stahelski', 'USA');

$actors1 = [new Actor('Willem Dafoe', 'USA')];
$actors2 = [new Actor('Pippo', 'ITA')]; 

$movies1 = new Movies('Transformers', 'Action', 144, 'Netflix', $director1, $actors1);
$movies2 = new Movies('John Wick', 'Crime', 101, 'Amazon', $director2, $actors2 );


// Unico array da iterare
$movies =  [ $movies1, $movies2 ];
// var_dump($movies1);
// var_dump($movies2);
// echo $movies1->getFormattedTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <div class="container">
      <ul>
        <?php foreach($movies as $movie) :?>
          <li>Name: <?php echo $movie->name; ?>, Genre: <?php echo $movie->genre; ?>, Duration: <?php echo $movie->getFormattedTime() ?>h, Platform: <?php echo $movie->platform; ?> <?php echo $movie->director->name ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  </main>
</body>
</html>