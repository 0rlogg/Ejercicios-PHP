<?php

abstract class Poligonos{

    //longitud base
    //longiutud altura
    //nlados
    //tres clases mas rectangulo, triangulo y cuadrado
    //metodo dime lados
    //funcion area
    //getlados

        protected $base;
        protected $altura;
        protected $nLados;

    public function __construct($base, $altura, $nLados){

        $this->altura=$altura;
        $this->base=$base;
        $this->nLados=$nLados;
    }

    public function getLados(){

        }

}