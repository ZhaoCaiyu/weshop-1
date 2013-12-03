<?php
Bc_Output::prepareHtml();

foreach ($this->menu as $menu) {
	if ($menu[1]) {
?>
<li><a class='btn' href='javascript:void(0)' onclick="changepage('<?php echo $menu[2];?>', 'WeCMS');"><?php echo $menu[0];?></a></li>
<?php 
	}
}

Bc_Output::doOutput();