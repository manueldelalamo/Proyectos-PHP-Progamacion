<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conexión php con mysql</h2>
    <?php
    $con = mysqli_connect("127.0.0.1:33060", "root", "123456", "base1");
    print_r($con);
    ?>
</body>
</html>