<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Kode - Premium Bootstrap Admin Template</title>

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
          <h1>注册</h1>
          <!--<h4>Join to our community now !</h4>-->
        </div>
        <div class="form-area">
          <div class="group">
              <input type="text" name="rname" class="form-control" placeholder="用户名">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
              <input type="text" name="rtel"class="form-control" placeholder="电话">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
              <input type="password" name="rpass"class="form-control" placeholder="密码">
            <i class="fa fa-key"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="再次输入密码">
            <i class="fa fa-key"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block" style="background-color:#78bc27">注册</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="<?php echo U('admin/login/index');?>"><i class="fa fa-sign-in"></i> 登录</a></div>
        <!--<div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>-->
      </div>
    </div>

</body>
</html>