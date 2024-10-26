<?php
    //Comentario de una linea
    /* Comentario
    Multilinea
    */

    //Imprimir datos
    echo "Holiwis llegamos a PHP \n";
    print "Holiwis desde print \n";

    //Variables
    //Inicializar una variable
    $nombre;
    $nombre = "Jairo ";

    $apellido = "Vega Romero";

    $string = 'Cadena de texto';
    $boolean = true;
    $numero = 10;
    $decimal = 7.5;
    
    //Template String
    //$template = `${nombre} ${apellido} `;
    $template = "{$nombre} {$apellido}";
    print($template);


    //Operadores 
    //Operador de concatenacion
    print($nombre.$apellido."\n");

    //Operador matematico
    $suma = $numero + $decimal;
    $resta = $numero - $decimal;
    $multiplicacion = $numero * $decimal;
    $division = $numero / $decimal;
    $residuo = $numero % $decimal;


?>