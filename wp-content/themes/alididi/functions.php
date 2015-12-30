<?php 
//自定义菜单
   register_nav_menus(
      array(
         'header-menu' => __( '导航自定义菜单' ),
      )
   );
?>
<?php add_filter( 'show_admin_bar', '__return_false' );?>
<?php
//支持外链缩略图
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
function catch_first_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
$random = mt_rand(1, 9);//修改随机图片文件夹里的图片数量，1表示一次使用一张，2表示文件夹中总共有两张
echo get_bloginfo ( 'stylesheet_directory' );
echo '/images/random/'.$random.'.jpg';
}
return $first_img;
}
?>
<!-- 小工具栏调用函数 -->
<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="sidebox">	',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
?>
<!-- 友情链接添加 -->
<?php add_filter( 'pre_option_link_manager_enabled', '__return_true' ); ?>