<?php

// Las clases: Sirven como molde para un objeto
class Persona{

    // ATRIBUTOS
    public $nombre = "Nestor";

    // METODOS
    public function hablar($mensaje){
        echo "<br>" . $mensaje;
    }

}

# Los objetos: tienden estar guardados en variables
$persona = new Persona();

echo $persona->nombre; // Con ->: Llamamos a los atributos y metodos
$persona->hablar("Saludos desde Bolivia");

?>