<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Práctica con arrays en PHP</h2>
    <?php
        $notas=array(
            "base de datos"=>7.5,
            "programación"=>6.8,
            "lenguaje de marcas"=>8.2,
            "sistema operativos en red"=>5.4

        );
        
        //Muestra el listado de asignaturas con sus notas ordenadas de 
        //mayor a menor (por nota)
        arsort($notas);
        print_r($notas);

        //Muestra la nota media que has obtenido
        echo("<br>");
        $suma=array_sum($notas);
        $total=count($notas);
        $media=array_sum($notas)/count($notas);
        echo($media);



    ?>
</body>
</html>