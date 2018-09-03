<?php

$nombre = $_POST['name'];
$edad = $_POST['age'];
$maneja = $_POST['drive'];

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
echo '<p>Patente: '.$maneja.'</p>';
echo `
</body>
</html>
`;

?>