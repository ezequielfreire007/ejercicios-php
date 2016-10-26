<?php

    require_once "Punto.php";
    /**
     * Ejercicio N°16
     */
    class Rectangulo
    {
        #Atributos
        private $_vertice1;
        private $_vertice2;
        private $_vertice3;
        private $_vertice4;
        public $area;
        public $ladoDos;
        public $ladoUno;
        public $perimetro;

        #Construcor
        public function __construct($v1,$v3)
        {
            $this->_vertice1 = $v1;
            $this->_vertice2 = new Punto($v3->getX(),$v1->getY());
            $this->_vertice3 = $v3;
            $this->_vertice4 = new Punto($v1->getX(),$v3->getY());
            $this->_ladoUno = $this->_vertice4->getY() - $this->_vertice1->getY();
            $this->_ladoDos = $this->_vertice2->getX() - $this->_vertice1->getX();
            $this->_area = $this->_ladoUno * $this->_ladoDos;
            $this->_perimetro = (2 * $this->_ladoUno) + (2 * $this->_ladoDos);
        }

        #Metodos
        public function dibujar(){
            echo "###### Dibuja Rectangulo ######".'<br>';
            echo "<br>";
            for ($i=1; $i <= $this->_ladoUno; $i++) {
                for ($j=1; $j <= $this->_ladoDos ; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

    }


 ?>
