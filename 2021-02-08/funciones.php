<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funciones con php</h2>
    <?php
    include_once('calculos.php');
    include_once('Coche.php');
    include_once('Clientes.php');
    echo saludar("Juan");
    echo $despedir("María");//variable que almacena función anónima
    echo $resultado(5);
    //crear un objeto coche
    $coche1= new Coche();
    $coche1->matricular();
    $coche1->arrancar();
    $coche2= new Coche();
    $coche2->arrancar();
    Coche::arrancar();

    //crear un objeto clientes
    $cliente=new Clientes("maria","madrid",725);//llama al constructor
    $cliente->facturar();
    $cliente->cobrar();
    ?>
</body>
</html>