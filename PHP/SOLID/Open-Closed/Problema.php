<?php 
    // Clase abierta para extension y cerrada para MODIFICACION

    class PilotoF1{
        function acelerar(Mercedes $auto){
            $auto->aumentarVelocidad();
        }
    }

    class RedBull{
        protected $vel = 0;

        function aumentarVelocidad(){
            $this->vel +=30;
        }
    }

    class Mercedes{
        protected $vel = 0;

        function aumentarVelocidad(){
            $this->vel +=20;
        }
    }
?>