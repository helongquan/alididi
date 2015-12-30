
                        <!-- 首页右边侧边栏内容 开始-->
                <div class="index_sidebar_right" id="index_sidebar_right">
                    <div class="list-group">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>



                        <div class="panel panel-primary" id="sidebar_cat">
                            <div class="panel-heading">
                                文章分类
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">

                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group"><?php wp_list_categories('title_li=0&orderby=name&show_count=0'); ?></li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_query(); ?>

                                </ul>
                            </div>
                        </div>
                        <!-- 最新文章 -->
                        <div class="panel panel-primary" id="sidebar_newest">
                            <div class="panel-heading">
                                最新文章
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">

                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group"><?php wp_get_archives('type=postbypost&limit=1'); ?></li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_query(); ?>

                                </ul>
                            </div>
                        </div>
                        <!-- 日志归档 -->
                        <div class="panel panel-primary" id="sidebar_log">
                            <div class="panel-heading">
                                日志归档
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">

                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group"><?php wp_get_archives( 'type=monthly' ); ?></li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_query(); ?>

                                </ul>
                            </div>
                        </div>
                        <!-- 友情链接 -->
                        <div class="panel panel-primary" id="sidebar_link">
                            <div class="panel-heading">
                                友情链接
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">

                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group"><?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=20'); ?></li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_query(); ?>

                                </ul>
                            </div>
                        </div>


                        <?php endif; ?>

                    </div> 
                </div>


        
            <!-- 首页右边侧边栏内容 结束-->