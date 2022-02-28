<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores de asignación</h2>
    <?php
        $numero=10;
        //aumentar el número a un total de 15
        $numero +=5;
        echo($numero);
        echo("<br/>");

        //qué pasa si le dices $numero .=5 te da error?
        $numero .=5;
        echo($numero);
        echo("<br/>");
        //no da error pero no lo suma, solo concatena

        $saludo="hola";
        //quiero mostro un mensaje, que sea hola, ¿qué tal? 
        //sin declarar otra variable
        $saludo .=" ¿qué tal?";
        echo($saludo);
        echo("<br/>");

        //que pasa si le dices $saludo +="¿qué tal?" te da error?
        //$saludo +="¿qué tal";
        //echo($saludo);
        //este si da error
    ?>
</body>
</html>