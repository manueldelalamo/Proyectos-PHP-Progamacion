<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Alta de nuevos usuarios</h2>
    <p>Rellene el siguiente formulario</p>
    <form  method="post" action="alta.php"></form>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <label for="ciudad">Ciudad</label>
    <select name="ciudad" id="ciudad">
    <option value="1">Madrid</option> 
    <option value="2">Sevilla</option> 
    <option value="3">Valencia</option>
    <option value="4">Cordoba</option> 
    </select>
    <br>
    <label for="unidades">Unidades</label>
    <input type="number" name="unidades" id="unidades"><br>
    <input type="checkbox" name="acepto" id="acepto">
    <label for="acepto">Acepto la politica de privacidad y cookies</label><br>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha"><br>
    <input type="submit" value ="Registrarse ahora ">
    </form>
</body>
</html>