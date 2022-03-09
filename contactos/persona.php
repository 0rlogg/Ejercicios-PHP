<body>
<?php
class Persona
{
    private $nombre;
    private $apellidos;
    private $telefono;
    private $email;
    private $direccion;
    private $ciudad;
    private $provincia;
    private $pais;
    private $codigoPostal;
    private $fechaNacimiento;

    public function __construct($nombre, $apellidos, $telefono, $email, $direccion, $ciudad, $provincia, $pais, $codigoPostal, $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->codigoPostal = $codigoPostal;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function getProvincia()
    {
        return $this->provincia;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}
$posicion = $_GET["posicion"];
switch ($posicion)
{
    case "0":
        echo $indice;
        break;
    case "1":
        $contactos[1];
        break;
}

?>
</body>