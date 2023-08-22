<?php
define("__DIREC__",__DIR__);
include __DIR__."/core/conf.php";
include _cor_."/router.php";

$ruteador = new core\router();

$comando = $ruteador->obtenerPrimeraPalabra();


// API GENERAL
if  ($comando == "api"){
    echo 1;
}
// Dashboard
elseif ($comando == "adminmoke"){
    echo 2;
}

// PAGINAS
else{
    echo 3;
}






