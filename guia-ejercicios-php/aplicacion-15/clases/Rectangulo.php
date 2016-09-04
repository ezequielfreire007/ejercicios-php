<?php

    include_once "FiguraGeometrica.php";
    /**
     *
     */
    class Rectangulo extends FiguraGeometrica
    {
        #Atributos
        private $_ladoUno;
        private $_ladoDos;

        #Constructor
        function __construct($ladoUno,$ladoDos)
        {
            parent::__construct();
            $this->_ladoUno = $ladoUno;
            $this->_ladoDos = $ladoDos;
            $this->calcularDatos();
        }

        #Metodos
        protected function calcularDatos(){
            $this->_perimetro = (2*$this->_ladoUno)+(2*$this->_ladoDos);
            $this->_superficie = $this->_ladoUno * $this->_ladoDos;
        }

        public function dibujar(){
            echo "###### Dibuja Rectangulo ######".'<br>';
            for ($i=1; $i <= $this->_ladoUno; $i++) {
                for ($j=1; $j <= $this->_ladoDos ; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        public function toString(){
            echo "##### Datos Rectangulo #####".'<br>';
            $string = "Lado uno: ".$this->_ladoUno.'<br>'.
                      "Lado dos: ".$this->_ladoDos.'<br>'.
                      parent::toString();
            return $string;
        }
    }

 ?>
