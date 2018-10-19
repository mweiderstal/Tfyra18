<?php

class person{
var $namn;

//konstruktor
function __construct($namn){
  $this->namn = $namn;
}

//ge namn
function setNamn($namn){
  $this->namn = $namn;
}

//hämta namnet
function getNamn(){
  return $this->namn;
}
}
 ?>
