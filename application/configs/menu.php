<?php

return array(
		'index' =>  array(
				'0' => array('控制面板','main',1),
				'1' => array('用户管理','user',1),
				'2' => array('店铺管理','shop',1),
				'3' => array('微信群发管理','weixin',1),
				'4' => array('企业客户管理','bootstrap',2),
				'5' => array('统计管理','data',2),
		),
		'main' =>  array(
				'0' => array('欢迎面板',0,'./function/public_index.php'),
				'1' => array('修改帐号',0,'./user/user_edit.php'),
				'2' => array('系统设置',0,'./system/config.php'),
				'3' => array('退出登陆',1, $this->view->url(array(
					'action' => 'logout',
					'controller' => 'login',
					'module' => $this->MODULE
				)))
		),
		'user' =>  array(
				'0' => array('用户列表',1,'./user/user_list.php'),
				'1' => array('新建用户',1,'./user/user_create.php'),
				'2' => array('编辑用户',0,''),
		),
		'bootstrap' =>  array(
				'0' => array('分类列表',1,'./bootstrap/bootstrap_list.php'),
				'1' => array('新建分类',1,'./bootstrap/bootstrap_create.php'),
				'2' => array('编辑分类',0,''),
				'3' => array('企业列表',1,'./bootstrap/bootstrap_en_list.php'),
				'4' => array('新建企业',1,'./bootstrap/bootstrap_en_create.php'),
				'5' => array('编辑企业',0,''),
		),
		'weixin' =>  array(
				'0' => array('登陆群发',1,'./weixin/sender_list.php'),
				'1' => array('模拟群发',1,'./weixin/sender_post.php'),
				'2' => array('词条列表',1,'./weixin/weixin_tag_list.php'),
				'3' => array('新建词条',1,'./weixin/weixin_tag_create.php'),
				'4' => array('编辑词条',0,''),
				'5' => array('VIP会员',1,'./weixin/weixin_vip_list.php'),
		),
		'shop' =>  array(
				'0' => array('区域|店铺列表',1,'./area/area_list.php'),
				'1' => array('新建区域|店铺',1,'./area/area_create.php'),
				'2' => array('编辑区域|店铺',0,''),
				'3' => array('商品列表',1,'./goods/goods_list.php'),
				'4' => array('新建商品',1,'./goods/goods_create.php'),
				'5' => array('菜系列表',1,'./goods/goods_class_list.php'),
				'6' => array('新建菜系',1,'./goods/goods_class_create.php'),
				'7' => array('编辑商品',0,''),
				'8' => array('订单管理',1,'./order/order_list.php'),
		),
		'data' =>  array(
				'0' => array('群发列表',1,''),
				'1' => array('发送消息',1,''),
				'2' => array('新建词条',1,''),
				'3' => array('编辑词条',0,''),
		),

);