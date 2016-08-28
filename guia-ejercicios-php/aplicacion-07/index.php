<?php

    /* Numeros impares con for*/

    $mis_impares = array();
    $cont = 0;
    $cont2 = 0;
    $cantidad = 0;

    for ($i=1; $i < 20 ; $i++) {
        if (!($i%2 == 0)) {
            $mis_impares[$cont2] = $i;
            $cont2++;
        }
    }

    var_dump($mis_impares);

    echo "<br>";

    echo "Muestra con for".'<br>';
    for ($i=0; $i < count($mis_impares); $i++) {
        echo $mis_impares[$i].'<br>';
    }

    echo "Muestra con while".'<br>';
    while ($cantidad < 10) {
        echo $mis_impares[$cantidad].'<br>';
        $cantidad++;
    }

    echo "Muestra con foreach".'<br>';
    foreach ($mis_impares as $variable) {
        echo "$variable".'<br>';
    }

 ?>
