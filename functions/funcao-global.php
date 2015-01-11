<?php

//função responsavel para carregar todas as classes
spl_autoload_register(function($class) {

    $file = ABSPATH . '/classes/' . $class_name . '.php';

    if (!file_exists($file)) {
        require_once ABSPATH . INCLUDES . '404.php';
        return;
    }

    require_once (str_replace('\\', '/', $file)); //caso o vervidor seja Linux/Unix 
});


