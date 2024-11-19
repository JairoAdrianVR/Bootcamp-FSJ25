<?php 

    // Pilares POO -> Buenas practicas que mejoran Legibilidad, Escalabilidad y  
    //  Bases que cimentan el tipo de poo que pueden replicarse/derivarse
    //  Lo fundamental del paradigma(forma)
    // Forma de organizar nuestro codigo 
    // Herramientas para poder reutilizar el codigo

    //Cuales son los 4 pilares?
    /*
        Encapsulamiento X
        Abstraccion X
        Herencia
        Polimorfismo
    */

    class Persona{
        private $nombre;

        function __construct($nombreParam)
        {
            $this->nombre = $nombreParam;
        }

        function respirar(){
            //INCREIBLE, RESPIRO
            print("Estoy respirando Iffffff");
        }

        //Getters y Setters
        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombreParam){
            $this->nombre = $nombreParam;
        }

    }
/*
    $persona1 = new Persona("Jairo");
    $persona2 = new Persona("Luis Ernesto");
    $persona1->setNombre("Erick");
    print($persona1->getNombre());
    $persona1->respirar();
    $persona2->respirar();*/

    class Programador extends Persona{
        private $chicharra;
        private $lenguajesProgramacion;
        private $estado;

        function __construct($nombre, $pcParam, $lenguajesProgramacionParam,$estadoParam = "activo")
        {
            parent::__construct($nombre);
            //Persona::__construct($nombre);
            $this->estado = $estadoParam;
            $this->chicharra = $pcParam;
            $this->lenguajesProgramacion = $lenguajesProgramacionParam;
        }

        function respirar()
        {
            print("No respiro de la presion");
        }

        //Getters y Setters
        
        public function getChicharra()
        {
                return $this->chicharra;
        }

        public function setChicharra($chicharra)
        {
                $this->chicharra = $chicharra;
        }

        public function getLenguajesProgramacion()
        {
                return $this->lenguajesProgramacion;
        }

        public function setLenguajesProgramacion($lenguajesProgramacion)
        {
                $this->lenguajesProgramacion = $lenguajesProgramacion;
        }

        public function getEstado()
        {
                return $this->estado;
        }

        public function setEstado($estado)
        {
                $this->estado = $estado;
        }
    }

    $programador1  = new Programador("Luis Ernesto","La Maquina",["Javascript","Typescript","PHP"],"inactivo");
    $programador2  = new Programador("Carlos Samuel","La Bestia" ,["Javascript","Typescript","PHP"]);
    print_r($programador1);
    print_r($programador2);
    $programador1->respirar();
    echo "\n";
    $programador2->respirar();
?>