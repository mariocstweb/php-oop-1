<?php

class Movies
{
  // Attributi
  public $name;
  public $genre;
  public $duration_minutes;
  public $platform;
  public $image;
  public $director;
  public $actors = [];
  

  // Costruttore
  public function __construct($name, $genre, $duration_minutes, $platform,  $image, $director, $actors =[]){
    $this->name = $name;
    $this->genre = $genre;
    $this->duration_minutes = $duration_minutes;
    $this->platform = $platform;
    $this->image = $image;
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