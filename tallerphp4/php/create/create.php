<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    error_reporting(E_ALL);
        require_once dirname(__FILE__,3).'/php/settings/header.php';
    ?>
    <title>Creando Registro</title>
</head>
<body>
    <?php 
        require_once dirname(__FILE__,3).'/php/settings/menu.php';
    ?>
    <div class="container-md">
        <?php
            $saltolinea = "\n";
            $fichero = fopen("../datos.txt", "a") or die ("Problema en la creacion");
            fputs($fichero, $_POST['nombre'].$saltolinea);
            fputs($fichero, $_POST['apellido'].$saltolinea);
            fputs($fichero, $_POST['telefono'].$saltolinea);
            fputs($fichero, $_POST['cedula'].$saltolinea);
            fputs($fichero, "-------------".$saltolinea);
            fclose($fichero);
            echo"Datos guardados correctamente!";
        ?>
    </div>

</html>