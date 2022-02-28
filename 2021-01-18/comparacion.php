<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores de comparación</h2>
    <?php
        $facturacion=15000.95; //cuidado... float es con , o con . ?
        //si la facturación es mayor de 10000 muestra un mensaje de 
        //"buen resultado" y si no, muestra un mensaje de "peor resultado"
        if ($facturacion>10000) {
            echo("buen resultado");
        }
        else {
            echo("peor resultado");
        }
        echo("<br/>");

        $ciudad="madrid";
        //si la ciudad es diferente a madrid, muestra un mensaje diciendo
        //"no es madrid"
        if ($ciudad<>"madrid") {
            echo("no es madrid");
        } else {
            echo("si es madrid");
        }
        echo("<br/>");

        $dato=5;
        //comprueba si dato es = "5" ; quiero que sea igual: muestra un mensaje
        //diciendo son iguales 
        //no son iguales en tipo, pero sí en valor

        if ($dato=="5") {
            echo("son iguales");
        } else {
            echo("no son iguales");
        }
        
    
    ?>
</body>
</html>