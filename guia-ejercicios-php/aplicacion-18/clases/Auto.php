<?php
    /**
     * Ejercicio N° 17
     */
    class Auto
    {
        #Atributos
        private $_color;
        private $_precio;
        private $_marca;
        private $_fecha;

        #Getter y Setter

        #Constructor
        public function __construct()
        {
            //array de parametros enviados a la funcion
            $parametros = func_get_args();
            //numero de parametros que se estan pasando
            $numParametro = func_num_args();
            //funcion de constructor segun cantidad de parametros
            $function_contructor = '__construct'.$numParametro;
            //si el metodo existe se invoca y devuelve la cantidad de parametros al constructor por defecto
            if (method_exists($this,$function_contructor)) {
                call_user_func_array(array($this,$function_contructor),$parametros);
            }
        }

        function __construct2($marca,$color){
            $this->_marca = $marca;
            $this->_color = $color;
        }

        function __construct3($marca,$color,$precio){
            $this->__construct2($marca,$color);
            $this->_precio = $precio;
        }

        function __construct4($marca,$color,$precio,$fecha){
            $this->__construct3($marca,$color,$precio);
            $this->_fecha = $fecha;
        }

        #Metodos de instancia
         public function agregarImpuestos($doble){
             $this->_precio += $doble;
         }

         public function equals($auto2){
             $retorno = false;
             if ($this->_marca == $auto2->_marca) {
                 $retorno = true;
             }

             return $retorno;
         }

        #Metodos de clase
        public static function Add($auto1,$auto2){
            $retorno = 0;
            if (($auto1->equals($auto2)) && ($auto1->_color == $auto2->_color)) {
                $retorno = $auto1->_precio + $auto2->_precio;
            }

            return $retorno;
        }

        public static function mostrarAuto($auto){
            echo "##### Mostrar Auto ######".'<br>';
            echo "Marca: ".$auto->_marca.'<br>';
            echo "Color: ".$auto->_color.'<br>';
            echo "Precio: ".$auto->_precio.'<br>';
            echo "Fecha: ".$auto->_fecha.'<br>';
        }

    }

 ?>
