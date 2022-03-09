<?php

class Operacion{
    private $operador1;
    private $operador2;
    private $operador;
    const ERROR = -1;
    const REAL = 1;// expresion regular para numeros reales
    const RACIONAL = 2;//expresion regular para numeros racionales


public static function tipo_operacion(string  $cadena):int{
    //static elemento de la clase compartido por todos
    //me puede devolver real racional o error

    //this->operador1 = 5;//es erroneo porque en un elemento estatico no se puede acceder a elementos no estaticos ya que no se puede referencias
    //dentro de un elemento estatico solo se puede acceder a otros elementos estaticos
    $tipo = self::ERROR;

    //comprobar expresiones
    $exp_numero_real="[0-9]*(.[0-9]*)?";
    $exp_numero_racional="[0-9]\/[1-9][0-9]*";
    $exp_numero_entero="[1-9][0-9]*";
    $operador_real="[+\-\*\/\]";
    $operador_racional="[+\-\*\:\]";

    $expresion_1="$exp_numero_real$operador_real$exp_numero_real";
    if ($expresion_1){
        $tipo = self::REAL;}

    $expresion_2="$exp_numero_racional$operador_racional$exp_numero_racional";
    $expresion_3="$exp_numero_real$operador_racional$exp_numero_racional";
    $expresion_4 = "$exp_numero_entero$operador_racional$exp_numero_racional";
        if ($expresion_2|$expresion_3|$expresion_4){
            $tipo = self::RACIONAL;}

return $tipo;}

public function calcula(){




}}




