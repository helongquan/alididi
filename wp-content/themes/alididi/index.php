<?php get_header();?>       
        <!-- 内容区 开始-->
            <!-- <div id="main-content">
                <router-view></router-view>
            </div> --> 
            <!-- 内容模块 开始-->
            <!-- <ul class="list-group" id="index_listgroup"> -->
            <!-- 循环模块 开始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                            <!--需要循环的模块-->            

					<div class="jumbotron">
		                <div class="container">
		                    <h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2>          
		                            <?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
		                    <p><a class="btn btn-primary btn-lg" href="#" role="button">了解更多</a></p>
		                </div>
		            </div>

                <?php endwhile; ?>
                        <div style="text-align:center;padding:10px" id="pagenavi_style"><?php wp_pagenavi(); ?></div>
                <?php endif; wp_reset_query(); ?>
            <!-- 循环模块 结束 -->
                
            <!-- </ul> -->

			<!-- 在线客服代码 开始 -->
            <div class="scrollsidebar" id="hhService">
                <div class="side_content">
                    <div class="side_list">
                        <div class="side_title">
                            <a title="隐藏" class="close_btn"><span>关闭</span></a></div>
                        <div class="side_center">
                            <div class="qqserver">
                                <p>
                                    <a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=800020304&site=qq&menu=yes" target="_blank">
                                       <img src="http://wpa.qq.com/pa?p=1:800020304:51">售前客服</a></p>
                                <p>
                                    <a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=800020304&site=qq&menu=yes" target="_blank">
                                        <img src="http://wpa.qq.com/pa?p=1:800020304:51">售前客服</a></p>
                                <p>
                                    <a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=800020304&site=qq&menu=yes" target="_blank">
                                        <img src="http://wpa.qq.com/pa?p=1:800020304:51">售后客服</a></p>
                                <p>
                                    <a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=800020304&site=qq&menu=yes" target="_blank">
                                        <img src="http://wpa.qq.com/pa?p=1:800020304:51">技术支持</a></p>
                            </div>
                            <strong>咨询热线：123456</strong><div class="msgserver">
                            <p><a href="http://sc.chinaz.com/">给我们留言</a></p>
                        </div>
                        </div>
                        <div class="side_bottom">
                        </div>
                    </div>
                </div>
                    <div class="show_btn"><span>在线客服</span></div>
            </div>
            <!-- 在线客服代码 结束 -->
            <!-- 右侧悬浮二维码返回顶部代码 开始-->
            <div class="toolbar">
                <a href="###" class="toolbar-item toolbar-item-weixin">
                    <span class="toolbar-layer"></span>
                </a>
                <a href="###" class="toolbar-item toolbar-item-feedback"></a>
                <a href="###" class="toolbar-item toolbar-item-app">
                    <span class="toolbar-layer"></span>
                </a>
                <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
            </div>
            <!-- 右侧悬浮二维码返回顶部代码 结束-->
          
        </div>
        <!-- 内容区 结束 -->       
<?php get_footer();?>