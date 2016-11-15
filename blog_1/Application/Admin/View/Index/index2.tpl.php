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