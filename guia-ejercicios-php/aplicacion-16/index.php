<?php

    require_once "clases/Rectangulo.php";

    $objVector1 = new Punto(1,1);
    $objVector3 = new Punto(10,5);

    $objRectangulo = new Rectangulo($objVector1,$objVector3);

    echo "<br>";
    echo $objRectangulo->dibujar();

 ?>
