<?php

namespace controllers;

use classes\MainController;

class HomeController extends MainController
{

    public function index()
    {
        // Título da página
        $this->title = 'Home';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $this->view('home/home', $parametros);
    }

}
