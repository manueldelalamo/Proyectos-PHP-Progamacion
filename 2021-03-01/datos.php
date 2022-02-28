<?php

session_start();

$_SESSION['correo']=$_POST["email"];
echo("<p>Tu dirección es: ".$_SESSION['correo']."</p>");