<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if gt IE 6]> <!-->
<html>
    <meta charset="utf-8">
    <title>boke</title>
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
                        <h1 class="logo pie" style="background-image: url('/blog/Public/img/blogbus_logo.png')"><lable>logo</lable></h1>
                        <nav class="top-nav">
                            <ul>
                                <li class="ico ios"><a href='http://www.blogbus.com/app/ios.html'><span class="pie"></span></a></li>
                                <li class="ico android"><a href='http://www.blogbus.com/app/index.html'><span class="pie"></span></a></li>
                                <li class="logged" id='header_login_username'></li>
                                <!--<li class="logged"><a rel="external nofollow" href="http://message.home.blogbus.com/received/">管理</a></li>-->
                                <li class="logged"><a rel="external nofollow" href="http://passport.blogbus.com/logout?goto=http%3A%2F%2Fhome.blogbus.com%2Flogout">退出</a></li>              
                                <li class="nologin"><a href="<?php echo U('index/index');?>" rel="external nofollow" ><?php echo ($username); ?></a></li>
                                <!--<li class="nologin"><a href="<?php echo U('admin/register/register');?>" rel="external nofollow" ><?php echo ($register); ?></a></li>-->

                            </ul>
                        </nav>
                    </div> 
                </div>
                <div class="site-nav-container pie">
                    <div class="container">
                        <nav class="site-nav">
                            <ul>
                                <li class='shouye'><a href="<?php echo U('index/index');?>" class="pie">首页</a></li>	
                                <li class='xingzhe'><a href="/" class="pie">行者</a></li>
                                <li class="fengshang"><a href="" class="pie">风尚</a></li>
                                <li class='sejie'><a href="" class="pie">色界</a></li>
                                <li class='shenghuo'><a href="" class="pie">生活</a></li>
                                <!--<li class='tuijian'><a href="http://tuijian.blogbus.com/"rel="external nofollow"  class="pie">推荐</a></li>-->
                            </ul>
                        </nav>
                        <nav class="utility-menus">
                            <ul>
                                <!--<li class="active"><span class="explore"><a rel="external nofollow"  href="<?php echo U('admin/login/index');?>" id="user_blog" class="pie" style="color:'#00BFFF'">个人博客</a></span></li>-->
                                <li><span class="post"><a rel="external nofollow"  href="<?php echo U('admin/login/index');?>" target='_blank' class="pie">发布</a></span></li>
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
  
<style type="text/css">
div.small {font-size:12px;}
div.normal {font-size:14px;}
div.big {font-size:16px;}
</style>

<script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/js/picobox.js"></script>
<script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/js/picobox_beauty.js"></script>
<link rel="stylesheet" href="http://public2.blogbus.com/bbc-v6/css/picobox.css" type="text/css"  />
<link rel="stylesheet" href="http://public2.blogbus.com/bbc-v6/css/picobox_beauty.css" type="text/css"  />

<script type="text/javascript" src="http://public2.blogbus.com/bbc-v6/front/js/page.js"></script>
<link href="http://public2.blogbus.com/bbc-v6/front/css/article.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://public2.blogbus.com/bbc-v6/front/css/content.css" type="text/css"  />
<script>
$('li.shenghuo').addClass('actived');

function changeFontSize(value) {
  var htmlContent;
  if(value == "12") {
    htmlContent = " 选择字号：<span>小</span> <a href=\"javascript:changeFontSize('14');\">中</a> <a href=\"javascript:changeFontSize('16');\">大</a> ";
  }
  if(value == "14") {
    htmlContent = " 选择字号：<a href=\"javascript:changeFontSize('12');\">小</a> <span>中</span> <a href=\"javascript:changeFontSize('16');\">大</a> ";
  }
  if(value == "16") {
    htmlContent = " 选择字号：<a href=\"javascript:changeFontSize('12');\">小</a> <a href=\"javascript:changeFontSize('14');\">中</a> <span>大</span> ";
  }
  $('div.fontSwitcher').html(htmlContent);
  $('.postBody p').css("font-size", value+"px");
}
//function showCmt(data) {
//	  var htmlContent = '<h2><strong>评论</strong></h2><ol id="comments">';
//	  for (var i in data.data){
//		var comment = data.data[i];
//		if(i % 2 == 0) {
//		  htmlContent +='<li>';
//		} else {
//		  htmlContent +='<li class="style2">';
//		}
//		if(comment.userType == 1){
//		  htmlContent += '<a rel="external nofollow"  href="http://home.blogbus.com/profile/'+comment.username+'" target="_blank"><img src="'+comment.avatarUrl+'" width="48" height="48" alt="" /></a><div class="info"><h4><a rel="external nofollow"  href="'+comment.homepage+'" target="_blank">'+comment.nickname+'</a>';
//		}else{
//		  htmlContent += '<img src="http://public.blogbus.com/profile/head.gif" width="48" height="48" alt="" /><div class="info"><h4>'+comment.nickname;
//		}
//		htmlContent += ' <span class="time">'+comment.createdAt+'</span></h4>';
//		htmlContent += comment.commentText;
//		if(comment.reply != null) {
//		  htmlContent += '<div class="reCmtBody">';
//		  htmlContent += '<div><span class="author">幸福像花儿一样</span>回复<span>'+comment.nickname+'</span>说：</div>';
//		  htmlContent += '<div class="content">'+comment.reply.content+'</div>';
//		  htmlContent += '<div class="time">'+comment.reply.createdAt+'</div></div>';
//		}
//		htmlContent += '</div><div class="clear"></div></li>';
//	  }
//	  htmlContent += '</ol>';
//	  htmlContent += draw(data.current, data.total, data.pageSize, "javascript:loadCmt(4849245, 337023126, {p});");
//  $("div.commentList").html(htmlContent);
//}
function loadCmt(blogId, postId, page) {
  $.ajax({
		"url":"http://blog.home.blogbus.com/api/"+blogId+"/comments/"+postId+"/comments",
		 "dataType":"jsonp",
		 "jsonp":"jsonp",
		 //"jsonpCallback":"showCmt",
		 "data":{"page":page},
		 "success":showCmt
  }
	);
  //$.getJSON("http://blog.home.blogbus.com/api/"+blogId+"/comments/"+postId+"/comments?callback=?", {'page':page, 'jsonp':'showCmt'} );
}

