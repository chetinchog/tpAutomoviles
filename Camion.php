<?php
require_once "./Automovil.php";

class Camion extends Automovil {
    private $cantAcoplados;

    function __construct($patente, $cantRuedas, $cantAcoplados) {
        parent::__construct($patente, $cantRuedas);
        $this->cantAcoplados = $cantAcoplados;
    }
    
    function getCantAcoplados() {
        return $this->cantAcoplados;
    }

    function setCantAcoplados($cantAcoplados) {
        $this->cantAcoplados = $cantAcoplados;
    }
}