<?php

    $cartuchera = array(

        'lapicera_uno' => array(
            'color' => 'azul',
            'marca' => 'bic',
            'trazo' => 'fino',
            'precio' => '2'
        ),
        'lapicera_dos' => array(
            'color' => 'rojo',
            'marca' => 'bic',
            'trazo' => 'medio',
            'precio' => '5'
        ),
        'lapicera_tres' => array(
            'color' => 'negro',
            'marca' => 'bic',
            'trazo' => 'grueso',
            'precio' => '10'
        )
    );

    //var_dump($cartuchera);

    //print_r($cartuchera);


    echo "<br>";
    echo "La cartuchera contiene: ".'<br>';
    foreach ($cartuchera as $key => $value) {
        echo "$key".'<br>';
        foreach ($value as $clave => $valor) {
            echo $clave.': '.$valor.'<br>';
        }

    }

 ?>