$(document).ready(function() {
  loadCmt(4849245, 337023126, 1);
})

</script>
 
  <div class="mainContent">
    <div class="column" id="detailWrapper">
      <div id="detail" class="columnBody">

        <div class="postHeader">
          <h2><?php echo ($title); ?></h2>
          <h5><?php echo ($date); ?></h5>
          <div class="menubar">
            <div class="info">
                作者：<span><?php echo ($author); ?></span>
                &nbsp;来源：<span><?php echo ($artid); ?></span>  
              <br /><!-- <a href="#" onclick="Picobox.showIFrameBox('发送好友邀请','http://friend.home.blogbus.com/apply?apply_to=SadieaLupin',{width:400,height:200});"><img src="http://public.blogbus.com/static_files/pindao/imgs/btn_detail_friend.png" width="81" height="23" alt="加为好友" class="button" /></a> -->

            </div>
            <div class="clear"></div>
          </div>
        </div>
          <div class="postBody" style=" font-size: 30px">
          <?php echo ($content); ?>
          
<!--          <p>&nbsp; &nbsp; &nbsp; 无意间看到电子版的《我们仨》，因为篇幅不是很长，有空的时候就看看，不知不觉就看完了</p>

<p>&nbsp; &nbsp; &nbsp; 所以一家人都像书呆子，饱读诗书，满腹经纶，却在生活上常常犯下低能的错误，拿个大剪子剪了羊肉就开心的吃，不会做精细的饭食，就把肉骨乱七八糟的钝一锅，&ldquo;钟书吃肉，我喝汤，女儿吃我（的奶），&rdquo;一家三口抱成一团，基本没有社交 生活，象一个温暖的小孤岛，与外界维持最稀薄的人际关系。这个模式一直延续到他们生命的终点。</p>
<p>&nbsp; &nbsp; &nbsp; 他们快乐，只要有&ldquo;我们仨&rdquo;；他们丰盈，只因为有&ldquo;我们仨&rdquo;。</p>
<p>&nbsp; &nbsp; &nbsp; 然而&ldquo;我们仨&rdquo;的生活并非一帆风顺，早年出国历经艰辛求学，学成回国后与大家庭的相处也多有磕绊，居无定所，一家人经常分离；wen ge时期更是经历了一系列的变故，最终，还遭遇了白发人送黑发人的心酸。这些疼痛和奚落甚至是我们此生都未必会遭遇的，但即使如此，在通读了他们的人生之后，我感受到的仍旧是他们生 活中的温暖和爱，如此恬静的、不乱分寸的流淌在艰难生活的每一天当中。这份温暖和爱，就是他们对人生的态度，早已与他们经历什么样的人、什么样的事毫无关系。</p>
<p>&nbsp; &nbsp; &nbsp; 据说，拥有回忆的人是幸福的，回忆，也是相会的一种形式，杨绛淡然的写下关于他们仨的回忆，是千里奔赴，会一场相约。</p>
<p>&nbsp;</p>         -->
<div class="clear"></div>
<!--          <div class="tag"><strong>标签：</strong>
          	          	 <a href="/shenghuo/随笔">随笔</a>
          	          	 <a href="/shenghuo/情感">情感</a>
          	          	 <a href="/shenghuo/读书笔记">读书笔记</a>
          	            
          </div>-->
         <div class="share_new">
		<!-- Baidu Button BEGIN -->
