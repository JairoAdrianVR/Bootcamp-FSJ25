<?php 
    //Una clase padre tiene que poder ser reemplaza por su clase hija sin bloqueos o problemas en la ejecucion

    class Persona{
        function comer(){}

        function dormir(){}

        function trabajar(){}

        function respirar(){}

    }

    class Bebe extends Persona{

        function trabajar(){
            return new Exception("Un bebe no DEBERIA trabajar");
        }

    }

    class Aguila{
        function volar(){}
    }

    class AguilaJuguete extends Aguila{
        function volar(){
            return new Exception("ERES UN JUGUETE! Estoy planeando con estilo");
        }
    }

?>