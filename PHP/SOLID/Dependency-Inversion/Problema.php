<?php 
    // Los modulos de alto nivel no deben depender de los de bajo nivel
    // ambos deben depender de abstracciones y estas de detalles 

    class ConexionBD{
        //Representacion de una base de datos
        private $adaptador;
        private $adaptador2;

        function __construct()
        {
            $this->adaptador = new MySQL();
            $this->adaptador2 = new Firestore();
        }

        //Conectarnos a una base de datos a traves de nuestro adaptador
        function conectarBD(){
            $this->adaptador->connect();
            $this->adaptador2->connect();
        }

    }

    class MySQL{
        //Forma de conectarse

        function connect(){
            //conexion a la bd de mysql
        }
    }

    class Firestore{
        function connect(){
            //conexion a la bd de mysql
        }
    }

?>