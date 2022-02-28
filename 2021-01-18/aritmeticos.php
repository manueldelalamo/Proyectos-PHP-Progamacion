<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores aritméticos</h2>
    <p>+ - * / % **</p>
    <?php
        $n1=8;
        $n2=3;

        //suma
        $suma=$n1+$n2;
        echo($suma);
        echo("<br/>");
        //resta
        $resta=$n1-$n2;
        echo($resta);
        echo("<br/>");
        //división
        $division=$n1/$n2;
        echo($division);
        echo("<br/>");
        //módulo
        $modulo=$n1%$n2;
        echo($modulo);
        echo("<br/>");
        //exponente - elevado - potencia
        $exponente=pow($n1,$n2);
        echo($exponente);


    ?>
</body>
</html>