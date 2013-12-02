<?php

class Ws_Weixin_Message_Structure_Image extends Ws_Weixin_Message_Structure_Base
{
	public function __construct()
	{
		$this->PicUrl = '';
		$this->MsgType = 'image';
		
		parent::__construct();
	}
}