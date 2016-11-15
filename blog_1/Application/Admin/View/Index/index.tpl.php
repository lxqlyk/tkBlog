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
         <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/"></script>
        <style>
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
                        <p class="phone-info">博主： <a href="#"><?php echo" $username" ?></a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <ul>
                                <!--<li><a href="1" class="fa fa-facebook"></a></li>-->
                                <li><p  class="fa fa-twitter"></p></li>
                                <li><a href="{:U('index/index/index')}" >主页</a></li>
                                <!--<li><a href="#" class="fa fa-linkedin"></a></li>-->
                                <!--<li><a href="#" class="fa fa-dribbble"></a></li>-->
                                <!--<li><a href="#" class="fa fa-rss"></a></li>-->
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
                                <h2>心安是归处</h2>
                                <p>浅望幸福。不写忧伤，不道惆怅，不问花开几许，只问浅笑安然。 <span class="orange"></span><span class="green"></span></p>
<!--                                <form action="#" method="get" class="subscribe-form">
                                    <div class="row">
                                        <fieldset class="col-md-offset-2 col-md-6">
                                            <input name="subscribe-email" type="email" class="email" id="subscribe-email" placeholder="Write your email here..">
                                        </fieldset>
                                        <fieldset class="col-md-4 button-holder">
                                            <input name="submit" type="submit" class="button default" id="submit" value="Submit">
                                        </fieldset>
                                    </div>
                                    <p class="subscribe-text">Please subscribe your email for latest updates!</p>
                                </form>-->
                            </div>
                        </div>

                        <div id="menu-2" class="content about-section">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="box-content profile">
                                        <h3 class="widget-title">关于我</h3>
                                        <div class="profile-thumb">
                                            <!--<img src="__PUBLIC__/images1/8.jpg" alt="">-->
                                            <img src="{$head}" alt="">
                                        </div>
                                        <div class="profile-content">
                                            <h5 class="profile-name">{$name}</h5>
                                            <span class="profile-role"></span>                                   
                                            <ul>
                                                <li><lable>性　别：</lable>{$agender}</li>
                                                <li><lable>生　日：</lable>{$birth}</li>
                                                <li><lable>星　座：</lable>{$star}</li>
                                                <li><lable>所在地：</lable>{$add}</li>
                                                <li><lable>座右铭：</lable>{$motto}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="box-content">
                                        <h3 class="widget-title">背景</h3>
                                        <p>{$back}</p>
                                        <div class="about-social">
<!--                                            <ul>
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                            </ul>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="box-content">
                                        <h3 class="widget-title">My Studio</h3>
                                        <div class="project-item">
                                            <img src="__PUBLIC__/images1/7.jpg" alt="">
                                            <div class="project-hover">
                                                <h4>Great Nature Capture</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <div class="box-content">
                                        <h3 class="widget-title">Our Technical Skills</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <span>HTML CSS 80%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span>PHOTOSHOP 95%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span>WORDPRESS 70%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <span>PHP mySQL 50%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        --></div>

                        <div id="menu-3" class="content gallery-section">
                            <div class="box-content">
                                <h3 class="widget-title">我的日志</h3>
                                <div class="row">
                                    <form action="{:U('diary/diary')}" method="get">
                                       <?php foreach($dcontent as $key => $val): ?>  
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item" id="1">
                                            <a href="{:U('diary/diary').'?id='.$val['d_id']}"> <img src="__PUBLIC__/img/yuedu1.jpg" alt=""></a>
                                            <div class="project-hover">
                                                <h4>{$val['title']}</h4>
                                            </div>
                                        </div>
                                    </div>
                                       <?php endforeach; ?>
                                    </form> 
                                </div>
                                <div class=" pages">
                                    {$pages}
                                </div>
                            </div>
                        </div>
                        <script>
                             function ajaxpage(that) {
                        //            console.log(that);
                        //            console.log(that.getAttribute("data-href"));
                                    var url = $(that).data("href");
                                    $.getJSON(url, function(data){
                                        if (data.status == 2000) {
                                            $("#menu-3").html(data.data);
                                        }
                                        console.log(data.message);
                                    });
                                }
                        </script>
                        <div id="menu-4" class="content contact-section" style="height: 500px;">
                            <div class="row">
                                <!--<div class="col-md-8 col-sm-8">-->
                                    <div class="box-content">
                                        <h3 class="widget-title">编辑日志</h3>
                                        <form class="row-form" action="" method="post" enctype="multipart/form-data">
                                            <div class="row-form-field">
                                            <button type="submit">保存</button>
                                        </div>
                                        <div class="row-form-field"> 
                                        
                                            <label >标题</label>
                                        <input name="title" placeholder="请输入标题">
                                        </div>
                                        <div>
                                            <label>内容</label>
                                        <textarea name="content" id="myEditor"></textarea>
                                        <script type="text/javascript">
                                            var editor = new UE.ui.Editor();
                                            editor.render("myEditor");   
                                        </script>
                                        <input type='file' name="file">
                                        </div>
                                        </form>   
                                    </div>
                                <!--</div>-->
<!--                                <div class="col-md-4 col-sm-4">
                                    <div class="box-content">
                                        <h3 class="widget-title">Stay In Touch</h3>
                                        <p>Sed ullamcorper, risus a tincidunt efficitur, massa mauris ultricies leo, eu interdum eros erat non augue. <br><br>
										Suspendisse ornare sollicitudin lectus non egestas. Nam fermentum imperdiet ligula congue venenatis. </p>
                                        <div class="about-social">
                                            <ul>
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            
                        </div>

                    </div>
                </div>


                <div class="col-md-3 hidden-sm">
                    
                    <nav id="nav" class="main-navigation hidden-xs hidden-sm">
                        <ul class="main-menu">
                            <li>
                                <a class="show-1 active homebutton" href="#"><i class="fa fa-home"></i>首页</a>
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

                </div>
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