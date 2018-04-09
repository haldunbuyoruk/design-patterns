<?php

spl_autoload_register(function ($class) {
    $fileRoot = '';
    $parts = explode('\\', $class);
    if(!empty($parts)){
        foreach ($parts as $key => $value) {
            $fileRoot .= '/'.$value;
        }
    }

    require_once __DIR__.$fileRoot . '.php';
});

