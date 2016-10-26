<?php
    require_once "clases/Garage.php";

    //Instancio los objetos
    $miGarage = new Garage("Pepito",10);

    #Se crean los objetos Autos
    $unAuto = new Auto("Ferrari","Negro");
    $dosAuto = $unAuto;

    $tresAuto = new Auto("Lamborghini","Negro",30);
    $cuatroAuto = new Auto("Lamborghini","Negro",40);

    $cincoAuto = new Auto("Audi","Negro",100,date('d-m-Y'));

    $miGarage->Add($unAuto);
    $miGarage->Add($dosAuto);
    $miGarage->Add($tresAuto);
    //$miGarage->Add($cuatroAuto);
    //$miGarage->Add($cincoAuto);

    var_dump($miGarage);
    echo "<br>";
    $miGarage->MostrarGarage();

    //Sale Lamborghini
    $miGarage->Remove($unAuto);

    echo "<br>";
    $miGarage->MostrarGarage();

    
 ?>
