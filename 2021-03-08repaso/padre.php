<?php

//propiedades y métodos de un objeto
//tipos de métodos : constructor, destructor, método normal

abstract class Padre{//clase abstract NO se puede instanciar, crear en memoria

    public function comer(){
        echo("<p>método comer</p>");
    }//cierra el método comer

    private function comerenprivado(){
        echo("<p>método comer en privado</p>");
    }//ciera el método comer

    public function jugar(){
        echo("<p>método jugar del padre</p>");
    }//cierra jugar
/* sobrecarga : dos métodos con el mismo nombre pero 
diferentes argumentos
    public function jugar($juego){
        echo("<p>el padre está jugando a ".$juego."</p>");
    }//cierra jugar
*/
}//cierra clase Padre