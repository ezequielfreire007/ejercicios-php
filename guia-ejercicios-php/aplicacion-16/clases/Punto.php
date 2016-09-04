<?php

    /**
     *Ejercicio N°16
     */
    class Punto
    {
        #Atributos
        private $_x;
        private $_y;

        #Getter y Setter
        public function getX(){
            return $this->_x;
        }

        public function getY(){
            return $this->_y;
        }

        #Construcor
        function __construct($x,$y)
        {
            $this->_x = $x;
            $this->_y = $y;
        }
    }


 ?>
