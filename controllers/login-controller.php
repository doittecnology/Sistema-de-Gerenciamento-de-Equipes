<?php

namespace classes;

use classes\MainController;

/**
 * LoginController - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class LoginController extends MainController
{

    public function index()
    {
        // Título da página
        $this->title = 'Login';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
    }

}
