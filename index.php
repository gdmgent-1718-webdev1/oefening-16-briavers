<?php

function mijnAutoloader($name) {
    $path = "${name}.php";
    $path = str_replace('\\',DIRECTORY_SEPARATOR, $path);
    require_once "${name}.php";



}

spl_autoload_register('mijnAutoloader');
$post1 = new Kunstwerken\Boek();

echo var_dump($post1);
