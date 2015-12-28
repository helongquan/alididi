<?php get_header();?>       
        <!-- 内容区 开始-->
<?php get_sidebar();?>        
            <!-- 内容模块 开始-->
            <!-- 循环模块 开始 -->
            <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                <!--需要循环的模块-->

                <!-- 文章区域 开始 -->
        <div class="talk_container">
			<ul class="list-group">
			<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!--需要循环的模块-->
				<li class="list-group-item">
				    <span class="badge">200浏览</span>
				    <h3><a href="<?php the_permalink() ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a></h3>
				    <p><span>用户A</span>提问于<span><?php the_time(’m-d-y’) ?></span>
				    &nbsp;&nbsp;&nbsp;&nbsp;<span>分类：</span><span><?php the_category(’, ‘) ?></span>
				    </p>
				</li>

				
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>

			</ul>
		</div>	
        <!-- 文章区域 结束 -->

<?php endwhile; ?>
        <div style="text-align:center"><?php wp_pagenavi(); ?></div>
<?php endif; wp_reset_query(); ?>
            <!-- 循环模块 结束 -->
</div>

        </div>
        <!-- 内容区 结束 -->       
<?php get_footer();?>