<?php

/**
 * La herencia significa que se pueden crear nuevas clases partiendo de clases existentes
 * que tendra todos los atributos y los metodos de su superclase o clase padre y ademas se le 
 * podran anadir otros atributos y metodos propios
 * PHP NO PERMITE LA HERENCIA MULTIPLE
 */
class Vehiculo{

    // Atributos
    public $motor = false; # Identifica si el motor esta apagado o encendido
    public $marca;
    public $color;

    // Metodos
    public function estado(){
        if ($this->motor) { # Si es verdadero
            echo "El motor esta encendido<br>";
        }else{
            echo "El motor esta apagado<br>";
        }
    }

    public function encender(){
        if ($this->motor) { # Si es verdadero
            echo "Cuidado, el motor ya esta prendido<br>";
        }else{
            echo "El motor ahora esta encendido<br>";
            $this->motor = true;
        }
    }

}

class Moto extends Vehiculo{
    
    public function estadoMoto(){
        $this->estado(); # Podemos llamar a un metodo de la super clase, por que ese metodo utiliza el modificador de acceso public (tambien puede ser protected)
    }

}

class CuatriMoto extends Moto{ // Heredamos en cadena
    // Subclase que hereda de Moto
}

# Nota: Los metodos protected no pueden ser usados a traves del objeto
$moto = new CuatriMoto();
$moto->estado(); // Podemos acceder al metodo estado() que pertenece a la superclase Vehiculo, por que nuestra instancia de la clase CuatriMoto hereda de la clase Moto y Moto hereda de la superclase Vehiculo