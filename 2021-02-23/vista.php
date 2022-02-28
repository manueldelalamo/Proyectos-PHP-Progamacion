<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('Persona.php');
    include_once('Alumnos.php');

    
    $alumno=new Alumno();
    $alumno->nombrar("Juan");
    $alumno->apellidar("López");
    $alumno->clasificar("Madrid");
    $alumno->notar("8.5");
    $alumno->fechar("09/05/2020");
    echo("<p>--------</p>");
    $alumno=new Alumno();
    $alumno->nombrar("María");
    $alumno->apellidar("Martinez");
    $alumno->clasificar("Sevilla");
    $alumno->notar("9.2");
    $alumno->fechar("04/06/2019");
    echo("<p>--------</p>");
    $alumno=new Alumno();
    $alumno->nombrar("Laura");
    $alumno->apellidar("Pérez");
    $alumno->clasificar("Córdoba");
    $alumno->notar("7.6");
    $alumno->fechar("05/07/2018");
    ?>
</body>
</html>