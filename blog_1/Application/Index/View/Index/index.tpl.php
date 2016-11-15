<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if gt IE 6]> <!-->
<html>
    <meta charset="utf-8">
    <title>博客</title>
    <meta name="description" content="博客大巴是国内第一家博客托管服务商，也是首家商业运作、提供收费服务的中文博客网站，在中文博客业内享有盛誉">
    <meta name="keywords" content="博客中国,中国博客,我的博客,私人日志,博客大巴,图片博客,社会热点,观点,生活,旅行,影像,自由,表达,城客,记录,分享,看法自由报,新媒体,博客研究,播客,BSP,个人门户,免费博客,空间,博客申请,中文博客,Blog,Blogger,网络日志,自媒体,社交网络,小清新,文艺范儿" />

    <link href="http://public2.blogbus.com/bbc-v6/front/css/boilerplate.css" rel="stylesheet" type="text/css">
    <link href="http://public2.blogbus.com/bbc-v6/front/css/base.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/front/js/jquery.js"></script>
    <script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
    <link rel="shortcut icon" href="">
<!--    <style>
        a{
            color: #00BFFF;
        }
    </style>-->
    <!--[if lt IE 9]>
    <script src="http://public2.blogbus.com/bbc-v6/js/html5.js"></script>
    <script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/js/selectivizr-min.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
    <script src="http://public2.blogbus.com/bbc-v6/js/minmax.js"></script>
    <![endif]-->
</head>
<body>
    <div class="page">
        <header class="header">
            <div class="header-inner pie">
                <div class="header-top pie">
                    <div class="container">
                        <h1 class="logo pie" style="background-image: url('__PUBLIC__/img/blogbus_logo.png')"><lable>logo</lable></h1>
                        <nav class="top-nav">
                            <ul>
<!--                                <li class="ico ios"><a href=''><span class="pie"></span></a></li>
                                <li class="ico android"><a href=''><span class="pie"></span></a></li>-->
                                <li class="logged" id='header_login_username'></li>
                                <!--<li class="logged"><a rel="external nofollow" href="http://message.home.blogbus.com/received/">管理</a></li>-->
                                <li class="logged"><a rel="external nofollow" href="http://passport.blogbus.com/logout?goto=http%3A%2F%2Fhome.blogbus.com%2Flogout">退出</a></li>              
                                <li class="nologin"><a href="{:U('admin/login/index')}" rel="external nofollow" >{$login}</a></li>
                                <li class="nologin"><a href="{:U('admin/register/register')}" rel="external nofollow" >{$register}</a></li>

                            </ul>
                        </nav>
                    </div> 
                </div>
                <div class="site-nav-container pie">
                    <div class="container">
                        <nav class="site-nav">
                            <ul>
                                <li class='shouye'><a href="{:U('index/index')}" class="pie">首页</a></li>	
                                <li class='xingzhe'><a href="/" class="pie">行者</a></li>
                                <li class="fengshang"><a href="" class="pie">风尚</a></li>
                                <li class='sejie'><a href="" class="pie">色界</a></li>
                                <li class='shenghuo'><a href="" class="pie">生活</a></li>
                                <!--<li class='tuijian'><a href="http://tuijian.blogbus.com/"rel="external nofollow"  class="pie">推荐</a></li>-->
                            </ul>
                        </nav>
                        <nav class="utility-menus">
                            <ul>
                                <!--<li class="active"><span class="explore"><a rel="external nofollow"  href="{:U('admin/login/index')}" id="user_blog" class="pie" style="color:'#00BFFF'">个人博客</a></span></li>-->
                                <li><span class="post"><a rel="external nofollow"  href="{:U('admin/login/index')}" target='_blank' class="pie">发布</a></span></li>
                                <!--<li><span class="settings"><a rel="external nofollow" href="http://home.blogbus.com/edit/" class="pie"  target='_blank'>设置</a></span></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <div class="sub-nav-container">
            <div class="container w1180">
                <nav class="sub-nav">
                    <ul>
                        <li class="tag0"><a href="/xingzhe/游记/">游记</a></li><li class="tag1"><a href="/xingzhe/沿途风光/">沿途风光</a></li><li class="tag2"><a href="/xingzhe/旅游景点/">旅游景点</a></li><li class="tag3"><a href="/xingzhe/下榻/">下榻</a></li><li class="tag4"><a href="/xingzhe/旅行/">旅行</a></li><li class="tag5"><a href="/xingzhe/城市/">城市</a></li><li class="tag6"><a href="/xingzhe/欧洲/">欧洲</a></li><li class="tag7"><a href="/xingzhe/大海/">大海</a></li>    </ul>
                </nav>
                
                <div class="search">
                    <div class="search_left">
                        <!--<input id='search_input' name='keyword' />-->
                    </div>