<!--<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span><a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>

</div>-->
<!--<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6785502" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>-->
<!-- Baidu Button END -->
          </div>  
          <div class="clear"></div> 
        </div>
        <div class="postFooter">
    	      
        </div>
      </div>
    </div>

    <div id="comments" class="commentList">
      
      
    </div>
    <div id="commentForm"></div>
    <!--<script type="text/javascript" src="http://blog.home.blogbus.com/front/4849245/comments/337023126/cmt_form?can_share=1"></script>-->
  </div>
  <div class="subContent">
    <!--Tag图-->
    <div id="tagCloud" class="module">
      <div class="borderlineSt"></div>
      <h3><strong>热门Tag</strong> <span class="more"><!-- <a href="#">更多</a> --></span></h3>

      <ul>
                <li><a href="/shenghuo/笔下文学/">笔下文学</a></li>
                <li><a href="/shenghuo/随笔/">随笔</a></li>
                <li><a href="/shenghuo/电影推荐/">电影推荐</a></li>
                <li><a href="/shenghuo/心灵鸡汤/">心灵鸡汤</a></li>
                <li><a href="/shenghuo/情感/">情感</a></li>
                <li><a href="/shenghuo/读书笔记/">读书笔记</a></li>
                <li><a href="/shenghuo/DIY/">DIY</a></li>
                <li><a href="/shenghuo/爱音乐/">爱音乐</a></li>
                <li><a href="/shenghuo/爱情/">爱情</a></li>
                <li><a href="/shenghuo/小说/">小说</a></li>
                <li><a href="/shenghuo/美国电影/">美国电影</a></li>
                <li><a href="/shenghuo/创意/">创意</a></li>
                <li><a href="/shenghuo/手工/">手工</a></li>
                <li><a href="/shenghuo/成长/">成长</a></li>
                <li><a href="/shenghuo/生活/">生活</a></li>
                <li><a href="/shenghuo/青春/">青春</a></li>
                <li><a href="/shenghuo/设计/">设计</a></li>
                <li><a href="/shenghuo/美食地图/">美食地图</a></li>
                <li><a href="/shenghuo/剧情/">剧情</a></li>
                <li><a href="/shenghuo/饕餮/">饕餮</a></li>
                <li><a href="/shenghuo/喜剧/">喜剧</a></li>
                <li><a href="/shenghuo/烘焙/">烘焙</a></li>
                <li><a href="/shenghuo/外国文学/">外国文学</a></li>
                <li><a href="/shenghuo/电影/">电影</a></li>
                <li><a href="/shenghuo/感悟/">感悟</a></li>
              </ul>
      <div class="borderlineSt"></div>
    </div>
    <!--精彩推荐-->
    <div id="spotlight" class="module">
      <h3 id="recommended"><strong>精彩推荐</strong></h3>
      <div class="featured"> <a href="http://www.blogbus.com/shenghuo/2014061622635.html" target="_blank"><img src="http://public.blogbus.com/images/news/2014/06-18/111.jpg" width="60" height="60" alt=毕业匆匆：且行且珍惜/></a>
        <div class="info">
<h5><a href="http://www.blogbus.com/shenghuo/2014061622635.html" target="_blank">毕业匆匆：且行且珍惜</a></h5>
青春的火焰在最后的时光里烧得那么炽烈，不带一丝虚假。
      
</div>
        <div class="clear"></div>
      </div>
      <ol>

        <li><span class="tags"><a href="http://www.blogbus.com/shenghuo/" target="_blank">【生活】</a></span> <a href="http://www.blogbus.com/shenghuo/2014061322626.html" target="_blank">胡适告诉陆小曼：你的一切我包了</a></li>

		<li><span class="tags"><a href="http://www.blogbus.com/sejie/" target="_blank">【色界】</a></span> <a href="http://www.blogbus.com/sejie/2014060322583.html">伊斯坦布尔：海因为它而伟大</a></li>

        <li><span class="tags"><a href="http://www.blogbus.com/sejie/" target="_blank">【色界】</a></span> <a href="http://www.blogbus.com/sejie/2014061722639.html" target="_blank">巴黎：感受旅行</a></li>

        <li><span class="tags"><a href="http://www.blogbus.com/xingzhe/" target="_blank">【行者】</a></span> <a href="http://www.blogbus.com/xingzhe/2014061322631.html">欧洲遗产日，我去看建筑</a></li>

        <li><span class="tags"><a href="http://www.blogbus.com/xingzhe/" target="_blank">【行者】</a></span> <a href="http://www.blogbus.com/xingzhe/2014061222623.html">南法匆匆：尼斯,摩纳哥,戛纳,马赛。</a></li>

       
      </ol>
    </div>    <!--ad-->
    
    <!--看法电子报-->
    <div id="viewpoint" class="module">
      <div class="borderlineSt"></div>
      <h3><strong>看法电子报</strong></h3>
      <div class="featured"><a  rel="external nofollow"  href="http://kanfa.blogbus.com/blinddate" target="_blank"><img 
