<?php

require'Racional.php';

abstract class Operacion {

    //put your code here
    protected $op1;
    protected $op2;
    protected $operador;
    protected $operacion;
    static protected $tipo;

    const RACIONAL = 1;
    const REAL = 2;
    const ERROR = -1;

    public static function tipoOperacion($operacion) {
        self::$tipo = Operacion::ERROR;

        $numReal = '[0-9]+(\.[0-9]*)?';
        $numEntero = '[0-9]+';
        $op = '[\+|\-|\*|\/]';
        $numRacional = '[0-9]+\/[0-9]+';
        ;
        $opRacional = '[\+|\-|\*|\:]';
        ;


        $exp = "/^$numReal$op$numReal$/";
        if (preg_match($exp, $operacion)) {
            self::$tipo = Operacion::REAL;
        } else {
            $r = false;
            $exp = "/^$numRacional$opRacional$numRacional$/";
            if (preg_match($exp, $operacion)) {
                $r = true;
            }
            $exp = "/^$numRacional$opRacional$numEntero$/";
            if (preg_match($exp, $operacion)) {
                $r = true;
            }
            $exp = "/^$numEntero$opRacional$numRacional$/";
            if (preg_match($exp, $operacion)) {
                $r = true;
            }
            if ($r == TRUE) {
                self::$tipo = Operacion::RACIONAL;
            }
        }
        return self::$tipo;




        //if (ereg("\[09][+-*/][09]\\", $operacion))
        //    return self::REAL;
        // else
        // */
    }

    public function __construct($operacion) {


        $this->operacion = $operacion;
        $this->operador = $this->obtenerOperador($operacion);
        $this->op1 = $this->obtenerOperador1($operacion);
        $this->op2 = $this->obtenerOperador2($operacion);
    }

    private function obtenerOperador1($operacion) {
        $pos = strpos($operacion, $this->operador);
        return(substr($operacion, 0, $pos));
    }

    private function obtenerOperador2($operacion) {
        $pos = strpos($operacion, $this->operador);
        return (substr($operacion, $pos + 1));
    }

    private function obtenerOperador($operacion) {
        $pos = FALSE;
        if (($pos = strpos($operacion, "+")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;
            return "+";
        }
        if (($pos = strpos($operacion, "-")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;

            return "-";
        }
        if (($pos = strpos($operacion, "*")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;
            return "*";
        }
        if (($pos = strpos($operacion, ":")) !== FALSE) {
            $this->tipo = $this::RACIONAL;
            return ":";
        }
        if (($pos = strpos($operacion, "/")) !== FALSE) {
            $this->tipo = $this::REAL;
            return "/";
        }
        return $pos;
    }

    public function getOp1() {
        return $this->op1;
    }

    public function getOp2() {
        return $this->op2;
    }

    public function getOperador() {
        return $this->operador;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function __toString() {
        return "<br />$this->op1$this->operador$this->op2 = ";
    }

    public function describe() {
        $operacion = "<tr><th>Operando 1 </th> <th> $this->op1</th></tr>";
        $operacion.="<tr><th>Operando 2 </th> <th> $this->op2</th></tr>";
        $operacion.="<tr><th>Operación </th> <th> $this->operador</th></tr>";
        if (self::$tipo == Operacion::RACIONAL)
            $tipo = "Racional";
        else
            $tipo = "Real";
        $operacion.="<tr><th>Tipo de operacion  </th> <th> $tipo</th></tr>";
        return $operacion;
    }

    abstract public function opera();
}
