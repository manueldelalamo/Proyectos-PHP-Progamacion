<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conexión PHP Guía</h2>
    <?php
    if ($con = mysqli_connect("127.0.0.1:33065", "root", "123", "tienda")) {
        echo("<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>");
    
    $consulta="SELECT*FROM tienda.productos";
    mysql_select_db("tienda");    
    $datos=mysql_query($consulta);
    

    while ($fila= mysql_fetch_array($datos)) {
        echo "<p>";
        echo $fila ["id"];
        echo "-"; 
        echo $fila["nombre"];
        echo "-"; 
        echo $fila ["email"];
        echo "-"; 
        echo $fila["mensaje"];
        echo "</p>";
    }
    }else{
        echo ("<p> MySQL no conoce ese usuario y password</p>");
    }

    
    
    
    //$con = mysqli_connect("127.0.0.1:33065", "root", "123", "tienda");
    //print_r($con);
    ?>
</body>
</html>

