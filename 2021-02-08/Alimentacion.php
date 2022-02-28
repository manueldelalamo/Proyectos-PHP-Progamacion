<?php
include_once('Producto.php');
class Alimentacion extends Producto {

    public function pesar(){
        echo("<p>Estoy pesando</p>");
    }
}