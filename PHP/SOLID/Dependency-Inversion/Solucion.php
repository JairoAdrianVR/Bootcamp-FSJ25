<?php 
interface IAdaptador{
    function connect();
}

class ConexionBD{
    //Representacion de una base de datos
    private $adaptador;

    function __construct(IAdaptador $adaptadorParam)
    {
        $this->adaptador = $adaptadorParam;
    }

    //Conectarnos a una base de datos a traves de nuestro adaptador
    function conectarBD(){
        $this->adaptador->connect();
    }

}

class MySQL implements IAdaptador{
    //Forma de conectarse

    function connect(){
        //conexion a la bd de mysql
    }
}

class Firestore implements IAdaptador{
    function connect(){
        //conexion a la bd de mysql
    }
}

$mybdsql = new MySQL();
$myfirestore = new Firestore();

$conexioncita = new ConexionBD($mybdsql);
$conexioncita = new ConexionBD($myfirestore);

?>