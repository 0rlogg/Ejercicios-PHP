<?php

class Persona{

    //atributos

    private $nombre;
    private $apellido;
    private $especialidad;

    //metodos


    //Constructor
    public function Persona($n, $a, $e){
        //$numerador = $num No se hace asi
        //forma correcta debajo
        //-> es un operador de indireccion
        $this -> nombre = $n;
        $this -> apellido = $a;
        $this -> especialidad = $e;
    }

    public function __construct(string $nombre = null, string $apellido = null, string $especialidad = null){

        if (is_string($nombre)) {
            $persona = explode("/", $nombre);
            $dia = $persona[0];
            $mes = $persona[1];
            $year = $persona[2];
        }
        $this->nombre = $nombre ?? $persona[0];
        $this->apellido = $apellido ?? $persona[1];
        $this->especialidad = $especialidad ?? $persona[2];
    }

    public function ver_Persona(){
        return "<h1>$this->nombre/$this->apellido/$this->especialidad<h1/>";
    }

    public function __toString():string{
        return "<h1>$this->nombre/$this->apellido/$this->especialidad<h1/>";
        // TODO: Implement __toString() method.
    }
    //Metodos magicos




    //Importante especificare marametros y metodos con comentarios



}