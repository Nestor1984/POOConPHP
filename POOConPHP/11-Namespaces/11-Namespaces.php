<?php

/**
 * ¿ Que son los nombres de espacio (namespaces) ?
 * 
 * Los nombres de espacio nos ayudan a tener que colocar "sub-nombres" a nuestros archivos,
 * clases o funciones. Sin duda alguna es una gran ventaja para todos los que programan con la POO.
 * 
 * Ejemplo de los namespaces
 * 
 * Sin duda alguna unos de los ejemplos que podemos tomar es: ¿Cuantas veces hemos tenido que cambiar
 * nombres de clases por ejemplo, "Registro" a "Registro_estudiante" por que ya existia otra clase con el 
 * mismo nombre y por lo tanto podiamos tener una colision.
 */

use Models\Persona;

 require_once "api/Models/Persona.php";
 require_once "api/Controllers/PersonasController.php";

 /**
  * Para invocar a un nombre de espacio o namespaces
  * Sintaxis:
  * NombreDelNamespacesONombreDeEspacio\NombreDeLaClase::metodo;
  */
 Models\Persona::hola();
 Controllers\Persona::hola();
 