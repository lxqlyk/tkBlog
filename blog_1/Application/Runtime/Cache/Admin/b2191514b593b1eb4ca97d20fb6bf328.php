<?php if (!defined('THINK_PATH')) exit();?><div id="menu-3" class="content gallery-section">
                            <div class="box-content">
                                <h3 class="widget-title">我的日志</h3>
                                <div class="row">
                                    <form action="<?php echo U('diary/diary');?>" method="get">
                                       <?php foreach($dcontent as $key => $val): ?>  
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="project-item" id="1">
                                            <a href="<?php echo U('diary/diary').'?id='.$val['d_id'];?>"> <img src="/blog_1/Public/img/yuedu1.jpg" alt=""></a>
                                            <div class="project-hover">
                                                <h4><?php echo ($val['title']); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                       <?php endforeach; ?>
                                    </form> 
                                </div>
                                <div class=" pages">
                                    <?php echo ($pages); ?>
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
                                            $(".list").html(data.data);
                                        }
                                        console.log(data.message);
                                    });
                                }
                        </script>