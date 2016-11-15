<?php if (!defined('THINK_PATH')) exit();?>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <script src="http://www.w3school.com.cn/jquery/jquery-1.11.1.min.js"></script>
  <title>Blog登录界面</title>

  <!-- ========== Css Files ========== -->
  <link href="/blog_1/Public/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
        <form action="" method="post">
        <div class="top">
          <img src="/blog_1/Public/img/blogbus_logo.png" alt="icon" class="icon">
        
          <h4>Blog Admin Template</h4>
        </div>
        <div class="form-area">
          <div class="group">
              <!--<input id="verify" type="text" name="verify">-->
            <input name="username" type="text" class="form-control" placeholder="用户名">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
              <input name="password" type="password" class="form-control" placeholder="密码">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
<!--            <label for="checkbox101"> 记住我</label>-->
          </div>
            <button type="submit" class="btn btn-default btn-block" style="background-color:#78bc27">登录</button>
         
        </div>
      </form>
        
      <div class="footer-links row">
        <div class="col-xs-6"><a href="<?php echo U('admin/register/register');?>"><i class="fa fa-external-link"></i> 注册</a></div>
        <!--<div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>-->
      </div>
    </div>
      
 
</body>
</html>