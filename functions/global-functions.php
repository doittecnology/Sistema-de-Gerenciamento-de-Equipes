<?php

/**
 * Verifica chaves de arrays
 *
 * Verifica se a chave existe no array e se ela tem algum valor.
 * Obs.: Essa função está no escopo global, pois, vamos precisar muito da mesma.
 *
 * @param array  $array O array
 * @param string $key   A chave do array
 * @return string|null  O valor da chave do array ou nulo
 */
function chk_array($array, $key)
{
    // Verifica se a chave existe no array
    if (isset($array[$key]) && !empty($array[$key])) {
        // Retorna o valor da chave
        return $array[$key];
    }

    // Retorna nulo por padrão
    return null;
}

//carrega as dependecias do projeto
require_once ABSPATH . 'vendor/autoload.php';

// chk_array
//função responsavel para carregar todas as classes
spl_autoload_register(function($class) {

    $file = ABSPATH . $class . '.php';
    if (!file_exists($file)) {
        require_once ABSPATH . INCLUDES . '404.php';
        return;
    }

    require_once (str_replace('\\', '/', $file)); //caso o vervidor seja Linux/Unix 
});

