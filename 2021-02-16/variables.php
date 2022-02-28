<?php
    
function abrirConexion(){
    //$conn=new mysqli('localhost','root','','base1',3306)
   //or die ('Error de conexión');
   try{
        $conn=new mysqli('localhost','root','','tienda',3306);
        $consulta='select * from productos';
        $resultado=mysqli_query($conn,$consulta);
        //print_r($resultado);

        echo("<table border='5'>
        <td>Id</td>
        <td>Producto</td>
        <td>Unidades</td>
        <td>precio</td>");
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
        $consulta="INSERT INTO `productos` (`$_POST[id]`,$_POST[nombre], $_POST[unidades],$_POST[precio] ) VALUES (NULL, 'naranjas', '5', '3')";
        $resultado=mysqli_query($conn,$consulta);
        echo("<p>registro insertar</p>");
    
    }
?>