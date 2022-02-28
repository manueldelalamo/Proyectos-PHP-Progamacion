<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Variables : Asignación por valor vs asignación por referencia &</h2>
    <?php
        $ciudad="Madrid"; //asignación por valor
        $capital=&$ciudad; //asignación por referencia &
        $ciudad="Roma";
        echo($ciudad);
        echo("<br>");
        echo($capital);


    ?>
    <h2>Otro bloque de html</h2>
    <?php
        echo($ciudad);
        $unidades=15; //asignación por valor y ámbito global

        function calcular() 
        {
            global $unidades; //en php puede usar ñas variables globales
            //pero hay que indicarlo expresamente con la palabra global
            //$unidades=21; //ámbito local de la función
            echo($unidades); //ámbito local de la función calcular
        }
        calcular();
    ?>
    <h2>Variables Estáticas</h2>
    <?php
        function contar()
        {
            static $dato=0; //ámbito local
            echo($dato);
            $dato++;
        }
        contar();
    ?>
</body>
</html>