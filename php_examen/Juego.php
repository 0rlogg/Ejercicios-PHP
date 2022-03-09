<?php /** @noinspection PhpMultipleClassDeclarationsInspection */
include ('index.php');
include ('jugar.php');

//serializar valores ???
class Juego{

    private static int $jugada;
    private static int $max;
    private static int $min;
    private static int $num;


    public function __construct()
    {
        //funcion que inicia el juego, usa el operador de resolucion de ambito
        self::obtener_valores();
        if (self::$jugada>10)
            self::finjuego("false");
        self::generar_valor($_POST['resultado']);
        //self::generar_valor($_POST['resultado']);
        return (self::$num);//devuelve numero

    }

    static function generar_valor($rtdo){

        switch ($rtdo){
            case">":
                self::$min = self::$num;
                break;

            case"<":
                self::$max = self::$num;
                break;

            case"=":
                self::finJuego("true");

                break;

        }
        self::$num = (self::$min+self::$max)/2;}

    static function obtener_valores(){
        self::$min = 1;
        self::$max = 1024;
        self::$jugada = 1;
    }
}






//INVOCAR Jugada::jugar();

//jugarphp recupero valores de la clase para los textos
//escribir en jugar.php
//$jugada::Jugada::getJugada();
//$num::Jugada::getnum();
//$max::JUgada::getmax();
//$min::Jugada::getmin();
//Enviar al index si entro a jugar php desde navegador