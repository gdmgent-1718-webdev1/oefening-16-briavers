<?php

function mijnAutoloader($name) {
    $path = "${name}.php";
     require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);



}

spl_autoload_register('mijnAutoloader');

$kunstwerk1 = new Kunstwerken\Beeldhouwerk();
$kunstwerk2 = new Kunstwerken\Boek();
$kunstwerk3 = new Kunstwerken\Dans();
$kunstwerk4 = new Kunstwerken\Film();
$kunstwerk5 = new Kunstwerken\Foto();
$kunstwerk6 = new Kunstwerken\Gedicht();
$kunstwerk7 = new Kunstwerken\Lied();
$kunstwerk8 = new Kunstwerken\Schilderij();
$kunstwerk9 = new Kunstwerken\Vaas();


$kunstwerk2 = new Kunstwerken\Boek();
    $kunstwerk2->setAantalPaginas(30);
    $kunstwerk2->setAantalWoorden(2357);
    //$kunstwerk2->setTittel("PHP 101");
    //$kunstwerk2->setArtiest("GOD");

echo var_dump($kunstwerk2);
