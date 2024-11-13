<?php 
    //Algoritmo?? SON PASOS, SON FINITOS, SON ORDENADOS, NO TIENEN QUE SER AMBIGUOS
    //Una serie de instrucciones
    //Pasos logicos para realizar una tarea
    //Pasos ordenados
    //Secuencia de acciones que conlleva la resolucion de un problema
    //Pasos para resolver un poblema
    //Un patron 

    // * REALIZAR UN MAXIMO DE 10 PASOS(INSTRUCCIONES) PARA AGARRAR UN CELULAR *

    //BubbleSort - Metodo de Ordenamiento tipo Burbuja

    function bubbleSort($arr){ 

        if(count($arr) <= 1) return "Necesito al menos 2 datos en el array.";

        for($i = 0; $i < count($arr); $i++ ){
           // print("ESTE ES EL BUCLE CON I \n");

            for($j = 0; $j+1 < count($arr); $j++){
               // print("Este es el bucle con J y vale : {$arr[$j]} \n");
               // print("Este es el bucle con J y su siguiente es : {$arr[$j+1]} \n");
                if( $arr[$j] > $arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
        //return "Ahora si hay al menos 2 datos";
    }

    $arraycito = [8,10,5,40,7];
    print_r(bubbleSort($arraycito));
?>