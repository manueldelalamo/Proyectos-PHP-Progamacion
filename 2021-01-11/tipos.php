<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipos escalares en PHP : booelan, integer, float y string</h2>
    <?php
    $activado=true;
    $apagado=false;
    echo("la variable activado es ".$activado);
    echo("<br>");
    echo("la variable activado es ".$apagado);
    $numero=18;
    echo("<br>");
    echo("El número entero es ".$numero);
    $precio=18.946;
    echo("<br>");
    echo("El número flotante es ".$precio);
    echo("<br>");
    echo("El total es ".($numero*$precio));
    $saludo="¿hola que tal estás, \"juan\"?";
    echo("<br>");
    echo("El texto es ".$saludo);
    ?>
    <h2>Tipos copuestos en PHP : array, object, callable e iterable</h2>
    <?php
    $frutas=["manzanas"=>2.95, "peras"=>1.95, "naranjas"=>3.55];//esto es un array
    $ciudades=["madrid","berlín","roma", "paris"];
    $capitales=["españa">"madrid","alemania"=>"berlín","italia"=>"roma", "francia"=>"paris"];
    echo("Las frutas son ".$frutas["naranjas"]);
    echo("<br>");
    echo("la ciudad es ".$ciudades[3]);
    echo("<br>");
    echo("la capital es ".$capitales["francia"]);
    foreach($frutas as $precio=>$value){
    echo("<p>el precio es ".$frutas[$precio]."</p>");
    }
    ?>
</body>
</html>