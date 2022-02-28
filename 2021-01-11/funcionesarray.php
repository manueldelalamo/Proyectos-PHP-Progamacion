<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funciones con arraya en PHP 8.0</h2>
    <?php
    $tareas=array(
        "lunes"=>"Repasar programación",
        "miércoles"=>"Ejercicios de sistemas",
        "viernes"=>"Practicar etiquetas HTML5",
        "sábado"=>"Instaalr IDE Eclipse"
    );
    print_r($tareas);
    echo("<br>");
    print_r(ksort($tareas));
    echo("<br>");
    print_r($tareas);
    //print($tareas["lunes"]);
    ?>
</body>
</html>