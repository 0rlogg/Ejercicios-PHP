<?php

class Fechas
{

    private $dia;
    private $mes;
    private $year;

    public function __construct( $dia = null,  int $mes = null,  int $year = null)
    {
        if (is_string($dia)) {
            $fecha = explode("/", $dia);
            $dia = $fecha[0];
            $mes = $fecha[1];
            $year = $fecha[2];
        }
        $this->dia = $dia ?? date("d");
        $this->mes = $mes ?? date("m");
        $this->year = $year ?? date("Y");

        $this->valida_fecha();

    }

    private function valida_fecha(){
        if (checkdate($this->mes, $this->dia, $this->year)==false) {
            $this->dia = date("d");
            $this->mes = date("m");
            $this->year = date("Y");
        }
    }

    public function __toString()
    {
        return "$this->dia/$this->mes/$this->year";
    }
}

