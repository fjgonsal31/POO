<?php

spl_autoload_register(function ($class_name) {

    $directory = __DIR__ . '/';
    $file = $directory . $class_name . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
