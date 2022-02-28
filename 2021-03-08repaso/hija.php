<?php

class Hija extends Padre{

    public function dormir(){
        echo("<p>estoy durmiendo</p>");
    }//cierra método dormir


    //sobreescritura - herencia
    public function jugar(){
        echo("<p>método jugar de la hija</p>");
    }//cierra jugar

}//cierra clase Hija