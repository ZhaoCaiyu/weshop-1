<?php include dirname(__FILE__).'/../include/header.php'; ?>
    <div class="container">
      <form class="form-signin" method='post' action='<?php echo $this->url(array(
      	'action' => 'do'
      	)
      );?>'>
        <h2 class="form-signin-heading">登录</h2>

		       <i class="icon-user"></i>姓名 <input type="text"  name='user' value=''  class="input-block-level" placeholder="姓名">
		       <i class="icon-lock"></i>密码 <input type="password"  name='pass' value=''  class="input-block-level" placeholder="密码">
        <button class="btn btn-large btn-primary" type="submit">登录</button> <a class="btn btn-large" href="../">返回首页</a>
       </form>

    </div> <!-- /container -->

   <hr />
<?php include dirname(__FILE__).'/../include/footer.php'; ?>