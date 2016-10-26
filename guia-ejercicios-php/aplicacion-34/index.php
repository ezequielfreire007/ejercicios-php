<?php

    $path = "misArchivos/palabras.txt";

    $archivo = fopen($path,"r");
    $cant1 = 0;
    $cant2 = 0;
    $cant3 = 0;
    $cant4 = 0;
    $cantMayorA4 = 0;
    while (!feof($archivo)) {
        $cant = 0;
        $linea = fgets($archivo);
        $misPalabras = explode(" ",$linea);
        //var_dump($misPalabras);
        foreach ($misPalabras as $palabra) {
            if (strlen($palabra) == 1) {
                 $cant1++;
            }elseif (strlen($palabra) == 2) {
                 $cant2++;
            }elseif (strlen($palabra) == 3) {
                 $cant3++;
            }elseif (strlen($palabra) == 4) {
                 $cant4++;
            }elseif (strlen($palabra) > 4) {
                 $cantMayorA4++;
            }
        }

    }
    fclose($archivo);

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio n°34</title>
    </head>
    <body>
        <h1>Julio Cortázar</h1>
        <h2>La autopista del sur</h2>
        <p>Cantidad palabras de 1 letra:<?php  if (!empty($cant1)) { echo $cant1;} ?>
        <p>Cantidad palabras de 2 letra:<?php  if (!empty($cant2)) { echo $cant2;} ?>
        <p>Cantidad palabras de 3 letra:<?php  if (!empty($cant3)) { echo $cant3;} ?>
        <p>Cantidad palabras de 4 letra:<?php  if (!empty($cant4)) { echo $cant4;} ?>
        <p>Cantidad palabras mayores a 4 letra:<?php  if (!empty($cantMayorA4)) { echo $cantMayorA4;} ?>
    </body>
</html>
