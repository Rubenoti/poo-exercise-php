<?php
require_once __DIR__.'/lib/Persona.php';
require_once __DIR__.'/lib/Session.php';

function get_personas(){

    $personas = array();

    $persona1 = new Persona("Ruben", "infantes", 24);
    $personas['Ruben']  = $persona1;

    $persona2 = new Persona("Pepito","Perez", 15);
    $personas['Pepito']  = $persona2;

    $persona3 = new Persona("Alvaro","Alvise",50);
    $personas['Alvaro']  = $persona3;

    $persona4 = new Persona("Menganito","Mengano",18);
    $personas['Menganito']  = $persona4;

    return $personas;
}




