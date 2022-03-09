<?php

class PersonaAmbulatorio {

    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $direccion;

    public function __construct(String $n, String $a, Int $e, String $d){

        $this->nombre = $n;
        $this->apellido = $a;
        $this->edad = $e;
        $this->direccion = $d;}

    public function CrearTurno(){

    }

    public function HacerIncidencia(){

    }

}