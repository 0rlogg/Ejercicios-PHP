<?php
class Operacion
{
    protected $op1;
    protected $op2;
    protected $operador;

    const   ERROR =-1;
    const REAL =1;
    const RACIONAL =2;

    public static function tipo_operacion(String $cadena):int{

        $tipo =  self::ERROR;
        $racional= "[1-9][0-9]*\/[1-9][0-9]*";
        $entero="(0|[1-9][0-9]*)";
        $real="(0|[1-9][0-9]*)(\.[0-9]*)?";
        $op_real="[\+|\-|\*|\/]";
        $op_racional="[\+|\-|\*|\:]";

        //operacion real ??
        $expresion_real = "#^$real$op_real$real$#";
        var_dump($expresion_real);
        if (preg_match( $expresion_real,$cadena, $resultado))
            $tipo = self::REAL;

        $expresion_racional1 ="#^$racional$op_racional$entero$#";
        $expresion_racional2 ="#^$racional$op_racional$racional$#";
        $expresion_racional3 ="#^$entero$op_racional$racional$#";
        if (preg_match( $expresion_racional1,$cadena, $resultado)||
            preg_match( $expresion_racional2,$cadena, $resultado)||
            preg_match( $expresion_racional3,$cadena, $resultado)
        )
            $tipo = self::RACIONAL;
        //Racional


        //Real


        return  $tipo;


    }
    public function calcula(){
        $this->op1=6;
        echo "Valor de error".self::ERROR;
    }



}