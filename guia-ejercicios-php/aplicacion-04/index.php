<?php

    #variables
    $op1 = 5;
    $op2 = 2;
    $operador = array('+','-','*','/');

    for ($i=0 ; $i < count($operador) ; $i++ ) {
        switch ($i) {
            case 0 :
                $suma = $op1 + $op2;
                echo "Suma: $suma";
                echo "<br>";
                break;
            case 1:
                $resta = $op1 - $op2;
                echo "Resta: $resta";
                echo "<br>";
                break;
            case 2:
                $mul = $op1 * $op2;
                echo "Multiplicaion: $mul";
                echo "<br>";
                break;
            case 3:
                $div = $op1 / $op2;
                echo "Divicion: $div";
                echo "<br>";
                break;
        }
    }

?>
