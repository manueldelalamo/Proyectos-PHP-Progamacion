<?php

function abrirConexion(){
    $conn=new mysqli('localhost','root','','tienda2',3306);
        $consulta='select * from clientes';
        $resultado=mysqli_query($conn,$consulta);
        echo("<table border='5'>
        <td>Id</td>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Presupuesto</td>");
        while ($a = mysqli_fetch_all($resultado)) {
            echo("<tr>");
            foreach($a as $col_value)
            {
                echo("<td>".$col_value[0]."</td>");
                echo("<td>".$col_value[1]."</td>");
                echo("<td>".$col_value[2]."</td>");
                echo("<td>".$col_value[3]."</td>");
                echo("</tr>");
            }
        }
        echo("</table>");
}