<?php

class Racional2
{
    //atributos
    private $numerador;
    private $denominador;

    //métodos mágico construct

//Constructor
    public function __construct($num = 1, $den = 1)
    {

        if (is_string($num)) {
            $numero = explode("/", $num);
            $num = $numero[0];
            $den = $numero[1];
        }

        $num = intval($num);
        $den = intval($den);

        $this->numerador = $num;
        $this->denominador = $den == 0 ? 1 : $den;

    }

    public function sumar(Racional2 $r): Racional2
    {
        $den = $this->denominador * $r->denominador;//aunque sea un atributo privado php nos
        // permite acceder a cualquier otro objeto privado mientras sea de la misma clase
        $num = $this->denominador * $r->numerador + $this->numerador * $r->denominador;
        $resultado = new Racional2 ($num, $den);
        return $resultado;
    }

    public function restar(Racional2 $r): Racional2
    {
        $den = $this->denominador * $r->denominador;
        $num = $this->denominador * $r->numerador - $this->numerador * $r->denominador;
        $resultado = new Racional2 ($num, $den);
        return $resultado;
    }

    public function multiplicar(Racional2 $r): Racional2
    {
        $den = $this->denominador * $r->denominador;
        $num = $this->numerador * $r->numerador;
        $resultado = new Racional2 ($num, $den);
        return $resultado;
    }

    public function dividir(Racional2 $r): Racional2
    {
        $den = $this->denominador * $r->numerador;
        $num = $this->numerador * $r->denominador;
        $resultado = new Racional2 ($num, $den);
        return $resultado;
    }


    public function ver_racional()
    {
        return "<h1>$this->numerador/$this->denominador";

    }

    public function __toString()
    {
        return "$this->numerador/$this->denominador";
        // TODO: Implement __toString() method.
    }

    public static function sumar_2(Racional2 $r1, Racional2 $r2): Racional2{//metodo de la clase, comun para todo, un poco mas lento de acceder

        $den = $r1->denominador * $r2->denominador;
        $num = $r1->denominador * $r2->numerador + $r1->numerador * $r2->denominador;
        $resultado = new Racional2 ($num, $den);
        return $resultado;


    }


}
?>