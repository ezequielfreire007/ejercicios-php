<?php
    /*Calcular la potencia */

    calcularPote();

/*    funcition calcularPotencia($num){
        $retorno = pow($num,2);
        echo $retorno.'<br>';
    }*/

    function calcularPote(){
        for ($i=1; $i <= 4 ; $i++) {
            echo pow($i,2).'<br>';
        }
    }

 ?>
