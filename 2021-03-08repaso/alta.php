<?php

$id=null;
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];

$conexion=new mysqli("localhost","root","","amazon",3306);
//$insertado=$conexion->query("INSERT INTO productos (id, nombre, unidades, precio, fecha) VALUES (NULL, '".$nombre."', '".$unidades."', '".$precio."', '".$fecha."');");
//$insertado=$conexion->query("INSERT INTO productos VALUES (NULL, '".$nombre."', '".$unidades."', '".$precio."', '".$fecha."');");
$insertado=$conexion->prepare("INSERT INTO productos VALUES (?,?,?,?,?)");//query paramétrica
$insertado->bind_param('ssids',$id,$nombre,$unidades,$precio,$fecha);
$insertado->execute();
echo("dato almacenado ".$insertado->affected_rows);