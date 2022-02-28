<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2. Crea un formulario que pida una ciudad de una 
lista desplegable. 
al enviar el formulario se guarda la ciudad en una
variable. Pero el php está en el mismo archivo que
el formulario (debes usar php_self)
si es madrid, saca un mensaje.
si es córdoba o sevilla o granada dices que es de
andalucía
si es burgos, segovia o león dices que es castillaLeon -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <select name="ciudad">
            <option value="0" >Madrid</option> 
            <option value="1">Córdoba</option> 
            <option value="2">Sevilla</option>
            <option value="3">Granada</option> 
            <option value="4">Burgos</option> 
            <option value="5">Segovia</option> 
            <option value="6">León</option> 
        </select>
        <input type="submit" value="enviar">
    </form>
<?php
    $ciudades=$_POST['ciudad'];
    switch ($ciudades) {
        case 0:
            echo "Estás en Madrid";
            break;
        case 1:
        case 2:
        case 3:
            echo "Estás en Andalucía";
            break;
        case 4:
        case 5:
        case 6:
            echo "Estás en Castilla y León";
            break;
        default:
            echo "No conozco esa ciudad";
    }

?>
</body>
</html>