<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class ServicesController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all services from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('services', $result);
			$this->appView->renderAjax();

		}

        /* Add service into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved service']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved service !']);
				}
			}

			$this->appView->render();
		}

        /* Edit service and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited service']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit service !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('service',$result);
			$this->appView->render();
		}

        /* Delete service from the table
        *  Getting service Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted service']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete service !']);
			}

			$this->index();

		}

        /* Viewing service from the table
        *  Getting service Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('service',$result);
			$this->appView->render();
		}

	}

?>
