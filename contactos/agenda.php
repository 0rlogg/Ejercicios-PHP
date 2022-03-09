<body>
<?php
include_once("persona.php");
class agenda
{
    private $contactos = array();
    function __construct()
    {
        $this->contactos[0] =new Persona("Juan", "Pérez", 666666666, "juan@email.com", "direccion 1", "malaga", "malaga", "españa", 29000, "01/01/0000");
        $this->contactos[1] =new Persona("Gema", "Soldado", 689478426, "gesol@email.com", "salvatierra 3", "Valencia", "Valencia", "España", 15630, "05/09/1975");
        $this->contactos[2] =new Persona("Andrés", "Rio", 675984123, "rio@email.com", "alatriste 5", "Granada", "Granada", "España", 18000, "03/07/1986");
    }
    public function getContactos()
    {
        return $this->contactos;
    }
    public function getPersona($indice)
    {
        return $this->contactos[$indice];
    }
    public function getIndice()
    {
        return $this->indice;
    }
}

?>
</body>