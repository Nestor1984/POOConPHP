<?php

/**
 * ¿Que son los traits?
 * 
 * Personalmente los considero como fragmentos de codigos que pueden ser reusados en clases, los cuales
 * pueden tener un poco de similitud con una clase.
 * 
 * Las clases pueden permitir usar tantos traits sean posibles simplemente separandolos con una , estaria 
 * funcionando de manera correcta.
 * 
 * Mas sobre traits
 * 
 * Un trait es similar a una clase, peo con el unico objetivo de agrupar funcionalidades muy especificas y 
 * de una manera coherente.
 * No se puede instanciar directamente un Trait.
 * Es por tanto un anadido a la herencia tradicional, y habilita la composicion horizontal de comportamientos;
 * es decir, permite combinar miembros de clases sin tener que usar herencia.
 */

 trait Persona2{ // Nombre del trait

    // Atributos
    public $nombre;

    // Metodos
    public function mostrarNombre(){
        echo $this->nombre;
    }

    public abstract function asignarNombre($nombre); // Un trait tambien puede tener metodos abstractos

 }

 trait Trabajador{ // Nombre del trait

    protected function hola(){
        echo " es del trabajador";
    }

 }

 class Persona{

    use Persona2, Trabajador; // Con la palabra reservada 'use' llamamos al trait que queremos usar. (Podemos llamar a multiples traits)

    // Sobreescribimos al metodo abstracto
    public function asignarNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function hola(){
        echo " es de la clase";
    }

 }

 // Hacemos una instancia de la clase Persona
 $persona = new Persona();
 $persona->asignarNombre("Nestor");
 $persona->mostrarNombre();
 // Aqui invocamos al metodo hola (como tenemos 2 metodos hola, uno del trait Trabajador y otro de la clase Persona. PHP toma al metodo hola() de la clase Persona como prioridad)
 $persona->hola();


?>