<!--                    <div class="search_right">
                        <img onclick="search_article();" src="http://public2.blogbus.com/bbc-v6/front/img/pindao_search_button.jpg" />
                    </div>-->
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('.site-nav .').addClass('active');
            $('.sub-nav .').addClass('active');
        </script>

        <div id="wrapper">
            <link href="http://public2.blogbus.com/bbc-v6/front/css/respond.css" rel="stylesheet" type="text/css">
            <link href="http://public2.blogbus.com/bbc-v6/front/css/infinitescroll.css" rel="stylesheet" type="text/css">
            <script src="http://public2.blogbus.com/bbc-v6/front/js/respond.min.js"></script>
            <script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/front/js/jquery.masonry.js"></script>
            <script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/front/js/jquery.infinitescroll.js"></script>
            <script>
                function item_masonry()
                {
                    var $container = $('.stream');
                    $container.imagesLoaded(function () {
                        $container.masonry({
                            itemSelector: '.item'
                        });
                    });
                }
                $(function () {
                    var perpage = 10;
                    item_masonry();

                    var sp = 1;
                    $(".stream").infinitescroll({
                        navSelector: "#more",
                        nextSelector: "#more a",
                        itemSelector: ".item",
                        debug: true,
                        extraScrollPx: 50,
                        animate: false,
                        loading: {
                            img: "http://public2.blogbus.com/bbc-v6/front/img/masonry_loading_1.gif",
                            msgText: ' ',
                            finishedMsg: '',
                            finished: function () {
                                sp++;
                                if (sp >= perpage) { //到第10页结束事件
                                    $("#more").remove();
                                    $("#infscr-loading").hide();
                                    $("#pages").show();
                                    $(window).unbind('.infscr');
                                }
                            }
                        }, errorCallback: function () {
                            $("#pages").show();
                        }

                    }, function (newElements) {
                        var $newElems = $(newElements);
                        $('.stream').masonry('appended', $newElems, false);
                        $newElems.fadeIn();
                        item_masonry();
                        return;
                    });
                });
            </script>

            <div class="content">
                <div class="container stream">
                    <form action="{:U('bloglist/index')}" method="get">
                     <?php foreach($bloglist as $key => $val): ?> 
                  
                    <div class="item pie">
                        <div class="article">
                            <p   target='_blank' title='拥有回忆的人是幸福的'>
                                <img  src="{$val['image']}" width="190" height="146"></p>
                            <h4><a title='拥有回忆的人是幸福的' target='_blank' title='拥有回忆的人是幸福的' href="{:U('Bloglist/index').'?id=' .$val['id']}">{$val['title']}</a></h4>
                        </div>
                        <div class="credits">
                            <a  target='_blank' class="avatar" rel="external nofollow" href=""><img alt="" src="{$val['authorhead']}" width="30" height="30"></a>
                            <p  target='_blank' class="author" rel="external nofollow"  href="">{$val['author']}</p>
                            发布在 <p  target='_blank' class="title"  href="">{$val[artid]}	  </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    </form>
                </div>  
<!--                <div id="more"><a href="/list/1.html/?page=2"></a></div>
                <div id="pages" class="pages" style="">
                    <div class="page_num">
                        <div class="unprev"></div><div class="current">1</div><div class="normal"><a href="/2.html" >2</a></div><div class="normal"><a href="/3.html" >3</a></div><div class="normal"><a href="/4.html" >4</a></div><div class="normal"><a href="/5.html" >5</a></div><div class="next"><a href="/2.html"></a></div>			

                    </div>
                </div>-->
            </div>


           <div style="display:none;">
                <img src="http://ad.thinkmedia.cn/htracker/pid=2444/media=blogbus/place=14bbsy/size=80x600"/>
            </div>


        </div>



    </div>
    <div id="footer" class="footer">
        <div class="utilityMenu">
            <a target="_blank" rel="external nofollow"  href="http://news.blogbus.com/">媒体报道</a>&nbsp;|&nbsp;
            <a target="_blank" href="http://www.blogbus.com/about/about.html">关于我们</a>&nbsp;|&nbsp;
            <a target="_blank" href="http://www.blogbus.com/about/jobs/jobs.html">工作机会</a>&nbsp;|
            &nbsp;<a target="_blank" href="http://www.blogbus.com/about/blogserviceterm.html">相关法律</a>&nbsp;|
            &nbsp;<a target="_blank" href="http://www.blogbus.com/about/adservice.html">广告服务</a>&nbsp;|
            &nbsp;<a target="_blank" rel="external nofollow"  href="http://passport.blogbus.com/register_form">申请博客</a>&nbsp;|&nbsp;
            <a target="_blank" href="http://www.blogbus.com/about/sitemap.html">网站地图</a>&nbsp;|&nbsp;<a target="_blank" href="http://www.blogbus.com/about/partners.html">合作伙伴</a>
        </div>
        <div class="copyright">&copy; 2002-2016 BlogBus.com, All Rights Reserved. 博客大巴  版权所有 沪ICP备05008275号-1</div>
        <div style="width:300px;margin:0 auto; padding:20px 0;">
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011202001260" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://public.blogbus.com/images/news/2016/06-06/ba.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">沪公网安备 31011202001260号</p></a>
        </div>
    </div>
    <div id="gotop" class='pie' title='回到顶部'>
        <div id="arrow"><img src="http://public2.blogbus.com/bbc-v6/front/img/arrow.png"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).scroll(function () {
                if ($(document).scrollTop() < 200) {
                    $('#gotop').fadeOut('normal');
                } else {
                    $('#gotop').fadeIn('normal');}
                $('#arrow').click(function () {
                    $(document).scrollTop(0);
                })
            });
        })
    </script>



    <!-- 登录 
    <script type="text/javascript">
    <!--
        function login_info(u) {
            if (u.user) {
                $("#header_login_username").text(u.user);
                $("#login_username").text(u.user);
                $(".nologin").hide();
                $(".logged").show();
                if (u.domain)
                {
                    var link = 'http://' + u.domain;
                    $("#user_blog").attr('href', link);
                    $("#user_blog").attr('target', '_blank');
                }
            } else {
                $(".nologin").show();
                $(".logged").hide();
                $("#user_blog").attr('href', 'http://blog.home.blogbus.com/posts/');
            }
        }
    //-->
    </script>
    <script src="http://blog.home.blogbus.com/api/blogs/default_domain?jsonp=login_info"></script>

    <div style='display:none'>
        <script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8452dbf205b0f6608661b0fdea22c741' type='text/javascript'%3E%3C/script%3E"));
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0bf0c42893a6fad32906acaa37a00451' type='text/javascript'%3E%3C/script%3E"));

        </script>
    </div>
</body>
</html>
