<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Práctica de tipos escalares: boolean. integer, gloot, string</h2>
    <?php
        $unidades=15; //integer
        $precio=7.5; //float
        $descuento=true; //boolean
        $mensaje="<h3>gracias por su visita</h3>"; //string

        if ($descuento) {
            $total=$unidades*$precio*0.8;
        }
        else {
            $total=$unidades*$precio;
        }
        

        echo("<p>El total de su compra es ".$total."</p>");
        echo($mensaje);
    ?>
</body>
</html>