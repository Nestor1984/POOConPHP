<?php

/*
¿Que es esto?

Un metodo estatico pertenece a la clase pero no puede acceder a los atributos de una
instancia. La caracteristica fundamental es que un metodo estatico se puede llamar sin tener 
que crear un objeto de dicha clase.

Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado (aunque
un metodo estatico si lo puede hacer).

- Un metodo estatico no puede acceder a los atributos de la clase.

- Indicamos primero el nombre de la clase, luego el operador '::' y por ultimo indicamos el
nombre del metodo a llamar.

- Las propiedades estaticas no pueden ser accedidas a traves del objeto utilizando el operador
flecha (->)

- Un metodo estatico es lo mas parecido a una funcion de un lenguaje estructurado. Solo que se lo encapsula
dentro de una clase.
 */

 class Pagina{

    // ATRIBUTOS
    public $nombre = "Codigo Facilito";
    public static $url = "https://www.youtube.com/watch?v=OZoo_AnTtdA&list=RDOZoo_AnTtdA&start_radio=1";

    // METODOS
    public function bienvenida(){
        echo "Bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . self::$url . "<b><br>"; // Para acceder a los atributos estaticos no podemos usar $this->
    }

    public static function bienvenida2(){
        echo "Bienvenidos " . Pagina::$url;
    }

 }

 class Web extends Pagina{
    // Podemos heredar miembros estaticos
 }

 $pagina = new Pagina();
 $pagina->bienvenida();

Web::bienvenida2();

