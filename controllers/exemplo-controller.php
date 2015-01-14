<?php

namespace controllers;

use classes\MainController;

class ExemploController extends MainController
{

    // URL: dominio.com/exemplo/
    public function index()
    {
        // Carrega o modelo
        $modelo = $this->load_model('exemplo/exemplo-model');
        $this->view('exemplo/exemplo', null, $modelo);
    }

    // URL: dominio.com/exemplo/outra-acao
    public function OutraAcao()
    {
        $this->view('exemplo/acao', null, null);
    }

}
