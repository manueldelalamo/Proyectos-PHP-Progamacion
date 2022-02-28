<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Constantes en PHP</h2>
    <p>No pueden cambiar de valor + su nombre en mayúsculas</p>
    <?php
        define("MENSAJE","En un lugar de la mancha");
        echo(MENSAJE); //no usar $ en una constante definida
        echo("<br>");
        define("MENSAJE","de cuyo nombre no quiero acordarme");
        echo(MENSAJE); //no usar $ en una constante definida
        echo("<br>");
        const ASIGNATURAS = array("progrmación","marcas","base de datos");
        echo(ASIGNATURAS[0]);
        echo("<br>");
        echo(__FILE__); //constantes predefinidas
        echo("<br>");
        echo(__DIR__);
        

    ?>
</body>
</html>