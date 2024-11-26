<?php 

class Aerolinea{

    //Encapsulamiento -> Modificadores de acceso
    private $id;
    private $nombre;
    private $cant_aviones;
    private $tipo_aerolinea;

    function __construct($idParam, $nombreParam, $cantAvionesParam,$tipoAerolineaParam)
    {
        $this->id = $idParam;
        $this->nombre = $nombreParam;
        $this->cant_aviones = $cantAvionesParam;
        $this->tipo_aerolinea = $tipoAerolineaParam;
    }

    //Abstraccion -> Metodos para interactuar con propiedades/atributos encapsulados
    //Getters y Setters
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }


    public function getCant_aviones()
    {
        return $this->cant_aviones;
    }

    /**
     * Get the value of tipo_aerolinea
     * @return  string
     */ 
    public function getTipo_aerolinea()
    {
        return $this->tipo_aerolinea;
    }

    /**
     * Set the value of nombre
     *
     * @return  string
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this->nombre;
    }

    /**
     * Set the value of cant_aviones
     *
     * @return  string
     */ 
    public function setCant_aviones($cant_aviones)
    {
        $this->cant_aviones = $cant_aviones;

        return $this->cant_aviones;
    }

    /**
     * Set the value of tipo_aerolinea
     *
     * @return  string
     */ 
    public function setTipo_aerolinea($tipo_aerolinea)
    {
        $this->tipo_aerolinea = $tipo_aerolinea;

        return $this->tipo_aerolinea;
    }

}

?>