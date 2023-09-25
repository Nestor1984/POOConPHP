<?php

/*
Metodos __construct & __destruct

El metodo constructor y el destructor son un par de metodos magicos de PHP muy usados
cuando desarrollamos con la POO.

__construct
- Al instanciar la clase el metodo se ejecuta al comienzo de manera automatica.
Reglas:
- Debe ser publico.
- No puede retornar nada.

__destruct
- Este metodo tambien se ejecuta de manera automatica pero al final de la clase.
Reglas:
- Debe ser publico.
- No puede retornar nada.

Ejemplo practico:
- Imaginemos que tenemos que construir un hogar de arriba hacia abajo, necesitamos un techo
el contenido y por supuesto la base de nuestra casa.

- Constructor
- Metodos
- Destructor

*/

/*
Ejercicio propuesto:
Loteria
- Vamos a realizar una aplicacion tipo loteria donde le indicaremos un numero aleatorio y la 
cantidad de intentos, esta debe mostrar los intentos y al final debe mostrar un mensaje si gano
o no el concursante.
*/

class Loteria{

    // Atributos
    public $numero;
    public $intentos;
    public $resultado = false;

    //Metodos
    public function __construct($numero, $intentos){ // El constructor: Es el primer metodo en ejecutarse
        $this->numero = $numero;
        $this->intentos = $intentos;
    }

    public function sortear(){
        $minimo = $this->numero / 2; # Resultado: 5
        $maximo = $this->numero * 2; # Resultado: 10

        for ($i=0; $i < $this->intentos; $i++) { 
            $int = rand($minimo, $maximo); # int: es el intento
            self::intentos($int);
        }
    }

    public function intentos($int){
        if ($int == $this->numero) { // Si el intento es igual al numero que yo coloque
           echo "<b>" . $int . " == " . $this->numero . "</b><br>";
           $this->resultado = true; # Cambiamos el valor de nuestra variable booleana
        }else {
            echo $int . " != " . $this->numero . "<br>";
        }
    }

    public function __destruct(){ // El destructor: Es el ultimo metodo en ejecutarse
        if ($this->resultado) { // Si hubo un resultado, si es true entonces
            echo "Felicidades, has ganado en " . $this->intentos . " intentos";
        }else {
            echo "Que lastima, has perdido en " . $this->intentos . " intentos";
        }
    }

}

# Instanciamos el objeto
$loteria = new Loteria(10, 10);
$loteria->sortear();


