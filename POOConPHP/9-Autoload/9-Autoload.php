<?php
/**
 * Muchos desarrolladores que escriben aplicaciones orientadas a objetos crean un fichero
 * fuente PHP para cada definicion de clase. Una de las mayores molestias es tener que hacer
 * una larga lista de includes al comienzo de cada script.
 * Se puede definir una funcion que es automaticamente invocada en caso de que se este intentando
 * utilizar una clase/interfaz que todavia no haya sido definida. Al invocar a esta funcion el motor
 *  de scripting da una ultima oportunidad para cargar la clase antes de que PHP falle con un error.
*/

/**
 * ¿ Que vamos hacer?
 * Usaremos la funcion spl_autoload_register(), lo que va hacer es auto_cargar clases desde una funcion
 * donde intentemos cargar los archivos donde se encuentren esas clases.
 */

 // Metodo para crear clases automaticamente
 function autoload($clase){
    include "clases/" . $clase . ".php";
 }

 spl_autoload_register("autoload"); // Le pasamos como argumento la funcion autoload

 Auto::mostrar("Hola mundo");