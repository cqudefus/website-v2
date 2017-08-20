<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class HomeController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all home from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('home', $result);
			$this->appView->render();

		}

        /* Add hom into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved hom']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved hom !']);
				}
			}

			$this->appView->render();
		}

        /* Edit hom and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited hom']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit hom !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('hom',$result);
			$this->appView->render();
		}

        /* Delete hom from the table
        *  Getting hom Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted hom']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete hom !']);
			}

			$this->index();

		}

        /* Viewing hom from the table
        *  Getting hom Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('hom',$result);
			$this->appView->render();
		}

	}

?>
