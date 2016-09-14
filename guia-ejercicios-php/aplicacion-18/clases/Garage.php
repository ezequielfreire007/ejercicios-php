<?php
    require_once "clases/Auto.php";

    /**
     *
     */

    class Garage
    {
        #Atributos
        private $_razonSocial;
        private $_precioPorHora;
        private $_autos;

        #Constructor
        function __construct($razonSocial = NULL, $precioPorHora = NULL)
        {
            if (($razonSocial!=NULL)||($precioPorHora != NULL)) {
                $this->_razonSocial = $razonSocial;
                $this->_precioPorHora = $precioPorHora;
                $this->_autos = array();
            }
        }

        #Metodos
        public function MostrarGarage()
        {
            echo "###### Garage #########".'<br>';
            echo "Razon Social: ".$this->_razonSocial.'<br>';
            echo "Precio por hora: ".$this->_precioPorHora.'<br>';

            foreach ($this->_autos as $value) {
                Auto::mostrarAuto($value);
            }
        }

        public function Equal($auto){
            foreach ($this->_autos as $value) {
                return $auto->equals($value);
            }
        }

        public function Add($auto){
            if (!($this->Equal($auto))) {
                    array_push($this->_autos,$auto);
            }else {
                echo "El auto se encuentra en el garage".'<br>';
            }
        }

        public function Remove($auto){
            for ($i=0; $i < count($this->_autos) ; $i++) {
                if ($auto == $this->_autos[$i]) {
                    unset($this->_autos[$i]);
                }
            }
        }

    }

 ?>
