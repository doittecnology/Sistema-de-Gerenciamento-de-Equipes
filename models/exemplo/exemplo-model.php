<?php

namespace models;

class ExemploModel
{

    public function __construct($db = false, $controller = null)
    {
        // Configura o DB (PDO)
        $this->db = $db;

        // Configura o controlador
        $this->controller = $controller;

        // Configura os parâmetros
        $this->parametros = $this->controller->parametros;

        // Configura os dados do usuário
        $this->userdata = $this->controller->userdata;
    }

}
