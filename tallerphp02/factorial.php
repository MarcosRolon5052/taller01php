<?php

    sleep(3);

    function factorial($numerofactorial){
        if ($numerofactorial < 2) {#recibir parametro del factorial
            return 1;
        }else {
            return($numerofactorial*factorial($numerofactorial-1));
        }
    }
        $num = $_POST['numerofactorial'];
        if ($um >=10) {
            echo "Prueba con un numeromenor a 10";
            exit();
        }
        if (!is_numeric($num)) {
            echo "Valor no valido, no es numero.";
            exit();
        }

?>