<?php

    $mi_array = array();

    for ($i=1; $i < 30; $i++) {
        $cont = 0;
        for ($j=1; $j <= $i ; $j++) {

            if (($i%$j) == 0) {
                $cont++;
            }
        }

        if ($cont == 2) {
            echo "es primo";
            $mi_array[$i] = $i;
        }

    }
    var_dump($mi_array);
 ?>
