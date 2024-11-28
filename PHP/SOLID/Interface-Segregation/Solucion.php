<?php 
 interface Person{
    function comer();
    function respirar();
    function dormir();
}

interface PersonaTrabajadora{
    function trabajar();
}



class Adulto implements Person, PersonaTrabajadora{
    function comer(){}
    function respirar(){}
    function dormir(){}
    function trabajar(){}
}

class Bebe implements Person{
    function comer(){}
    function respirar(){}
    function dormir(){}
}

?>