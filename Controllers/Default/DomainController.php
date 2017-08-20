<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class DomainController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all domain from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('domain', $result);
			$this->appView->render();

		}

        /* Add domai into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved domai']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved domai !']);
				}
			}

			$this->appView->render();
		}

        /* Edit domai and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited domai']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit domai !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('domai',$result);
			$this->appView->render();
		}

        /* Delete domai from the table
        *  Getting domai Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted domai']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete domai !']);
			}

			$this->index();

		}

        /* Viewing domai from the table
        *  Getting domai Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('domai',$result);
			$this->appView->render();
		}

	}

?>