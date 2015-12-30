<?php get_header();?>       
        <!-- 内容区 开始-->
<!--             <div id="main-content">
                <router-view></router-view>
            </div>  -->
            <!-- 内容模块 开始-->
            <ul class="list-group" id="index_listgroup">
            <!-- 循环模块 开始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                            <!--需要循环的模块-->
                    <li class="list-group-item" id="list_group_item">
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="<?php bloginfo('template_directory'); ?>/images/pic5.jpg" alt="<?php wp_title(); ?>">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 32, '...'); ?></a></h4>
                            <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"……");?></p>
                          </div>
                        </div>
                    </li>

                <?php endwhile; ?>
                        <div style="text-align:center;padding:10px" id="pagenavi_style"><?php wp_pagenavi(); ?></div>
                <?php endif; wp_reset_query(); ?>
            <!-- 循环模块 结束 -->
                
            </ul>


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


             <?php get_sidebar();?> 


          
        </div>
        <!-- 内容区 结束 -->       
<?php get_footer();?>