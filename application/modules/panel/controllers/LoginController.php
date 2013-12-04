<?php

class Panel_LoginController extends Bc_Controller_Action_Panel {

	public function indexAction() {
		
	}
	
	public function doAction() {
		$user = $this->getRequest()->getParam('user');
		$pass = $this->getRequest()->getParam('pass');
		
		if ($user == '' || $pass == '') {
			$this->view->error = '用户名密码不能为空';
			echo $this->view->render('login/index');
		} else {
			$t = &$this->M('user');
			$row = $t->account($user);
			if (!$row) {
				$this->view->error = '用户名密码不正确';
			} else {
				if (md5($pass) != $row->password) {
					$this->view->error = '用户名密码不正确';
				} else {
					$this->uid = (int)$row->id;
					$this->view->user = $this->user = $row->toArray();
					$this->sess->set('uid', $this->uid);
					
					$this->_helper->getHelper('Redirector')->setCode(301)->setExit(true)->gotoSimple('', 'index', $this->MODULE);
				}
			}
		}
	}
	
	public function logoutAction() {
		$this->uid = 0;
		$this->sess->set('uid');
	}
}