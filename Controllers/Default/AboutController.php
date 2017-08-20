<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class AboutController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all about from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('about', $result);
			$this->appView->render();

		}

        /* Add aboou into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved aboou']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved aboou !']);
				}
			}

			$this->appView->render();
		}

        /* Edit aboou and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited aboou']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit aboou !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('aboou',$result);
			$this->appView->render();
		}

        /* Delete aboou from the table
        *  Getting aboou Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted aboou']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete aboou !']);
			}

			$this->index();

		}

        /* Viewing aboou from the table
        *  Getting aboou Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('aboou',$result);
			$this->appView->render();
		}

	}

?>
