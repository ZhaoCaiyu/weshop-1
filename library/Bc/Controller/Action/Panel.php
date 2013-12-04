<?php

class Bc_Controller_Action_Panel extends Bc_Controller_Action_Base {
	protected $uid = 0;
	protected $user = array();
	protected $menu = array();

	public function init() {
		parent::init();
		
		$this->view->menu = $this->menu = &Bc_Config::menu($this->view);

		$this->sess = &Bc_Session::i($this->MODULE);
		$this->uid = (int)$this->sess->get('uid');
		
		if ($this->uid>0) {
			$user = $this->M('user')->id($this->uid);
			if ($user) {
				$this->view->user = $this->user = $user;
			}
		}
	}

	protected function auth() {
		$pass = false;
		
		if ($this->uid>0) {
			$pass = true;
		}

		return $pass;	
	}

	protected function nLogin() {
		if (!$this->auth()) {
			$this->_helper->getHelper('Redirector')->gotoSimple('', 'login', $this->MODULE);
		}
	}
	
	protected function dbMap($dbCols = array()) {
		$dbMap = array();

		if (is_array($dbCols)) {
			foreach ($_REQUEST as $key=>$val) {
				if (in_array($key, $dbCols, true)) {
					$dbMap[$key] = $val;
				}
			}
		}
		
		return $dbMap;
	}
	
	
}