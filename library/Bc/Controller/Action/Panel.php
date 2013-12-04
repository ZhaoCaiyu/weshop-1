<?php

class Bc_Controller_Action_Panel extends Bc_Controller_Action_Base {
	protected $uid = 0;
	protected $user = array();

	public function init() {
		parent::init();

		$this->sess = &Bc_Session::i($this->MODULE);
		$this->uid = (int)$this->sess->get('uid');
		
		if ($this->uid>0) {
			$user = $this->M('user')->id($this->uid);
			if ($user) {
				$this->view->user = $this->user = $user->toArray();
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
}