<?php

class Panel_UserController extends Bc_Controller_Action_Panel {
	protected $menu = array();
	
	public function init() {
		parent::init();

		$this->nLogin();
	}

	public function indexAction() {
		
	}
	
	public function createAction() {
		
	}
}