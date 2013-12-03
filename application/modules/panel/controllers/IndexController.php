<?php

class Panel_IndexController extends Bc_Controller_Action_Panel {

	public function init() {
		parent::init();

		$this->nLogin();
		
		$this->_helper->getHelper('Redirector')->setCode(301)->setExit(true)->gotoSimple('', 'welcome', $this->MODULE);
	}
}