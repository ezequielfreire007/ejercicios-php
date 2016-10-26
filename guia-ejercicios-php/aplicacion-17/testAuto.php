<?php

    require_once "clases/Auto.php";

    #Se crean los objetos Autos
    $unAuto = new Auto("Ferrari","Negro");
    $dosAuto = new Auto("Ferrari","Rojo");

    $tresAuto = new Auto("Lamborghini","Negro",30);
    $cuatroAuto = new Auto("Lamborghini","Negro",40);

    $cincoAuto = new Auto("Audi","Negro",100,date('d-m-Y'));

    #Agrego 1500 de impuesto a los 3 ultimos Autos
    $tresAuto->agregarImpuestos(1500);
    $cuatroAuto->agregarImpuestos(1500);
    $cincoAuto->agregarImpuestos(1500);

    #Suma de primer auto y segundo
    echo Auto::add($unAuto,$dosAuto).'<br>';

/*    var_dump($unAuto);echo "<br>";
    var_dump($dosAuto);echo "<br>";
    var_dump($tresAuto);echo "<br>";
    var_dump($cuatroAuto);echo "<br>";
    var_dump($cincoAuto);echo "<br>";*/

    if($unAuto->equals($dosAuto)){
        echo "El primer auto es igual al segundo".'<br>';
    }else {
        echo "El primer auto no es igual al segundo".'<br>';
    }

    if ($unAuto->equals($cincoAuto)) {
        echo "El primer auto es igual al quinto auto".'<br>';
    }else {
        echo "El primer auto no es igual al quito auto".'<br>';
    }

    //objetos impares
    Auto::mostrarAuto($unAuto);
    Auto::mostrarAuto($tresAuto);
    Auto::mostrarAuto($cincoAuto);


 ?>
