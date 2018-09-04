<?php

require_once "./AutomovilesDB.php";

function getPatente($obj) {
    return $obj->getPatente();
}

$nombre = $_POST['name'];
$edad = $_POST['age'];
$maneja = $_POST['drive'];

$vehiculo;
foreach ($autos as $index => $auto) {
    if ($auto->getPatente() == $maneja) {
        $vehiculo = 'Auto: '.$auto->getPatente().' - Ruedas: '.$auto->getCantRuedas().' - Puertas: '.$auto->getCantPuertas();
    }
}

foreach ($camiones as $index => $camion) {
    if ($camion->getPatente() == $maneja) {
        $vehiculo = 'Camión: '.$camion->getPatente().' - Ruedas: '.$camion->getCantRuedas().' - Acoplados: '.$camion->getCantAcoplados();
    }
}

echo `
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>FormPost</title>
</head>
<body>
`;
echo '<p>Nombre: '.$nombre.'</p>';
echo '<p>Edad: '.$edad.'</p>';
echo '<p>Vehículo: '.$vehiculo.'</p>';
echo `
</body>
</html>
`;

?>