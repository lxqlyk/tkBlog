<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>我的博客</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="__PUBLIC__/css1/normalize.css">
        <link rel="stylesheet" href="__PUBLIC__/css1/font-awesome.css">
        <link rel="stylesheet" href="__PUBLIC__/css1/bootstrap.min.css">
        <link rel="stylesheet" href="__PUBLIC__/css1/templatemo-style.css">
        <script src="__PUBLIC__/js1/vendor/modernizr-2.6.2.min.js"></script>
<!--         <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/"></script>
-->        <style>
                    .row-form .row-form-field{
               margin: 20px auto;  
               color: #009999;
               vertical-align: top;
            }

            .row-form .row-form-field lable {
                width:70px;
                text-align: right;
               display:inline-block;
               margin-right: 40px;
               vertical-align:top;
            }

            .row-form .row-form-field input{
             width: 200px;   
             color: #669900;
            }
            .row-form .row-form-field textarea{
                width: 500px;
                color: #00ffff;
            }   
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-bg" style="background-image:url('__PUBLIC__/images1/bg.jpg') "></div>
        <div class="site-bg-overlay"></div>

        <!-- TOP HEADER -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="phone-info">博主： <a href="{:U('index/index')}"><?php echo" $username" ?></a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <ul>
                                <!--<li><a href="1" class="fa fa-facebook"></a></li>-->
                                <li><p  class="fa fa-twitter"></></li>
                                 <li><a href="{:U('index/index')}" >返回首页</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .top-header -->


        <div class="visible-xs visible-sm responsive-menu">
            <a href="1" class="toggle-menu">
                <i class="fa fa-bars"></i> Show Menu
            </a>
            <div class="show-menu">
                <ul class="main-menu">
                    <li>
                        <a class="show-1 active homebutton" href="#"><i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a class="show-2 aboutbutton" href="#">个人资料<i class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a class="show-3 projectbutton" href="#"><i class="fa fa-camera"></i>查看日志</a>
                    </li>
                    <li>
                        <a class="show-5 contactbutton" href="#"><i class="fa fa-envelope"></i>创建日志</a>
                    </li>
                </ul>
            </div>
        </div>
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费模板</a></div>
        <div class="container" id="page-content">
            <div class="row">
                <div class="col-md-9 col-sm-12 content-holder">
                    <!-- CONTENT -->
                    <div id="menu-container">
                        <div class="logo-holder logo-top-margin">
                            <a href="#" class="site-brand"><img src="__PUBLIC__/images1/logo.png" alt=""></a>
                        </div>
                        <div id="menu-1" class="homepage home-section text-center">
                            <div class="welcome-text">
                                <h2> <strong>{$title}</strong></h2>
                                
                                <p>{$content}</p>
                              
                            </div>
                        </div>
                    </div>
                </div>


<!--                <div class="col-md-3 hidden-sm">
                    
                    <nav id="nav" class="main-navigation hidden-xs hidden-sm">
                        <ul class="main-menu">
                            <li>
                                <a class="show-1 active homebutton" href="#"><i class="fa fa-user"></i>首页</a>
                            </li>
                            <li>
                                <a class="show-2 aboutbutton" href="#"><i class="fa fa-user"></i>关于me</a>
                            </li>
                            <li>
                                <a class="show-3 projectbutton" href="#"><i class="fa fa-camera"></i>我的日志</a>
                            </li>
                            <li>
                                <a class="show-5 contactbutton" href="#"><i class="fa fa-envelope"></i>创建日志</a>
                            </li>
                        </ul>
                    </nav>

                </div>-->
            </div>
        </div>

        <!-- SITE-FOOTER -->
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright &copy; 2084 Company Name | More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家"></a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank"></a></p>
                    </div>
                </div>
            </div>
        </div> <!-- .site-footer -->

        <script src="__PUBLIC__/js1/vendor/jquery-1.10.2.min.js"></script>
        <script src="__PUBLIC__/js1/plugins.js"></script>
        <script src="__PUBLIC__/js1/main.js"></script>
		<!-- templatemo 439 rectangle -->
    </body>
</html>
