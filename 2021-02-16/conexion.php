<?php

function abrirConexion(){
    //$conn=new mysqli('localhost','root','','base1',3306)
   //or die ('Error de conexión');
   try{
        $conn=new mysqli('localhost','root','','base1',3306);
        $consulta='select * from clientes';
        $resultado=mysqli_query($conn,$consulta);
        //print_r($resultado);

        echo("<table border='5'>
        <td>Id</td>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Facturacion</td>");
        while ($a = mysqli_fetch_all($resultado)) {
            echo("<tr>");
            foreach($a as $col_value)
            {
                echo("<td>".$col_value[0]."</td>");
                echo("<td>".$col_value[1]."</td>");
                echo("<td>".$col_value[2]."</td>");
                echo("<td>".$col_value[3]."</td>");
                echo("</tr>");
            }//cierra foreach
        }//cierra while
        echo("</table>");

   }//cierra try
   catch(Error $err){
        echo("error de conexion");
   }
    
    return $conn;
}//cierra función 

function insertar(){
    $conn=new mysqli('localhost','root','','base1',3306);
    $consulta="INSERT INTO `clientes` (`id`, `nombre`, `ciudad`, `facturacion`) 
    VALUES (NULL, 'david', 'getafe', '10')";
    $resultado=mysqli_query($conn,$consulta);
    echo("<p>registro insertar</p>");

}//cierrra función insertar

function cerrarConexion($conn){
    $conn->close();
}