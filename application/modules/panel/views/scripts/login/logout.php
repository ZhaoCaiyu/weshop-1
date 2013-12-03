<?php
Bc_Output::prepareHtml();
?>
<script type='text/javascript'>
window.location = '<?php echo $this->url(array(
	'controller' => 'login',
	'action' => 'index'
));?>';
</script>
<?php 

Bc_Output::doOutput();