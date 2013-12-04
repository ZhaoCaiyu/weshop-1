<?php

abstract class Bc_View_Helper_Base {
	public $view;
	
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
}