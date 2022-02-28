<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tienda de Alimentacion y juguetes</h2>
    <?php
    include_once('Alimentacion.php');
    include_once('Jugueteria.php');
    
    $compraManzanas= new Alimentacion();
    $compraManzanas->comprar();//heredado del padre Producto
    $compraManzanas->pesar();//de la propia clase Alimentacion
    $compraManzanas->pagar();
    
    ?>
</body>
</html>