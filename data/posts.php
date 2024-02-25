<?php
require_once __DIR__ ."/../models/movies.php";
require_once __DIR__ ."/../models/director.php";
require_once __DIR__ ."/../models/actors.php";


$director1 = new Director('Michael Bay', 'USA');
$director2= new Director('Chad Stahelski', 'USA');

$actors1 = [new Actor('Willem Dafoe', 'USA')];
$actors2 = [new Actor('Pippo', 'ITA')]; 

$movies1 = new Movies('Transformers', 'Action', 144, 'Netflix', 'https://play-lh.googleusercontent.com/9levGXBvLpW4Ggehw-vmKYZT8ILbxZeptaDRh4c9WfC5aQcu-loIQUGM4mmzxhEajgSJ=w240-h480-rw', $director1, $actors1,);
$movies2 = new Movies('John Wick', 'Crime', 101, 'Amazon', 'https://pad.mymovies.it/filmclub/2014/08/105/locandina.jpg' ,$director2, $actors2  );


// Unico array da iterare
$movies =  [ $movies1, $movies2 ];
