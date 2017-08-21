<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class BlogController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all blog from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('blog', $result);
			$this->appView->render();

		}

        /* Add blo into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved blo']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved blo !']);
				}
			}

			$this->appView->render();
		}

        /* Edit blo and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited blo']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit blo !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('blo',$result);
			$this->appView->render();
		}

        /* Delete blo from the table
        *  Getting blo Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted blo']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete blo !']);
			}

			$this->index();

		}

        /* Viewing blo from the table
        *  Getting blo Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('blo',$result);
			$this->appView->render();
		}

	}

?>