<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

define("__DIREC__",__DIR__);
include __DIREC__."/core/autoloader.php";


$roteador = new core\router();

// API GENERAL

// PAGINAS

$roteador->get("/productos",function(){
    echo "productos";
});