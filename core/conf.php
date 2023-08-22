<?php

$config = (object) array(
    
    'database' => (object) array(
        'host' => 'localhost',
        'username' => 'root',
        'pass' => 'password',
        'database' => 'db'
    ),

    'app_info' => (object) array(
        'appName'=>"Moke",
        'appURL'=> "http://moke.test"
    )
);


error_reporting(E_ALL);
ini_set('display_errors', '1');
// Carpetas

define('_app_',__DIREC__.'/app');
define('_cor_',__DIREC__.'/core');

define('_pub_',__DIREC__.'/public');
define('_adm_',__DIREC__.'/admin');

// URL
define('_URL_',$config->app_info->appURL);