<?php

/**
 * ¿Que son las interfaces?
 * 
 * Las interfaces de objetos permiten crear codigo con el cual especificamos que metodos deben ser 
 * implementados por una clase.
 * 
 * Las interfaces son definidas utilizando la palabra clave interface, de la misma forma que con clases
 * estandar, pero sin metodos que tengan su contenido definido.
 * 
 * Todos los metodos declarados en una interfaz deben ser publicos.

 * NOTA: Las interfaces de objetos lo que hacen es especificar a una clase que metodos reglamentariamente
 * debe tener, ejemplo: si usted esta usando una interface de una Persona y esa persona tiene metodos como hablar, correr. La clase que herede de esa Interface
 * obligatoriamente debe utilizar o crear los metodos el cual ya estan definidos en la Interface
  
 * Hablemos de los implements
 * 
 * Para implementar una interfaz, se utiliza el operador implements. Todos los metodos en una interfaz deben ser implementados dentro de la clase; el no cumplir 
 * con esta regla resultara con un error fatal. Las clases pueden implementar mas de una interfaz si se deseara, separandolas cada una por una coma.
 * Las interfaces se pueden extender al igual que las clases utilizando el operador extends. La clase que implemente una interfaz debe utilizar debe utilizar exactamente
 * las mismas estructuras de metodos que fueron definidos en la interfaz. De no cumplir con esta regla, se generara un error fatal.
 * 
 */

/*
 Ejercicio propuesto:
 Vamos a realizar una aplicacion para automoviles donde se debera tener gasolina para poder encender el
 automovil, ademas este podra usarse pero gastara gasolina y una ves que su tanque este vacio se va ha apagar.
  */

interface Auto{

    // Metodos (Siempre van a ser publicos)
    public function encender();
    public function apagar();

}

interface Gasolina extends Auto{

    public function vaciarTanque();
    public function llenarTanque($cant);

}

// Esta clase obligatoriamente debe contener todos los metodos definidos en la interface
class Deportivo implements Gasolina{ // Para implementar una interface en una clase se usa "implemets"
    
    private $estado = false;
    private $tanque = 0;

    public function estado(){
        if ($this->estado) { // Si es true
            print "El auto esta encendido y tiene " . $this->tanque . " de litros en el tanque.";
        }else{
            print "El auto esta apagado<br>";
        }
    }

    // Como la interface Gasolina hereda de la interface Auto, debe llevar tambien ese par de metodos (encender y apagar) obligatoriamente
    public function encender(){
        if ($this->estado) { // Si esta encendido
            print "No puedes encender el auto 2 veces<br>";
        }else{
            if ($this->tanque <= 0) {
                print "Usted no puede encender el auto porque el tanque esta vacio<br>";
            }else{
                print "Auto encendido<br>";
                $this->estado = true;
            }

        }
    }

    public function apagar(){
        if ($this->estado) { // Si esta encendido
            print "Auto apagado<br>";
            $this->estado = false;
        }else{
            print "El Auto ya esta apagado<br>";
        }
    }

    public function vaciarTanque(){
        $this->tanque = 0;
    }

    public function llenarTanque($cant){
        $this->tanque = $cant;
    }

    public function usar($km){ // Metodo propio
        if ($this->estado) { // Si el auto esta prendido
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;
            if($this->tanque <= 0){
                $this->estado = false;
            }
        }else{
            print "El Auto esta apagado y no se puede usar<br>";
        }
    }

}

$obj = new Deportivo();
$obj->llenarTanque(100); // Llenamos el tanque
$obj->encender();
$obj->usar(20); // Recorremos 20km
$obj->estado();
