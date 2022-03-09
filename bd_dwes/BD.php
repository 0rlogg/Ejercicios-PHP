<?php

require "configuracion.php";

class BD
{
    private $conexion;
    private $error;

    public function __construct()
    {

        try {
            $this->conexion = new mysqli(localhost, root, password, dwes);
        } catch (Exception $ex) {
            $this->error = "Error conectando " . $ex->getMessage();
        }
    }

    public function getError()
    {
        return "Error en la conexion <span style='color:red'>: $this->error</span>";
    }

    /**
     * @return un array indexado de cada familia (cod, nombre)
     * cada elemento del array será un array asociativoa [cod, nombre]
     */
    public function obtener_familias(): array{
        $consulta = "select * from familia";
        $familias =[]; //La vaiable de retorno
        $resultado = $this->conexion->query($consulta);
        $fila = $resultado->fetch_assoc();
        while ($fila){
            $familias[]=$fila;
            $fila = $resultado->fetch_assoc();
        }
        return $familias;
    }
    public function obtener_productos (String $familia){
        $consulta = "select * from producto where familia = '$familia'";
        $productos =[]; //La vaiable de retorno
        $resultado = $this->conexion->query($consulta);
        $fila = $resultado->fetch_assoc();
        while ($fila){
            $productos[]=$fila;
            $fila = $resultado->fetch_assoc();
        }
        return $productos;

    }

    public function actualizar_producto($nombre, $nombre_corto, $precio, $descripcion){
        $consulta = <<<FIN
                    update producto
                    set nombre = '$nombre', 
                        nombre_corto = '$nombre_corto',
                        PVP= '$precio',
                        descripcion = '$descripcion';
FIN;
        $resultado = $this->conexion->query($consulta);
;
    }

}