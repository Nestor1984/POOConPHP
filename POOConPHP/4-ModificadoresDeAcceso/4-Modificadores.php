<?php
/**
 * 
 * Public: Esta propiedad es muy simple se puede realizar de todo con el atributo o el metodo
 * Private: Solo puede ser llamado desde otro metodo de la clase. No podemos llamar
 * a un metodo privado desde donde definimos un objeto.
 * Protected: Un atributo o metodo protected puede ser accedido por la clase, por todas sus subclases
 * pero no por los objetos que definimos de dichas clases.
 *
 */

 class Facebook{

    // Atributos
    public $nombre;
    public $edad;
    private $pass; // Contrasena

    // Metodos
    public function __construct($nombre, $edad, $pass){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    public function verInformacion(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        self::cambiarPass("Baby"); # Cambiamos la contrasena
        echo "Password: " . $this->pass . "";
    }

    private function cambiarPass($pass){
        $this->pass = $pass;
    }

 }

 $facebook = new Facebook("Nestor Jhoel", 19, "1234"); # Creamos una cuenta
 $facebook->verInformacion();