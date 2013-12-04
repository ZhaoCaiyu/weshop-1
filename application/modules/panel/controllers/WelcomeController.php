<?php

class Panel_WelcomeController extends Bc_Controller_Action_Panel {
	
	public function init() {
		parent::init();

		$this->nLogin();
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