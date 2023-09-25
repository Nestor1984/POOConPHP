<?php

/**
 * ¿ Que son las clases abstractas?
 * Una clase abstracta tiene por objetivo agrupar atributos y metodos que luego seran heredados por
 * otras subclases.
 * Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al
 * menos un metodo abstracto debe ser definida como tal. Los metodos definidos como abstractos simplemente
 * declaran la firma del metodo, pero no pueden definir la implementacion.
 * 
 * NOTA: NOS OBLIGA A QUE LOS METODOS DE TIPO ABSTRACTO DEBAN SER DEFINIDOS EN LA CLASE QUE ESTA HEREDANDO (HERENCIA FORZADA)
 * 
 * Tambien hay metodos abstractos
 * - Si queremos que las subclases implementen comportamientos obligatoriamente podemos definir metodos abstratos
 * - Un metodo abstracto se declara en una clase pero no se lo implementa.
 * 
 */

 abstract class Molde{

    public abstract function ingresarNombre($nombre);
    public abstract function obtenerNombre();

 }

 class Persona extends Molde{ // Debemos implementar los metodos de la superclase obigatoriamente
    
    private $mensaje = "Hola como estas";
    private $nombre;

    public function mostrar(){
        print $this->mensaje;
    }

    public function ingresarNombre($nombre, $userName = " nj "){ // $userName = " nj ": es un parametro opcional
        $this->nombre = $nombre . $userName;
    }

    public function obtenerNombre(){
        print $this->nombre;
    }

 }

 $obj = new Persona();
 $obj->ingresarNombre("Nestor", " Crack");
 $obj->obtenerNombre();
 echo "<br>";
 $obj->mostrar();