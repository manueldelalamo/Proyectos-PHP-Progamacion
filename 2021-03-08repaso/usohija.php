<?php

include_once('padre.php');
include_once('hija.php');

//daría error si Padre fuera una clase abstract
$padre1=new Padre();//crea un bojeto en memoria
$padre1->comer();
$hija1=new Hija();
$hija1->dormir();
$hija1->comer();
$hija1->jugar();