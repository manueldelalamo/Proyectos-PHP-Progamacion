<?php

for ($i=0; $i <= 10; $i++) { 
    if($i==5){
        echo("premio");
        break;
    }
    echo($i." ");
}//cierra for

echo("<h3>fin del for</h3>");

$facturacion=array(
    array("cliente"=>"Endesa","ventas"=>1500),
    array("cliente"=>"Repsol","ventas"=>4200),
    array("cliente"=>"Iberdrola","ventas"=>3600),
    array("cliente"=>"Telefónica","ventas"=>2800)
);

print_r($facturacion);

for ($i=0, $limite=count($facturacion); $i <$limite ; $i++) { 
    print_r($facturacion[$i]);
    echo("<br/>");
}

echo("<h2>foreach</h2>");
echo("<h3>total facturado Enero 2021</h3>");
foreach ($facturacion as $dato) {
    print_r($dato["cliente"]);
    echo(" : ");
    print_r($dato["ventas"]);
    echo(" € : Total IVA incluido ");
    print_r($dato["ventas"]*1.21);
    echo(" €");
    echo("<br/>");
}