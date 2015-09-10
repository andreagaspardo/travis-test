<?php

function autoLoader($class) {
    $file = __DIR__ . '/' . $class . '.php';
    if (is_file($file)) {
        return require_once($file);
    }
    return false;
}

require __DIR__ . '/../vendor/autoload.php';
spl_autoload_register('autoLoader');
