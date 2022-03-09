<?php

class Racional
{
    //atributos
        private $numerador;
        private $denominador;

    //metodos

    public function sumar(Racional $r):Racional{
        $den = $this ->denominador * $r->denominador; //aunque sea un atributo privado php nos
        // permite acceder a cualquier otro objeto privado mientras sea de la misma clase
        $num = $this -> denominador * $r->numerador+$this->numerador * $r->denominador;
        $resultado = new Racional($num,$den);
        return $resultado;
    }

    public function restar(Racional $r):Racional{
        $den = $this ->denominador * $r->denominador;
        $num = $this -> denominador * $r->numerador-$this->numerador * $r->denominador;
        $resultado = new Racional($num,$den);
        return $resultado;
    }

    public function multiplicar(Racional $r):Racional{
        $den = $this ->denominador * $r->denominador;
        $num = $this -> numerador * $r->numerador;
        $resultado = new Racional($num,$den);
        return $resultado;
    }

    public function dividir(Racional $r):Racional{
        $den = $this ->denominador * $r->numerador;
        $num = $this -> numerador * $r->denominador;
        $resultado = new Racional($num,$den);
        return $resultado;
    }


    //Constructor
        public function Racional($num, $den){
            //$numerador = $num No se hace asi
            //forma correcta debajo
            //-> es un operador de indireccion
                $this -> numerador = $num;
                $this -> denominador = $den;}


    public function ver_Racional(){
            return "<h1>$this->numerador/$this->denominador<h1/>";
    }

    public function __toString(): string
    {
        return $this->numerador/$this->denominador;
        // TODO: Implement __toString() method.
    }

    //Metodos magicos
    public function __construct($num = 1, $den = 1)
    {
    //echo "estoy en racional";
    //$this->numerador = $num;
    //$this->denominador = $den;

        //Segunda parte
        if (is_string($num)){
            $numero = explode("/",  $num);
            $num = $numero[0];
            $den = $numero[1];
        }
            $num = intval($num);
            $den = intval($den);

        $this -> numerador = $num;
        $this -> denominador = $den == 0 ? 1 : $den;
    }

    public static function sumar_2 (Racional $r1, $r2):Racional{// metodo de la clase, comun para todo, un poco mas lento de acceder
        $den = $r1 ->denominador * $r2->denominador;
        $num = $r1 -> denominador * $r2->numerador+$r1->numerador * $r2->denominador;
        $resultado = new Racional($num,$den);
        return $resultado;
    }

    //Importante especificare marametros y metodos con comentarios



}

?>