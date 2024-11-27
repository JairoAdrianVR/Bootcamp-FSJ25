<?php
    /*
        Cada parte de nuestro codigo tiene que tener una Unica Responsabilidad

        NO SOBRECARGAR CLASES

    */

    // Nuestra tienda es DEMASIADO GENERAL
    class MenuTienda{

        function mostrarListaProducto(){}       // OK
        function agregarOpcionMenu(){}          // NO
        function agregarProductoCarrito(){}     // SI
        function eliminarOpcionMenu(){}         // SI
        function pagarCarrito(){}               // NO
        function logIn(){}                      // NO
        function logOut(){}                     // NO


    }

?>