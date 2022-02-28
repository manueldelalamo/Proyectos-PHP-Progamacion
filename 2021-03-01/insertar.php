<?php

$ciudad=$_POST['ciudad'];
$unidades=$_POST['unidades'];
$usuario=$_POST['usuario'];
$fecha=$_POST['fecha'];


function abrirConexion(){
    $conn=new mysqli('localhost','root','','guerramuerte',3306);
    $consulta='select * from clientes';
    $resultado=mysqli_query($conn,$consulta);
}



function insertar(){
    $conn=new mysqli('localhost','root','','guerramuerte',3306);
    $consulta="INSERT INTO `clientes` (`id`, `ciudad`, `unidades`, `usuario`, `fecha`) 
    VALUES (NULL, '$_POST[ciudad]', '$_POST[unidades]', '$_POST[usuario]', '$_POST[fecha]')";
    $resultado=mysqli_query($conn,$consulta);
    echo("<p>registro insertar</p>");

}

//prueba a insertar un registro en la tabla.
//en cuanto lo tengas, te puedes marchar.