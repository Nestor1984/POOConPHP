<?php

/*

ATRIBUTOS:
- Simples variables o arrays.
- Definicion del tipo del atributo:
    (public, private, protected)


METODOS:
- Accede a atributos con $this->nombre
- Podemos acceder a otros metodos con $this o self::

*/

/* Ejercicio a realizar
- Tenemos una escuela donde registraremos nombre y apellido de cada persona.
- Usaremos 2 atributos que son su nombre y apellido y 2 metodos que son guardar y mostrar
*/

class Persona{

    // Atributos
    public $nombre = array();
    public $apellido = array();

    // Metodos
    public function guardar($nombre, $apellido){
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
    }

    public function mostrar(){
        for ($i=0; $i < count($this->nombre); $i++) {  // La funcion count: Te devuelve el numero de registros que contiene un array  
            self::formato($this->nombre[$i], $this->apellido[$i]); // Self: ( self::nombreDelMetodo($argumentos); ) Con esta palabra invocamos a un metodo
          //Persona::formato($this->nombre[$i], $this->apellido[$i]); // Esta es otra forma de hacer
          //$this->formato($this->nombre[$i], $this->apellido[$i]); // Esta es otra forma de hacer
        }
    }

    public function formato($nombre, $apellido){
        echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
    }

}

# Creamos el objeto: Instanciamos una clase
$persona = new Persona();
$persona->guardar("Nestor", "Mamani"); // Ingresamos registros
$persona->guardar("Keyla", "Abigail"); // Ingresamos registros
$persona->mostrar(); // Invocamos al metodo guardar

?>
