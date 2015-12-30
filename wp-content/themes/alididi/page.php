<?php    
/* 
Template Name: 默认页面模板   
*/   
?>
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
                    <li class="list-group-item">
                        <div class="media">
                          <div class="media-body">
                            <h3><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 40, '...'); ?></a></h3>
                            <p id="single_biaoqian"><span class="glyphicon glyphicon-user">:<?php the_author(); ?></span>&nbsp;&nbsp;<span class="glyphicon glyphicon-time">:<?php the_date_xml()?>&nbsp;</span><span class="glyphicon glyphicon-th-list">:<?php the_category(',') ?></span></p>
                            <hr style="width:100%;border:1px solid #888888;margin-bottom:10px">
                            <p><?php the_content(); ?></p>
                          </div>
                        </div>
                        <!-- 文章分页代码调用 开始 -->
                            <?php wp_link_pages(array('before' => '<div class="fenye">分页阅读：', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '&laquo;', 'nextpagelink' => "")); ?> <?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>')); ?> <?php wp_link_pages(array('before' => '', 'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "&raquo;")); ?>
                        <!-- 文章分页代码调用 结束 -->
                    </li>

                <?php endwhile; ?>
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