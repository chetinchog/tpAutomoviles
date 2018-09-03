<?php

class Persona {
    private $nombre;
    private $edad;
    private $maneja;
    function __construct($nombre, $edad, $maneja) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->maneja = $maneja;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getManeja() {
        return $this->maneja;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setManeja($maneja) {
        $this->maneja = $maneja;
    }
}