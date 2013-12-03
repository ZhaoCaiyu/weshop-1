<?php

class Bc_Controller_Action_Panel extends Bc_Controller_Action_Base {
	protected $uid = 0;

	public function init() {
		parent::init();

		$this->sess = &Bc_Session::i($this->MODULE);
		$this->uid = (int)$this->sess->get('uid');
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