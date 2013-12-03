<?php include dirname(__FILE__).'/../include/header.php'; ?>

      <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="welcome.php"><?php echo Bc_Config::appConfig()->app_name;?> &trade;</a> 
          <div class="nav-collapse collapse" id="MainMenu" data-toggle="buttons-radio">


          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2 bs-docs-sidebar" data-toggle="collapse">
        <ul class="nav nav-list bs-docs-sidenav" data-spy="affix" id="leftmenu" data-toggle="buttons-radio">
        </ul>
      </div><!--./bs-docs-sidebar-->

      <div class="span10" id="WeCMS">
      </div><!--./span9-->
    </div><!--./row-->
  </div><!--./container-->

<?php include dirname(__FILE__).'/../include/script.php';?>
<script type='text/javascript'>
    $(document).ready(function(){
        changepage('<?php echo $this->url(array(
        	'action' => 'calendar',
        	'controller' => 'welcome',
        	'module' => $this->MODULE
        ));?>', 'WeCMS');

        changepage('<?php echo $this->url(array(
        	'action' => 'mainmenu',
        	'controller' => 'welcome',
        	'module' => $this->MODULE
        ));?>', 'MainMenu');
        changepage('<?php echo $this->url(array(
        	'action' => 'menu',
        	'controller' => 'welcome',
        	'module' => $this->MODULE,
        	'menu' => 'main'
        ));?>', 'leftmenu');
});
</script>  
<?php include dirname(__FILE__).'/../include/footer.php'; ?>