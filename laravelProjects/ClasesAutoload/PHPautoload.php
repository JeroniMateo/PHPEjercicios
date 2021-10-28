<?php

spl_autoload_register(function ($nombre_clase) {
    include  'clases/' . "$nombre_clase" . ".php";
});

$obj  = new Persona();
$obj2 = new Animal();
$obj ->cargarClase();

/*
string(7) "IPrueba"

Fatal error: Interface 'IPrueba' not found in ...
*/
?>