<?php

    ##Incluyo los archivos de Rectangulo y Triangulo
    require_once "clases/Rectangulo.php";
    require_once "clases/Triangulo.php";

    ##Intancio dos objetos
    $objRectangulo = new Rectangulo(3,5);
    $objTriangulo = new Triangulo(10,4);

    #Utilizamos los metodos de la instancia $objRectangulo
    $objRectangulo->setColor("Verde");
    echo $objRectangulo->toString();
    echo $objRectangulo->dibujar();

    #Utilizamos los metodos de la intancia $objTriangulo
    $objTriangulo->setColor("Azul");
    echo $objTriangulo->toString();
    echo $objTriangulo->dibujar();

 ?>
