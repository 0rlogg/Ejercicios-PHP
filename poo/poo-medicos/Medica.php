<?php

class Medica extends PersonaAmbulatorio{

    private $especialidad;
    private $anyotitulo;

    public function __construct(string $n, string $a, int $e, string $d){
        parent::__construct($n, $a, $e, $d);
        $this->especialidad;
        $this->anyotitulo;
    }

    public function PasarConsulta(){

    }

    public function __toString(){
    $texto = "<h2>Medico $this->nombre $this->apellido de $this->edad anyos. Especialidad $this->especialidad</h2>";
        // TODO: Implement __toString() method.
    }

}