<?php

    $var = array();

/*    var_dump($var);

    for ($i=0; $i < 5; $i++) {
        $var[$i] = rand(0,10);
    }
    echo "<br>";

    var_dump($var);*/

    #ejemplo con array_push
    for ($i=0; $i < 5; $i++) {
        array_push($var,rand(0,10));
    }

    var_dump($var);

    $resultado = array_unique($var);
    echo "<br>";

    var_dump($resultado);
 ?>
