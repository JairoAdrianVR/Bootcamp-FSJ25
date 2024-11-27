<?php 
    interface IAuto{

       function aumentarVelocidad();
       function disminuirVelocidad();
    }


class PilotoF1{
    function acelerar(IAuto $auto){
        $auto->aumentarVelocidad();
    }
    
    function frenar(IAuto $auto){
        $auto->disminuirVelocidad()();
    }

}

class RedBull implements IAuto{
    protected $vel = 0;

    function aumentarVelocidad(){
        $this->vel +=30;
    }

    function disminuirVelocidad(){
        $this->vel -=30;
    }
}

class Mercedes implements IAuto{
    protected $vel = 0;

    function aumentarVelocidad(){
        $this->vel +=20;
    }

    function disminuirVelocidad(){
        $this->vel -=20;
    }
}

class Kick implements IAuto{
    protected $vel = 0;

    function aumentarVelocidad(){
        $this->vel +=5;
    }

    function disminuirVelocidad(){
        $this->vel -=2;
    }
}


?>