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

    /* CREAR NUEVA AEROLINEA */
    if(isset($_POST['createForm'])){
        //print_r($_POST);
        
        if(isset($_POST['nombre'],$_POST['cantAviones'],$_POST['tipoAerolinea'])){
    
            $id = count($aerolineas)+1;
            $nombre = $_POST['nombre'];
            $cantAviones = $_POST['cantAviones'];
            $tipo = $_POST['tipoAerolinea'];
    
            $aerolinea = new Aerolinea($id,$nombre,$cantAviones,$tipo);
            //print_r($aerolinea);
            array_push($aerolineas,$aerolinea);
            //echo "<br/>";
            $_SESSION['aerolineas'] = $aerolineas;
    
            header('Location: /FSJ25/aerolinea_project/'); 
        }
    }
   
    /* OBTENER AEROLINEA POR ID */
    function getAerolineaPorID($id,$aerolineas){
        foreach($aerolineas as $aerolinea){
            if($aerolinea->getId() == $id){
                return $aerolinea;
            }
        }
    }

    /* ACTUALIZAR UNA AEROLINEA */

    if(isset($_POST['updateForm'])){
        foreach($aerolineas as $aerolinea){
            if($aerolinea->getId() == $_POST['id']){
           // print_r($aerolinea);
            
            $aerolinea->setNombre($_POST['nombre']);
            $aerolinea->setCant_aviones($_POST['cantAviones']);
            $aerolinea->setTipo_aerolinea($_POST['tipoAerolinea']);
                }
            }
            header('Location: /FSJ25/aerolinea_project/'); 
        }
    
    
    /* ELIMINAR UNA AEROLINEA */

   if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    foreach($aerolineas as $key => $aerolinea){
        if($aerolinea->getId() == $id){
            unset($aerolineas[$key]);
            break;
        }
    }
    $_SESSION['aerolineas'] = $aerolineas;
    header('Location: /FSJ25/aerolinea_project/'); 

   }


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

    <?php if(isset($_GET['edit'])){
        $aerolineaEditable = getAerolineaPorID($_GET['edit'],$aerolineas);
        //print_r($aerolineaEditable);
    ?>

    <!-- Formulario de EDITAR una Aerolinea-->

    <form method="POST" action="">
    <input type="hidden" name="updateForm" value="Soy el update">
    <input type="hidden" name="id" value="<?php echo $aerolineaEditable->getId() ?>">
    
    <label>Nombre Aerolinea</label>
        <input type="text" name="nombre" value="<?php echo $aerolineaEditable->getNombre() ?>">

        <label>Cantidad de Aviones</label>
        <input type="text" name="cantAviones" value="<?php echo $aerolineaEditable->getCant_aviones() ?>">

        <label>Tipo de Aerolinea</label>
        <input type="text" name="tipoAerolinea" value="<?php echo $aerolineaEditable->getTipo_aerolinea() ?>">

        <button type="submit">Editar Aerolinea</button>
    </form>
    <?php } else {?>

    <!-- Formulario de CREACION de Aerolineas-->
    
    <form method="POST" action="">
        
        <input type="hidden" name="createForm" value="Soy el create">

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

        <button type="submit" >Registrar Aerolinea</button>
    </form>
        <?php }?>
    <main>
        <table>
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad Aviones</th>
                    <th>Tipo Aerolinea</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach($aerolineas as $aerolinea){   
                   echo " <tr>
                        <td>{$aerolinea->getId()}</td>
                        <td>{$aerolinea->getNombre()}</td>
                        <td>{$aerolinea->getCant_aviones()}</td>
                        <td>{$aerolinea->getTipo_aerolinea()}</td>
                        <td>
                        <a href='?edit={$aerolinea->getId()}' >Editar</a>
                        <a href='?delete={$aerolinea->getId()}'>Eliminar</a>
                        </td>
                    </tr>";

                } ?>

                <?php /*
                foreach($aerolineas as $aerolinea):?>
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
                     endforeach */  ?>
                </tbody>
        </table>
    </main>
</body>
</html>