src="http://public.blogbus.com/images/news/2014/02-18/相亲2.jpg" alt="给我一个相亲的理由" /></a></div>
      <div class="info">
        <h5><a  rel="external nofollow"  href="http://kanfa.blogbus.com/blinddate" target="_blank">给我一个相亲的理由</a></h5>

    在经历最初的期望与失望之后我就不再对通过相亲找到另一半抱有多大的幻想，久而久之变成一种痛并麻木着的应酬。
        <div class="readmore"><a rel="external nofollow" href="http://kanfa.blogbus.com/" target="_blank">阅读更多&raquo;</a></div>
      </div>
       <div class="clear"></div>
      <ul>
	  <li><a rel="external nofollow"  href="http://kanfa.blogbus.com/springfestival2011/" target="_blank">花样过年记</a> [编辑：暖]</li>
	   <li><a rel="external nofollow"  href="http://kanfa.blogbus.com/2011films/" target="_blank">享一道贺岁甜点</a> [编辑：喵喵]</li>
	  <li><a rel="external nofollow"  href="http://kanfa.blogbus.com/iwish/" target="_blank">许愿树：让心愿飞</a> [编辑：希柠柠]</li> 
	   <li><a  rel="external nofollow" href="http://kanfa.blogbus.com/oldphoto/" target="_blank">老照片的故事</a> [编辑：暖]</li> 
    </ul>

 </div>	
    <!--RSS订阅-->
      <div id="syndication" class="module">
<div class="borderlineSt"></div>

<h3><strong>订阅</strong></h3>
<div class="subscribe"><a href="http://www.blogbus.com/shenghuo/rss">订阅生活频道RSS</a></div>
<ul>
  <li><a  rel="external nofollow" href="http://fusion.google.com/add?feedurl=http://www.blogbus.com/shenghuo/rss" target="_blank"><img src="http://public2.blogbus.com/imgs/pindao/imgs/google.png" width="110" height="16" alt="" /></a></li>
  <li><a rel="external nofollow" href="http://mail.qq.com/cgi-bin/feed?u=http://www.blogbus.com/shenghuo/rss" target="_blank"><img src="http://public2.blogbus.com/imgs/pindao/imgs/qqmail.png" width="110" height="16" alt="" /></a></li>
  <li><a  rel="external nofollow" href="http://www.xianguo.com/subscribe.php?url=http://www.blogbus.com/shenghuo/rss" target="_blank"><img src="http://public2.blogbus.com/imgs/pindao/imgs/xianguo.png" width="110" height="16" alt="" /></a></li>
  <li><a  rel="external nofollow" href="http://www.zhuaxia.com/add_channel.php?url=http://www.blogbus.com/shenghuo/rss" target="_blank"><img src="http://public2.blogbus.com/imgs/pindao/imgs/zhuaxia.png" width="110" height="16" alt="" /></a></li>
  <li class="clear"></li>

</ul>
<div class="borderlineSt"></div>
</div>  </div>

  <div class="clear"></div>
<!--DMP Site Tracking Code >          
<script type="text/javascript" language="javascript">
var dmp_referrer = document.referrer;
var dmp_opener = null;
var dmp_parent = null;
if (window.opener != null) { dmp_opener = window.opener.location; }
if (window.parent != null) { dmp_parent = window.parent.location; }
</script>
<script type="text/javascript" language="javascript" src="http://site.thinkmedia.cn/tracker/samsungchinamobile.js"></script>
<!--End of DMP Site Tracking Code-->




<div style="display:none;">
<img src="http://ad.thinkmedia.cn/htracker/pid=2444/media=blogbus/place=17bbpd/size=250x280"/>
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
    $(document).ready(function(){
      $(document).scroll(function(){
	if ($(document).scrollTop()<200) {
	  $('#gotop').fadeOut('normal');
	} else {$('#gotop').fadeIn('normal');}
	$('#arrow').click(function(){
	  $(document).scrollTop(0);
	})
      });
    })
  </script>

 
    
<!-- 登录 -->
<script type="text/javascript">
<!--
function login_info(u) {
if (u.user) {
	$("#header_login_username").text(u.user);
	$("#login_username").text(u.user);
	$(".nologin").hide();
	$(".logged").show();
	if(u.domain)
	{
		var link = 'http://'+ u.domain;
		$("#user_blog").attr('href',link);
		$("#user_blog").attr('target','_blank');
	}
} else {
	$(".nologin").show();
	$(".logged").hide();
	$("#user_blog").attr('href','http://blog.home.blogbus.com/posts/');
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