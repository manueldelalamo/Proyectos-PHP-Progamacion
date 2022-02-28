<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Clases abstractas, interfaces y sobrecarga</h2>
    <?php
    include_once('Persona.php');
    include_once('Deportista.php');
    include_once('Trabajos.php');

    //$persona=new Persona();
    //$persona->andar();
    $deportista=new Deportista();
    $deportista->jugar();
    $deportista->andar();
    $trabajo=new Trabajos();
    $trabajo->podar();
    $trabajo->picar("piedra");
    ?>
</body>
</html>