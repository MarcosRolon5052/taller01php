<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    error_reporting(E_ALL);
        require_once dirname(__FILE__,3).'/php/settings/header.php';
    ?>
    <title>Listado de Registros</title>
</head>
<body>
    <?php 
        require_once dirname(__FILE__,3).'/php/settings/menu.php';
    ?>
    <div class="container-md">
        <?php
            $saltolinea = "";
            $linea = "";
            $fichero = fopen("../datos.txt", "r") or die ("Problema en la creacion");
           while (!feof($fichero)) {
            $linea = fgets($fichero);
            $saltolinea = nl2br($linea);
            echo "<h4>".$saltolinea . "</h4>";
           } 
            fclose($fichero);
            echo"<h5>Fin del listado!</h5>";
        ?>
    </div>

</html>