<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Probar clases</h2>
    <?php

use function MiBiblioteca\leer;
use function MiProyecto\calcular;

require('espacios.php');
require('basico.php');
    $ejemplo=new clases\basico\Conexion();
    $ejemplo->iniciar();
    leer();
    calcular(1000);
    ?>
</body>
</html>