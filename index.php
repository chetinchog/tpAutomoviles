<?php
    require_once "./Auto.php";
    require_once "./Camion.php";

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
    
    $autos = [];
    $auto1 = new Auto("TSG718", 4, 3);
    array_push($autos, $auto1);
    $auto2 = new Auto("OME921", 4, 4);
    array_push($autos, $auto2);
    foreach ($autos as $key => $value) {
        array_push($opciones, '<option value="'.$value->getPatente().'">Auto: '.$value->getPatente().' - Ruedas: '.$value->getCantRuedas().' - Puertas: '.$value->getCantPuertas().'</option>');
    }

    $camiones = [];
    $camion1 = new Camion("OKE981", 10, 2);
    array_push($camiones, $camion1);
    $camion2 = new Camion("QMS921", 18, 4);
    array_push($camiones, $camion2);
    foreach ($camiones as $key => $value) {
        array_push($opciones, '<option value="'.$value->getPatente().'">Camión: '.$value->getPatente().' - Ruedas: '.$value->getCantRuedas().' - Acoplados: '.$value->getCantAcoplados().'</option>');
    }

    echo '<form action="AutomovilForm.php" method="POST">';
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
