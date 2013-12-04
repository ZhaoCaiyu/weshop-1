      <footer>
        <p class="text-center"> Copyright &copy; 2012-2013 BigCapital.co All Rights Reserved.</p>
      </footer>
      

  <div id="loading"> 
    <div class="close" onclick="$('#loading').fadeOut(); $('#xhr-status').html('');">
        <i><?php echo Bc_Config::appConfig()->app_name;?></i>
    </div>
    <hr>
    <span id="xhr-status" class="text-error"></span>
  </div>      
  </body>
</html>
<?php Bc_Output::doOutput();?>