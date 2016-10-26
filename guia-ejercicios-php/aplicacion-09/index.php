<?php

    $lapicera_uno = array(
        'color' => 'azul',
        'marca' => 'bic',
        'trazo' => 'fino',
        'precio' => '2'
    );

    $lapicera_dos = array(
        'color' => 'rojo',
        'marca' => 'bic',
        'trazo' => 'medio',
        'precio' => '5'
    );

    $lapicera_tres = array(
        'color' => 'negro',
        'marca' => 'bic',
        'trazo' => 'grueso',
        'precio' => '10'
    );


    echo "Primer lapicera".'<br>';
    foreach ($lapicera_uno as $key => $value) {
        echo $key.': '.$value.'<br>';
    }
    echo "<br>";
    echo "Segunda lapicera".'<br>';
    foreach ($lapicera_dos as $key => $value) {
        echo $key.': '.$value.'<br>';
    }

    echo "<br>";
    echo "Tercera lapicera".'<br>';
    foreach ($lapicera_tres as $key => $value) {
        echo $key.': '.$value.'<br>';
    }

 ?>
