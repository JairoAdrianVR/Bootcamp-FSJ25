<?php 

    //Importar un archivo
    // include -> Traer codigo del archivo, SI ALGO FALLA? Da una advertencia y sigue ejecutando el programa
    // require -> Traer codigo del archivo, SI ALGO FALLA? Da un error y frena la ejecucion
    require('./aerolinea.php');
    session_start();
    
    if(!isset($_SESSION['aerolineas'])){
        $_SESSION['aerolineas'] = [];
    }

    $aerolineas =  $_SESSION['aerolineas'];

    if(isset($_POST['nombre'],$_POST['cantAviones'],$_POST['tipoAerolinea'])){
        //print_r($_POST);

        $nombre = $_POST['nombre'];
        $cantAviones = $_POST['cantAviones'];
        $tipo = $_POST['tipoAerolinea'];

        $aerolinea = new Aerolinea($nombre,$cantAviones,$tipo);
        //print_r($aerolinea);
        array_push($aerolineas,$aerolinea);
        //echo "<br/>";
        $_SESSION['aerolineas'] = $aerolineas;

        header('Location: /FSJ25/aerolinea_project/');
    }
    
    //print_r($aerolineas);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Aerolinea</title>
</head>
<body style="background-color: grey;">
    <h1>Holiwis</h1>

    <form method="POST" action="">
        <label>Nombre Aerolinea</label>
        <input type="text" name="nombre">

        <label>Cantidad de Aviones</label>
        <input type="text" name="cantAviones">

        <label>Tipo de Aerolinea</label>
        <select name="tipoAerolinea">
            <option value="Comercial">Comercial</option>
            <option value="Privado">Privado</option>
            <option value="Carga">Carga</option>
        </select>

        <button type="submit">Registrar Aerolinea</button>
    </form>

    <main>
        <table>
                <thead>
                    <th>Nombre</th>
                    <th>Cantidad Aviones</th>
                    <th>Tipo Aerolinea</th>
                </thead>
                <tbody>
                <?php foreach($aerolineas as $aerolinea){   
                   echo " <tr>
                        <td>{$aerolinea->getNombre()}</td>
                        <td>{$aerolinea->getCant_aviones()}</td>
                        <td>{$aerolinea->getTipo_aerolinea()}</td>
                    </tr>";

                } ?>

                <?php foreach($aerolineas as $aerolinea):?>
                    <tr>
                        <td><?php print "{$aerolinea->getNombre()}" ?></td>
                        <td><?php echo "{$aerolinea->getCant_aviones()}" ?></td>
                        <td><?php echo "{$aerolinea->getTipo_aerolinea()}" ?></td>
                    </tr>
                <?php endforeach ?>

                <?php foreach($aerolineas as $aerolinea):
                 echo" <tr>
                        <td>{$aerolinea->getNombre()} </td>
                        <td>{$aerolinea->getCant_aviones()} </td>
                        <td>{$aerolinea->getTipo_aerolinea()}</td>
                    </tr> ";
                     endforeach ?>
                </tbody>
        </table>
    </main>
</body>
</html>