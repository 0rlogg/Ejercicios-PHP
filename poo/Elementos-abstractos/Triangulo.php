<?php

class Triangulo extends Poligonos{

public function __construct($base, $altura, $nLados){
    parent::__construct($base, $altura, $nLados);
}

    public function area(){
    return $this->base * $this->altura /2;
    }

}