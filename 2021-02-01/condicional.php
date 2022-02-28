<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Estructuras de control</h2>
    <h3>Condicional con if else</h3>
    <?php
    $unidades=50;
    $descuento=null;
    $precio=7.5;
    /*si las unidades superan los 40, el descuento es el 20%
    si las unidades sólo superan los 20, el descuento es un 15%
    y si no llega a 2, el descuento, por defecto, es 5%
    siendo el precio 7.5 dime cuánto asciende la factura*/

    if($unidades>40)
    {
        $descuento=0.2;
    } 
    elseif ($unidades>20)
    {
        $descuento=0.15;
    }
    else {
        $descuento=0.05;
    }//cierra estructurta if
    echo($descuento);
    $total=$unidades*$precio*(1-$descuento);
    echo("<p>El total es ".$total."</p>");
    ?>
    <h3>Condicional con switch case</h3>
    <?php
    switch ($unidades) {
        case ($unidades>40):
            $descuento=0.2;
            break;
        
        case ($unidades>20):
            $descuento=0.15;
            break;
        default:
            $descuento=0.05;
            break;
    }
    $total=$unidades*$precio*(1-$descuento);
    echo("<p>El total es ".$total."</p>");
    ?>
    <h3>Bucles</h3>
    <?php
    $colores=["rojo","verde","azul","amarillo"];
    echo("<p>Los colores son </p>");
    for ($i=0; $i <4; $i++) { 
        echo("<p>".$colores[$i]."</p>");
    }
    echo("<hr/>");
    foreach ($colores as $key => $value) {
        echo("<p>".$value."</p>");
    }
    echo("<hr/>");
    /*mostrar los colores en una lista desordenada 
    puedes utilizar for, foreach, while, do while... 
    elegir cuál usar
    <ul>
    <li></li>
    <li></li>
    </lu>*/
    $colores=["rojo","verde","azul","amarillo"];
    echo("<p>Los colores son: </p>");
    echo("<ul>");
    for ($i=0; $i <4; $i++) { 
        echo("<li>".$colores[$i]."</li>");
    }
    echo("</ul>");

    echo("<hr/>");

    echo("<ul>");
    echo("<p>Los colores son: </p>");
    foreach ($colores as $key => $value) {
        echo("<li>".$value."</li>");
    }
    echo("</ul>");
    ?>
    <h3>break vs continue</h3>
    <?php
    /*no quiero que salga el 3*/
    for ($i=0; $i <5 ; $i++) { 
        if($i==3) {
            echo("<p>X</p>");
            continue;
        }
        echo("<p>".$i."</p>");
    }
    echo("<hr/>");
    /*muestra los primeros 10 numeros pares pero el numero
    4 y el 8 no puede salir */
    for ($i=0; $i<20 ; $i++) { 
        if ($i==4) {
            echo("<p>X</p>");
            continue;
        }
        if ($i==8) {
            echo("<p>X</p>"); 
            continue;
        }
        if ($i % 2==0) {
            echo("<p>".$i."</p>");
        }
    }
    /*for ($i=0; $i <=18 ; $i=$i+2) { 
        if($i==4 || $i==8) { 
            
            echo("<p>X</p>");
            continue;
        }
        echo("<p>".$i."</p>");
    }*/
    ?>

</body>
</html>