<?php

class Racional {

    private $num;
    private $den;

    public function __construct($num, $den) {
        //opciones new Racional () =>1/1
        //opciones new Racional (5) =>5/1
        //opciones new Racional (5,2) =>5/2
        //opciones new Racional ("5/2") =>5/2
        //opciones new Racional ("5") =>5/1
        //
        //Otra sitiación no se instancia
        if (is_null($den)) {
            switch (is_numeric($num)) {
                case true:
                    $this->num = $num;
                    $this->den = 1;
                    break;
                case false:
                    if (is_null($num)) {
                        $this->num = 1;
                        $this->den = 1;
                    } else {
                        $this->num = (int) $num;
                        //if (strpos($num, "/") == FALSE) {
                        $this->den = (int) substr($num, strpos($num, "/") + 1);
                        //} else
                        //    $this->den = 1;
                    }
                    break;
            }
        } else {
            $this->num = $num;
            $this->den = $den;
        }
    }

    public function sumar(Racional $op1) {
        $num = $this->num * $op1->den + $this->den * $op1->num;
        $den = $this->den * $op1->den;
        return new Racional($num, $den);
    }

    public function restar(Racional $op1) {
        $num = $this->num * $op1->den - $this->den * $op1->num;
        $den = $this->den * $op1->den;
        return new Racional($num, $den);
    }

    public function multiplicar(Racional $op1) {
        $num = $this->num * $op1->num;
        $den = $this->den * $op1->den;
        return new Racional($num, $den);
    }

    public function dividir(Racional $op1) {
        $num = $this->num * $op1->den;
        $den = $this->den * $op1->num;
        return new Racional($num, $den);
    }

    public function __toString() {
        return ($this->num . "/" . $this->den);
    }

    /**
     * este método obtiene un racional simplificado del actual
     * @return Racional
     */
    public function simplificar() {
        //obtengo el menor y el mayor 
        echo "<h1>Vamos a simplificar$this->num /$this->den</h1>";
        $a = ($this->num > $this->den) ? $this->num : $this->den;
        $b = ($this->num > $this->den) ? $this->den : $this->num;

        $r = $a % $b;
        while (($r !== 0) && ($r !== 1)) {
            $a = $b;
            $b = $r;
            $r = $a % $b;
        }

        //Esto quire decir que puedo dividir los dòs entre el último número que resté
        echo "<h1>$this->num /$this->den  mcm  -$b-</h1>";
        if ($r === 0) {
            return ($this->num / $b) . "/" . ($this->den / $b);
        } else
            return ($this->num ) . "/" . ($this->den );
    }

}
