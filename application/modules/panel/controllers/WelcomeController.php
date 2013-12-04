<?php

class Panel_WelcomeController extends Bc_Controller_Action_Panel {
	protected $menu = array();
	
	public function init() {
		parent::init();

		$this->nLogin();
		
		$this->menu = &Bc_Config::menu($this->view);
	}

	public function indexAction() {
		
	}
	
	public function mainmenuAction() {
		$this->view->menu = $this->menu;
	}
	
	public function menuAction() {
		$menu = $this->getRequest()->getParam('menu', 'main');
		
		$this->view->menu = $this->menu[$menu];
	}
	
	public function calendarAction() {
		
	}
}