<?php
    require_once "./AutomovilesDB.php";

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '    <meta charset="UTF-8">';
    echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '    <meta http-equiv="X-UA-Compatible" content="ie=edge">';
    echo '    <title>Document</title>';
    echo '</head>';
    echo '<body>';
    
    $opciones = [];
    foreach ($autos as $index => $auto) {
        array_push($opciones, '<option value="'.$auto->getPatente().'">Auto: '.$auto->getPatente().' - Ruedas: '.$auto->getCantRuedas().' - Puertas: '.$auto->getCantPuertas().'</option>');
    }
    foreach ($camiones as $index => $camion) {
        array_push($opciones, '<option value="'.$camion->getPatente().'">Camión: '.$camion->getPatente().' - Ruedas: '.$camion->getCantRuedas().' - Acoplados: '.$camion->getCantAcoplados().'</option>');
    }

    echo '<form action="BackEnd.php" method="POST">';
    echo '    <label for="name">Nombre: </label>';
    echo '    <input type="text" id="name" name="name" />';
    echo '    <br /><br />';
    echo '    <label for="age">Edad: </label>';
    echo '    <input type="text" id="age" name="age" />';
    echo '    <br /><br />';
    echo '    <label for="drive">Maneja: </label>';
    echo '    <select name="drive" id="drive">';
    foreach ($opciones as $key => $value) {
        echo $value;
    }
    echo '    </select>';
    echo '    <br /><br />';
    echo '    <input type="submit" value="ENVIAR">';
    echo '</form>';
    
    echo '</body>';
    echo '</html> ';
?>
