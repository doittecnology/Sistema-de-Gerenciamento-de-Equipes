<?php

/**
 * Configuração geral
 */
// Caminho para a raiz
define('ABSPATH', dirname(dirname(__DIR__)).'/');

// Caminho para a pasta de uploads
define('UP_ABSPATH', ABSPATH . 'views/uploads/');

// URL da home
define('HOME_URI', 'http://localhost/ProjetoDoIt/');

// Nome do host da base de dados
define('HOSTNAME', 'localhost');

// Nome do DB
define('DB_NAME', '#');

// Usuário do DB
define('DB_USER', '#');

// Senha do DB
define('DB_PASSWORD', '#');

// Charset da conexão PDO
define('DB_CHARSET', 'utf8');

// Se você estiver desenvolvendo, modifique o valor para true
define('DEBUG', true);

//Constante VIEWS
define('VIEWS', 'views/');

//Constante INCLUDES
define('INCLUDES', VIEWS . 'includes/');

//Constante CONTROLLERS
define('CONTROLLERS', 'controllers/');

//Constante MODELS
define('MODELS', 'models/');

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH.'loader.php';







