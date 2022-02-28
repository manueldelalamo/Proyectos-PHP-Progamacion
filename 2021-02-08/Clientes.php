<?php

class Clientes{

    //propiedades
    public $nombre;
    public $ciudad;
    public $facturacion;

    //métodos


    //constructor ; cuando new
    function __construct($nombre,$ciudad,$facturacion)
    {
        $this->nombre=$nombre;
        $this->ciudad=$ciudad;
        $this->facturacion=$facturacion;
        echo("<p>Lamando al construtor</p>");
    }

    public function facturar(){
        echo("<p>Detalle de facturación : ".$this->nombre." - ".$this->facturacion."</p>");
    }

    public function cobrar(){
        echo("<p>Detalle de cobro : ".$this->nombre." - ".$this->facturacion."</p>");
    }
}//cierro clase Clientes