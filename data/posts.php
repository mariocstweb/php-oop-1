<?php
require_once __DIR__ ."/../models/movies.php";
require_once __DIR__ ."/../models/director.php";
require_once __DIR__ ."/../models/actors.php";


$director1 = new Director('Michael Bay', 'USA');
$director2= new Director('Chad Stahelski', 'USA');

$actors1 = [new Actor('Willem Dafoe', 'USA')];
$actors2 = [new Actor('Pippo', 'ITA')]; 

$movies1 = new Movies('Transformers', 'Action', 144, 'Netflix', $director1, $actors1);
$movies2 = new Movies('John Wick', 'Crime', 101, 'Amazon', $director2, $actors2 );


// Unico array da iterare
$movies =  [ $movies1, $movies2 ];
