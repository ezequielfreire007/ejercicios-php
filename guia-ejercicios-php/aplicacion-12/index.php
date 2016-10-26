<?php

    $cadena = array('H','o','l','a' );
    var_dump($cadena);
    echo "<br>";

    echo invertirCadena($cadena);

    function invertirCadena($cadena){
        $string = "";
        for ($i=count($cadena)-1; $i >= 0 ; $i--) {
            $string .= $cadena[$i];
        }
        return $string;
    }

 ?>
