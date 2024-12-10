<?php 

require_once './clases/Producto.php';
require_once './clases/Inventario.php';

    function displayMenu(){
        echo "---- Menu de la Tiendita ---- \n";
        echo "1. Agregar nuevo producto \n";
        echo "2. Eliminar producto \n";
        echo "3. Actualizar producto \n";
        echo "5. Generar Venta \n";
        echo "6. Generar informe \n";
        echo "7. Salir \n";
        echo "Seleccione una opcion: ";
    }

    function prompt($mensaje){
        echo $mensaje;
        $input = trim(fgets(STDIN));
        return $input;
    }

    $inventario = new Inventario([]);
    
    $flag = true;
    $idProducto = 0;
    while($flag){
        displayMenu();
       $opcion = prompt("");
        switch($opcion){
            case 1: 
                //Obtenemos valores de producto a traves del uso de prompt (funcion para obtener valores de la terminal)
                $idProducto = $idProducto+1;
                $nombre = prompt("Ingrese el nombre del producto:\n");
                $descripcion = prompt("Ingrese la descripcion del producto:\n");
                $precio = prompt("Ingrese el precio del producto:\n");
                $cantidad = prompt("Ingrese la cantidad del producto:\n");
                $categoria = prompt("Ingrese la categoria de su producto: \n");
                $proveedor = prompt("Ingrese quien es el proveedor de su producto: \n");
                //Creamos nuevo producto con los valores recibidos por prompt
                $producto = new Producto($idProducto,$nombre,$descripcion,$precio,$cantidad,$proveedor,$categoria);
                
                //Agregamos el nuevo producto a nuestro inventario
                $inventario->agregarProducto($producto);
                echo "Ingresaste el siguiente producto: \n";
                print_r($inventario);
                break;
            case 2: 
                echo "Estas eliminando un producto \n";
                break;
            case 3:
                echo "Estas actualizando un producto \n";
                break;
            case 4:
                echo "Estas por devolver un producto \n";
                break;
            case 5: 
                echo "Estas generando una nueva venta \n";
                break;
            case 6:
                echo "Estas generando un informe \n";
                break;
            case 7:
                echo "Estas saliendo ... \n";
                $flag = false;
                break;

            default: 
            echo "Seleccione una opcion valida \n";

        }


    }
?>
