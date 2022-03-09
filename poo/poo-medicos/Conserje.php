<?php

class Conserje extends PersonaAmbulatorio {
private string $ubicacion;

    public function __construct(string $n, string $a, int $e, string $d){
        parent::__construct($n, $a, $e, $d);
        $this->ubicacion;
    }

    public function AvisoMedico(){

    }

    public function AvisoEnfermera(){


    }




}