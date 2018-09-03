<?php

abstract class Automovil {
    private $patente;
    private $cantRuedas;

    function __construct($patente, $cantRuedas) {
        $this->patente = $patente;
        $this->cantRuedas = $cantRuedas;
    }

    function getPatente() {
        return $this->patente;
    }

    function getCantRuedas() {
        return $this->cantRuedas;
    }

    function setPatente($patente) {
        $this->patente = $patente;
    }

    function setCantRuedas($cantRuedas) {
        $this->cantRuedas = $cantRuedas;
    }
}