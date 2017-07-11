<?php
	namespace controller;
	require_once('AutoLoader.php');
	use autoload\AppClassLoader;
	AppClassLoader::loadControllerRequires();
    AppClassLoader::loadBaseControllerRequires();
	use berkaPhp\Controller\AppController;
	use berkaPhp\template\AppView;

	class InstallerController extends AppController
	{
        private $generator;

		function __construct() {
			parent::__construct(false);
            $this->generator = $this->load_component('Installer');
		}

		function index() {
			$this->appView->render();
		}

        function database() {

            if($this->is_set($this->get_post())) {
                $this->generator->db_settings($this->get_post());
            }

            $this->appView->render();
        }

        function csv() {
            \berkaPhp\helpers\FileStream::array_to_csv('');
        }
	}

?>