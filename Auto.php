<?php
require_once "./Automovil.php";

class Auto extends Automovil {
    private $cantPuertas;
    
    function __construct($patente, $cantRuedas, $cantPuertas) {
        parent::__construct($patente, $cantRuedas);
        $this->cantPuertas = $cantPuertas;
    }
    
    function getCantPuertas() {
        return $this->cantPuertas;
    }

    function setCantPuertas($cantPuertas) {
        $this->cantPuertas = $cantPuertas;
    }
}