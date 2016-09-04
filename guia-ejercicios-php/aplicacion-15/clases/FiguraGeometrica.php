<?php

    /**
     *
     */
    abstract class FiguraGeometrica
    {
        #Atributos
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        #Getter y Setter
        public function getColor(){
            return $this->_color;
        }

        public function setColor($value){
            $this->_color = $value;
        }

        #Constructor
        public function __construct()
        {
            $this->_color = "";
            $this->_perimetro = 0.0;
            $this->_superficie = 0.0;
        }

        #Metodos abstractos
        public abstract function dibujar();

        protected abstract function calcularDatos();

        #Metodo instancia
        public function toString(){
            $string = "Color: ".$this->_color.'<br>'.
                      "Perimetro: ".$this->_perimetro.'<br>'.
                      "Superficie: ".$this->_superficie.'<br>';
            return $string;
        }
    }

 ?>
