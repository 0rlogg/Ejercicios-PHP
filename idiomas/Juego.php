<?php

class Juego{

    private static $jugada;
    private static $max;
    private static $min;
    private  static $num;

    static public function jugar(){
        self::obtener_valores();
        if (self::$jugada>10)
                self::fin_juego();
        self::generar_valor($_POST['resultado_jugada']);
        self::guardar_valores();
        return (self::$num);
    }

    public function __construct($min, $max, $num, $jugada){


    }

    public function menor(){
        $min=$this->num;
        $num = intdiv($min+$this->max, 2);
    }

    public function mayor(){
        $max=$this->num;
        $num = intdiv($this->min+$this->max, 2);
    }

    public function igual(){
        header ("Location:fin.php?jugada=$this->jugada");
    }

    public function obtener_valores(){

    }

    public function guardar_valores(){


    }


}