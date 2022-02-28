<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Precedencia de operadores</h2>
    <?php
    $resultado=5+8*2;
    echo($resultado); //¿cuál es el resultado? El resultado es 21
    //¿cómo puedes hacer que sume 5+8 y al resultado lo multiplique por 2?
    echo("<br>");
    $total=(5+8)*2;
    echo($total);
    ?>
</body>
</html>