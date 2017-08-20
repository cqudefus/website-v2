<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class ContactController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all contact from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('contact', $result);
			$this->appView->render();

		}

        /* Add contac into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved contac']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved contac !']);
				}
			}

			$this->appView->render();
		}

        /* Edit contac and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited contac']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit contac !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('contac',$result);
			$this->appView->render();
		}

        /* Delete contac from the table
        *  Getting contac Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted contac']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete contac !']);
			}

			$this->index();

		}

        /* Viewing contac from the table
        *  Getting contac Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('contac',$result);
			$this->appView->render();
		}

	}

?>