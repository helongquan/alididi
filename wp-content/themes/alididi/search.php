<?php get_header();?>       
        <!-- 内容区 开始-->
<?php get_sidebar();?>        
            <!-- 内容模块 开始-->
            <!-- 循环模块 开始 -->
            <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                <!--需要循环的模块-->

                <div class="jumbotron">
                    <div class="container">
                        <h1><a href="<?php the_permalink() ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 30,''); ?></a></h1>
                       	<!-- <a href="#" class="thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/images/banner_11.jpg" alt="kindle阅读器">
                        </a> -->
                            <?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">进入选购区</a></p>
                    </div>
                </div>


<?php endwhile; ?>
                <?php else : ?>
                <div class="sousuo_jg">
                    <p class="text-center">您搜索的结果不存在，请重新搜索！</p>
                </div> 
        <div style="text-align:center"><?php wp_pagenavi(); ?></div>
<?php endif; wp_reset_query(); ?>
            <!-- 循环模块 结束 -->

 <!--            </div> -->

           <!--  <div class="jumbotron">
                <div class="container">
                    <h1>还在因为每天拿着厚厚的书而烦恼吗？扔掉它！</h1>
                    <a href="#" class="thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/images/banner_8.jpg" alt="kindle阅读器">
                    </a>
                    <p>
                        <a class="btn btn-primary btn-lg">进入选购区</a>
                    </p>
                </div>
            </div>

            <div class="jumbotron">
                <div class="container">
                    <h1>美食诱惑，尽在蘑菇街</h1>
                        <a href="#" class="thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/images/banner_9.jpg" alt="蘑菇街">
                        </a>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>

            <div class="jumbotron">
                <div class="container">
                    <h1>2016年初，服装新品强势袭来</h1>
                    <p>
                        <a href="#" class="thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/images/banner_7.jpg" alt="">
                        </a>
                    </p>
                    <p>
                        <a class="btn btn-primary btn-lg">进入选购区</a>
                    </p>
                </div>
            </div> -->
        </div>
        <!-- 内容区 结束 -->       
<?php get_footer();?>