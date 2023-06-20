<?php

spl_autoload_register(function($className) {
    echo $className;
	$file = __DIREC__.'/'.$className.'.php';
    include $file;
});