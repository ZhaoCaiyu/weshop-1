<?php
Bc_Output::prepareHtml();
?>
<?php echo $this->Breadcrumb(1, 'user', 0);?>
<div class="btn-toolbar">
    <a class="btn btn-primary" href='javascript:void(0)' onclick="changepage('<?php echo $this->menu['user'][1][2];?>','WeCMS');">新建</a>
    <button class="btn">导入</button>
    <button class="btn">导出</button>
</div>

		
<div>
    <table class="table">
      <thead>
        <tr class='success'>
          <th>序号</th>
          <th>用户名</th>
	      <th>昵称</th>
          <th>邮件</th>
          <th>状态</th>
          <th>备注</th>
          <th>管理</th>
        </tr>
      </thead>
      <tbody>
    <?php 
    $i = $this->offset + 1;
    ?>
	<?php foreach ($this->rows as $row) { ?>

       <tr id="<?php echo $row->account;?>">
          <td><?php echo $i++;?></td>
          <td><?php echo $row->account;?></td>
          <td><?php echo $row->nickname;?></td>
          <td><?php echo $row->email;?></td>
          <td><?php echo $row->status;?></td>
          <td><?php echo $row->remark;?></td>
          <td>
              <a href="javascript:void(0);" onclick="edituser('<?php echo $row->account;?>','WeCMS');"><i class="icon-pencil"></i></a>
           	<?php 
           	if ($row->account == $this->user->account || $row->status == 2) {
			?>
			<a href="javascript:void(0);"><i class="icon-ban-circle"></i></a>
			<?php
			} else {
			?>
			<a href="javascript:void(0);" onclick="deleteuser('<?php echo $row->account;?>');"><i class="icon-remove"></i></a>
			<?php 
			}
           	?>
          </td>
       </tr>	
	<?php } ?>      
      </tbody></table></div>

<script type='text/javascript'>
//编辑用户
function edituser(obj, toele) {
    changepage('<?php echo $this->url(array(
    	'action' => 'edit',
    	'controller' => 'user',
    	'module' => 'panel',
    	'account' => ''
    ));?>' + obj, toele);
}

//删除用户
function deleteuser(obj) {
    publicDelete('<?php echo $this->url(array(
    	'action' => 'delete',
    	'controller' => 'user',
    	'module' => 'panel',
    	'account' => ''
    ));?>' + obj, obj);

}
</script>
<?php 
Bc_Output::doOutput();
