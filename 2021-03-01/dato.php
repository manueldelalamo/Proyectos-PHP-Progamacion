<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datos.php" method="post">
        <label>Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar">
    </form>

    <?php

    session_start();
    echo("<p>Tu dirección es: ".$_SESSION['correo']."</p>");

    ?>
</body>
</html>