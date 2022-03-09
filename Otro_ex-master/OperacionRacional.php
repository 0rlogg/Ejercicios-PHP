<?php

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion {

    public function __construct($operacion) {
        parent::__construct($operacion);
        $this->op1 = new Racional($this->op1);
        $this->op2 = new Racional($this->op2);
    }

    public function opera() {
        switch ($this->operador) {
            case '+':
                $resultado = $this->op1->sumar($this->op2);
                break;
            case '-':
                $resultado = $this->op1->restar($this->op2);
                break;
            case '*':
                $resultado = $this->op1->multiplicar($this->op2);
                break;
            case ':':
                $resultado = $this->op1->dividir($this->op2);
                break;
            default :
                $resultado = FALSE;
        }
        return $resultado;
    }

    public function __toString() {
        $r = parent::__toString();
        $r.= $this->opera();
        return $r;
    }

    public function describe() {
        $r = "<table border=1><tr><th>Cocepto</th> <th>Valores</th></tr>";
        $r .= parent::describe();
        $r.= "<tr><th>Resultado </th><th>" . $this->opera() . "</th></tr>";
        $rtdo = $this->opera();
        $r.= "<tr><th>Resultado simplificado</th><th>" . $rtdo->simplificar() . "</th></tr>";
        $r.= "</table>";
        return $r;
    }

}
