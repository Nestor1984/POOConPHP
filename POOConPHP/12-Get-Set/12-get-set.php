<?php

/*
    get: obtener
    set: establecer
*/

class Colegio{

    // Atributos
    public $nombre;
    private $director;

    // Metodos

    // Metodo set: para establecer un valor a un atributo
    public function setDirector($direc){
        $this->director = $direc;
    }

    // Metodo get: para obtener el valor de un atributo
    public function getDirector(){
        return $this->director;
    }

}    

// Hacemos una instancia de la clase colegio
$cole1 = new Colegio();
$cole1->setDirector("Juan Zapata"); // Establecemos el nombre
echo "Nombre del director: " . $cole1->getDirector(); // Obtenemos el valor de la variable

?>