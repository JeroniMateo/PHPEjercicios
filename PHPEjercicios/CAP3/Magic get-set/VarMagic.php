<?php
spl_autoload_register(function ($name) {
    include  'Classes/' . "$name" . ".php";
});




$obj  = new ClaseVarMagic();
$obj->publica ="Soy PUblica";
$obj->protegida ="Estoy protegida";
$obj->privada1="Privada nº1";
$obj->privada2="Privada nº2";
$obj->privada3="Privada nº3";

var_dump($obj->publica);
?>