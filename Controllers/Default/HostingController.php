<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class HostingController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all hosting from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('hosting', $result);
			$this->appView->render();

		}

        /* Add hostin into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved hostin']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved hostin !']);
				}
			}

			$this->appView->render();
		}

        /* Edit hostin and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited hostin']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit hostin !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('hostin',$result);
			$this->appView->render();
		}

        /* Delete hostin from the table
        *  Getting hostin Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted hostin']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete hostin !']);
			}

			$this->index();

		}

        /* Viewing hostin from the table
        *  Getting hostin Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('hostin',$result);
			$this->appView->render();
		}

	}

?>