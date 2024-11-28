<?php 
    //Si nosotros tenemos una INTERFACE DEMASIADO GENERAL la vamos a subdividir en interfaces mas especificas

    interface Person{
        function comer();
        function respirar();
        function dormir();
        function trabajar();
    }

    class Adulto implements Person{
        function comer(){}
        function respirar(){}
        function dormir(){}
        function trabajar(){}
    }

    class Bebe implements Person{
        function comer(){}
        function respirar(){}
        function dormir(){}
        function trabajar(){}
    }


?>