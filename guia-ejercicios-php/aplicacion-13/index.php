<?php

    echo longitudPalabra("Recuperatorio",10);

    function longitudPalabra($palabra, $max){
        $valoresValidos = array(
            'Recuperatorio',
            'Parcial',
            'Programacion'
        );
        if((count($palabra)) > $max){
            echo "Supera el maximo de caracteres".'<br>';
        }
        else {
            echo "La palabra no supera el maximo de caracteres".'<br>';
        }

        foreach ($valoresValidos as $value) {
            if($palabra == $value){
                echo "La palabra pertenece: ".$value.'<br>';
                return 1;
            }
        }

        return 0;

    }

 ?>
