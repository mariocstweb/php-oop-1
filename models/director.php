<?php
class Director
{
  public $name;
  public $nationality;

  public function __construct($name, $nationality){
    $this->name = $name;
    $this->nationality = $nationality;
  }
}