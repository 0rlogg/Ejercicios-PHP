<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

//serializar valores ???
class Juego{

    private static int $jugada;
    private static int $max;
    private static int $min;
    public static int $num;
    private static int $intentos;
    private static int $jugadas_restantes;
    private static string $rtdo;

    public function __construct()
    {
        //funcion que inicia el juego, usa el operador de resolucion de ambito
        self::obtener_valores();
        if (self::$jugada>10)
            self::finjuego("false");
        self::generar_valor($_POST['rtdo']);
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
        self::$intentos = 10;
        self::$jugadas_restantes = self::$intentos - self::$jugada;
        self::$rtdo = $_POST['rtdo'];
        self::$num = self::$max/2;

    }

    /**
     * @return int
     */
    public static function getMin(): int
    {
        return self::$min;
    }

    /**
     * @return int
     */
    public static function getMax(): int
    {
        return self::$max;
    }

    /**
     * @return int
     */
    public static function getNum(): int
    {
        return self::$num;
    }


    /**
     * @return int
     */
    public static function getJugada(): int
    {
        return self::$jugada;
    }

    /**
     * @return int
     */
    public static function getIntentos(): int
    {
        return self::$intentos;
    }

    /**
     * @return int
     */
    public static function getJugadasRestantes(): int
    {
        return self::$jugadas_restantes;
    }

    /**
     * @return string
     */
    public static function getRtdo(): string
    {
        return self::$rtdo;
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