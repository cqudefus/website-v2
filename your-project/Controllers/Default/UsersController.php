<?php
	namespace controller;
	require_once('AutoLoader.php');
	use autoload\AppClassLoader;
	AppClassLoader::loadControllerRequires();
	use berkaPhp\Controller\AppController;
	use berkaPhp\template\AppView;

	class UsersController extends AppController
	{
		private $flash;
		private $paginate;

		function __construct() {
			parent::__construct();
			$this->flash = $this->load_component('Flash');
			$this->paginate = $this->load_component('Paginate');
		}

		function index() {

			$result = $this->model->fetch_all();
			$this->appView->set('users', $result);
			$this->appView->render();
			//$this->appView->render_ajax();
		}

		function add() {
			if($this->is_set($this->get_post())) {
				if ($this->model->add($this->get_post())) {
					$this->flash->success(' Saved user');
				} else {
					$this->flash->error(' Could not Saved user !');
				}
			}

			$this->appView->render();
		}

		function edit($params) {
			$id = $params['params'][0];

			if($this->is_set($this->get_post())) {
				if ($this->model->update($this->get_post())) {
					$this->flash->success(' Edited user');
				} else {
					$this->flash->error(' Could not Edit user !');
				}
			}

			$result = $this->model->fetch_by(['user_id'=>$id]);
			$this->appView->set('user',$result);
			//$this->appView->render();
			$this->appView->render();
		}

		function delete($params) {
			$id = $params['params'][0];
			if($this->model->delete($id)) {
				$this->flash->success(' Deleted user');
			} else {
				$this->flash->error(' Could not Delete user !');
			}

			$this->index();
		}

		function view($params) {
			$id = $params['params'][0];
			$this->appView->render();
		}

        function login() {
            if($this->is_set($this->get_post())) {
                $user = $this->model->fetch_where([
                    'user_email'=>$this->get_post()['user_email'],
                    'user_password'=>$this->get_post()['user_password']
                ]);

                if (sizeof($user) == 1) {
                    $this->session->add('user', $user);
                    //$this->set_user_right($user[0]['user_role']);
                    \berkaPhp\helpers\RedirectHelper::redirect('/home');
                } else {
                    $this->appView->set('flash','Invalid login details, try again');
                }
            }

            $this->appView->render();

        }

        function logout() {
            $this->session->remove('user');
            \berkaPhp\helpers\RedirectHelper::redirect('/home');
        }

		function api() {
			return $this->json_format($this->model->fetch_all());
		}

		function search() {
			$tag = $this->get_POST_key('search');
			$result = $this->model->fetch_like($tag);
			$this->appView->set('users',$result);
			$this->appView->run_render('index');
		}

	}

?>