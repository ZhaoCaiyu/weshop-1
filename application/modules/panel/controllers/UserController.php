<?php

class Panel_UserController extends Bc_Controller_Action_Panel {
	protected $menu = array();
	
	public function init() {
		parent::init();

		$this->nLogin();
	}

	public function indexAction() {
		$this->view->limit = $limit = 10;
		$page = (int)$this->getRequest()->getParam('page', 1);
		$page<=0 && $page = 1;
		$this->view->page = $page;
		$this->view->offset = $offset = ($page - 1)*$limit;
		
		$where = '';
		if ((int)$this->user->status<2) {
			$where .= ' `status`<2 ';
		}
		
		$m = &$this->M('user');
		$this->view->rows = $m->fetchAll(trim($where) ? $where : null, 'id DESC', $limit, $offset);
		$this->view->total = $m->count($where);
	}
	
	public function createAction() {
		
	}
}