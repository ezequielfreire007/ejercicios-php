<?php

    for ($i=1; $i < 10; $i++) {
        if(!esImpar($i)){
            echo $i." "."es Par.".'<br>';
        }else {
            echo $i." "."es Impar.".'<br>';
        }

    }

    function esPar($num){
        if(($num%2)==0){
            return true;
        }
        return false;
    }

    function esImpar($num){
        return !esPar($num);
    }

 ?>
