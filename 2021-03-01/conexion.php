<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sesion.php" method="post">
        <p>Email: <input type="text" name="email"></p>
        <p>Unidades: <input type="number" name="unidades"></p>
        <label for="start"> Fecha: </label>
        <input type="date" id="start" name="fecha"
        value="2021-02-23" min="2018-01-01" max="2025-12-31">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>