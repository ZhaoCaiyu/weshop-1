<?php

class Ws_Weixin_Message_Structure_Link extends Ws_Weixin_Message_Structure_Base
{
	public function __construct()
	{
		$this->Title = '';
		$this->Description = '';
		$this->Url = '';
		$this->MsgType = 'link';
		
		parent::__construct();
	}
}