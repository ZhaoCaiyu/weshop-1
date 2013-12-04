<?php
Bc_Output::prepareHtml();
?>
<ul class='nav'>
<?php 
$live = 999;
foreach ($this->menu['index'] as $menu) {
	if ($menu[2]<=$live) {
?>
<li><a class='btn' href='javascript:void(0);' onclick="changepage('<?php echo $this->url(array(
	'action' => 'menu',
	'controller' => 'welcome',
	'module' => $this->MODULE,
	'menu' => $menu[1]
));?>', 'leftmenu')"><?php echo $menu[0];?></a></li>
<?php
	}
}
?>
</ul>
        <div class="pull-right">
            <ul class="nav pull-right">
                <li><a class="btn" href="javascript:void(0);" onclick="changepage('欢迎面板','WeCMS');"><i class="icon-calendar"></i> </a></li>
                <li class="dropdown"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> 欢迎：<?php echo $this->user['nickname'] ? $this->user['nickname'] : $this->user['account'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" onclick="edituser('aaa','WeCMS');"><i class="icon-pencil"></i> 编辑用户</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $this->url(array(
                        	'action' => 'logout',
                        	'controller' => 'login',
                        	'module' => $this->MODULE
                        ));?>"><i class="icon-off"></i> 退出登录</a></li>
                   </ul>
                </li>
             </ul>
        </div>
<?php
Bc_Output::doOutput();
