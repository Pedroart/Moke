<?php

$config = (object) array(
    
    'database' => (object) array(
        'host' => 'localhost',
        'username' => 'root',
        'pass' => 'password',
        'database' => 'db'
    ),

    'app_info' => (object) array(
        'appName'=>"Sistema de Practicas",
        'appURL'=> "http://practicas.test"
    )
);


error_reporting(E_ALL);
ini_set('display_errors', '1');
// Carpetas
define("__DIREC__",__DIR__);
define('_app_',__DIREC__.'/app');
define('_cor_',__DIREC__.'/core');
define('_pub_',__DIREC__.'/public');

// URL
define('_URL_',$config->app_info->appURL);