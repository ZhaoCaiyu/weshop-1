<?php

class Api_EventsController extends Bc_Controller_Action_Api {

	public function weshopAction() {
		Bc_Output::prepareJson();
		
		echo json_encode(array(
				array(
						'id' => 1,
						'title' => "Event1",
						'start' => date('Y-m-d'),
						'url' => "http://yahoo.com/"
				),
		
				array(
						'id' => 2,
						'title' => "Event2",
						'start' => date('Y-m-d'),
						'end' => date('Y-m-d'),
						'url' => "http://yahoo.com/"
				)
		
		));
		
		Bc_Output::doOutput();	
	}
}