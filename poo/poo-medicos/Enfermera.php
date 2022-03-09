<?php
include ('PersonaAmbulatorio.php');
class Enfermera extends PersonaAmbulatorio {
    public int $AnyoTitulacion; //$at es anyotitulacion

    public function __construct(string $n, string $a, int $at, int $e, string $d){
        parent::__construct($n, $a, $e, $d);
        $this->AnyoTitulacion= $at;
    }

    public function AvisoMedica(){

    }

    public function HacerCura(){

    }

    public function Vacunar(){

    }

}