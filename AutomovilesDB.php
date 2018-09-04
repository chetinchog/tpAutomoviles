<?php

require_once "./Auto.php";
require_once "./Camion.php";

$autos = [];
$auto1 = new Auto("TSG718", 4, 3);
array_push($autos, $auto1);
$auto2 = new Auto("OME921", 4, 4);
array_push($autos, $auto2);

$camiones = [];
$camion1 = new Camion("OKE981", 10, 2);
array_push($camiones, $camion1);
$camion2 = new Camion("QMS921", 18, 4);
array_push($camiones, $camion2);