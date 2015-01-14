<?php

namespace classes;

use classes\UserLogin;
use models\exemplo\ExemploModel;

class MainController extends UserLogin
{

    /**
     * $db
     *
     * Nossa conexão com a base de dados. Manterá o objeto PDO
     *
     * @access public
     */
    public $db;

    /**
     * $phpass
     *
     * Classe phpass 
     *
     * @see http://www.httpopenwall.com/phpass/
     * @access public
     */
    public $phpass;

    /**
     * $title
     *
     * Título das páginas 
     *
     * @access public
     */
    public $title;

    /**
     * $login_required
     *
     * Se a página precisa de login
     *
     * @access public
     */
    public $login_required = false;

    /**
     * $permission_required
     *
     * Permissão necessária
     *
     * @access public
     */
    public $permission_required = 'any';

    /**
     * $parametros
     *
     * @access public
     */
    public $parametros = array();

    /**
     * Construtor da classe
     *
     * Configura as propriedades e métodos da classe.
     *
     * @since 0.1
     * @access public
     */
    public function __construct($parametros = array())
    {
        // Instancia do DB
        //$this->db = new ConexaoDB();
        // Phpass
        $this->phpass = new \classes\PasswordHash(8, false);

        // Parâmetros
        $this->parametros = $parametros;

        // Verifica o login
        // $this->check_userlogin();
    }

    /**
     * 
     * @param string $oDir_eNomeView nome do diretório e da view a ser carregada. Ex.: dir/view ---> home/home
     * @param string $parametros ação do controller, ou seja, o metodo.
     * @param object $modelo retorna  o objeto do model
     * 
     */
    protected function view($oDir_eNomeView, $parametros = null, $modelo = null) //carrega as view 
    {
        require_once (INCLUDES . 'header.phtml'); // carrega o header da pagina

        require_once ( INCLUDES . 'menu.phtml'); // menu 

        require_once (VIEWS . $oDir_eNomeView . '-view.phtml'); // valor do controller passado na url para carrega a view 

        require_once (INCLUDES . 'footer.phtml'); // rodape da pagina
    }

    public function load_model($model_name = false)
    {
        // Um arquivo deverá ser enviado
        if (!$model_name)
            return;

        // Garante que o nome do modelo tenha letras minúsculas
        $model_name = strtolower($model_name);

        // Inclui o arquivo
        $model_path = ABSPATH . MODELS . $model_name . '.php';

        // Verifica se o arquivo existe
        if (file_exists($model_path)) {

            // Inclui o arquivo
            require_once $model_path;

            // Remove os caminhos do arquivo (se tiver algum)
            $model_name = explode('/', $model_name);

            // Pega só o nome final do caminho
            $model_name = end($model_name);

            // Remove caracteres inválidos do nome do arquivo
            $model_name = preg_replace('/[^a-zA-Z0-9]/is', '', $model_name);

            //Nome da namespace 
            $model_name = '\models\\' . $model_name;

            // Verifica se a classe existe
            if (class_exists($model_name)) {

                // Retorna um objeto da classe
                $objt = new $model_name($this->db, $this);
                return $objt;
            }
            return;
        }
    }

}
