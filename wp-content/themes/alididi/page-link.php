<?php    
/* 
Template Name: 友情链接模板  
*/   
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <?php include( TEMPLATEPATH . '/seo.php' ); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php if (is_home()||is_search()) { bloginfo('name'); } else { wp_title(''); print " - "; bloginfo('name'); } ?> </title>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/zzsc.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.hhService.js"></script>
    <script type="text/javascript">$(function(){$("#hhService").fix({float:'right',minStatue:false,skin:'green',durationTime:1000})});</script>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
    <style type="text/css">
            #sidebar{width: 16%;float: left;}
            #index_listgroup li{background-color: #f7f5ea;padding: 5px}
            #index_listgroup{width: 100%}
            #sidebar_link_right{float: right;width: 83%}
            #link_list{display: inline}
    </style>
</head>
<body id="app">
    <div class="container">
        <!-- 网站顶部横幅代码 开始-->
        <div class="bnav openClose">
            <div class="bnav2">
                <span class="s1">
                    欢迎来到<?php bloginfo(’name’); ?>！
                </span>
                <span class="s2">
                    <span><a href="#" @click="showRight = true"><i class="glyphicon glyphicon-log-in"></i><?php wp_loginout(); ?></a>
                        <a href="#" @click="showLeftbar()"><i class="glyphicon glyphicon-registration-mark"></i><?php wp_register(''); ?></a>
                    </span>
                    <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> 购物车</a>|<a href="#">帮助</a>
                </span>
                <span class="close"><a href="javascript:void(0)" onclick="closeNav()" title="关闭">关闭</a></span>
            </div>
        </div>
        <div class="bnav3 openClose" style="display:none;"><a href="javascript:void(0)" onclick="showNav()" title="打开">打开</a></div>
        <!-- 网站顶部横幅代码 结束-->

        <!-- 用户登录模态框弹出内容 开始 -->
        <sidebar :show.sync="showRight" placement="right" header="用户登录" :width="50%">
            <div class="login_left">
               <img src="<?php bloginfo('template_directory'); ?>/images/pic9.jpg" class="img-responsive" alt="Image"> 
            </div>
            <div class="login_right">
                <form action="#" method="POST" role="form" >
                    <legend>用户登录</legend>                   
                    <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="text" name="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
                    </div>
                    <div id="getpassword">
                    <!-- 通过label里面包含checkbox，可以做到不用点击多选框，直接点击文字也能选中 -->
                        <label>
                            <input type="checkbox"/>&nbsp;记住密码 
                        </label>
                        <label for="label" id="zhaohui">
                            <span><a href="#">找回密码</a></span>&nbsp;&nbsp;<span><a href="#">立刻注册</a></span>
                        </label>
                    </div>
                    <label>
                            <button type="submit" class="btn btn-primary">登录</button>
                            <button type="reset" class="btn btn-default">取消</button>
                    </label>
                    <hr>
                    <div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="img-responsive" alt="Image">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="<?php bloginfo('template_directory'); ?>/images/pic2.jpg" class="img-responsive" alt="Image">
                        </div>
                    </div>
                </form>
            </div>
            <div class="aside-footer">
                <button type="button" class="btn btn-default" @click="showRight=false">Close</button>
            </div>
        </sidebar>

        <sidebar  :show.sync="showLeft" placement="left" header="用户注册" :width="50%">
            <form action="#" method="POST" role="form" >
                <div class="row" id="register_form">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>用户名 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>邮箱 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>手机号 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>密码 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>再次输入 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <label>验证码 <span>*</span></label><br/>
                        <input type="text" name="username" id="input" class="form-control" value="" required placeholder="Username" title="username"><label>验证码生成区域</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <button type="submit" class="btn btn-info btn-block">注册</button>
                    </div>
                </div>
                <div class="aside-footer">
                    <button type="button" class="btn btn-default" @click="showLeft=false">Close</button>
                </div>
            </form>
        </sidebar>

        <!-- 用户登录模态框弹出内容 结束 -->
        <!-- 顶部logo和搜索框 开始-->
        <div class="header">
            <div class="row">
                <div class="col-xs-12 col-xs-12 col-md-6 col-lg-6">
                    <div class="imags" id="head_logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></div>
                </div>
                <div class="col-xs-12 col-xs-12 col-md-6 col-lg-6" id="top_search">
                    <form class="navbar-form navbar-right" role="search" method="get" action="<?php bloginfo('url'); ?>/">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for..." value="<?php the_search_query(); ?>" name="s" id="s"/>
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" id="searchsubmit" value="Search" /><i class="glyphicon glyphicon-search"></i></button>
                          </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     <!-- 顶部logo和搜索框 结束-->
     <!--页面头部导航 开始-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- 兼容移动终端，让他们更好的显示出来 -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><i class="glyphicon glyphicon-home">首页</i></a>
                </div>
                <!-- end-->
                <!--连接导航链接，表单和折叠其他内容-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills" id="index_navbar_id">
                        <li><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        <!-- 页面头部导航 结束-->
        
            <!-- 左侧边栏 开始-->
            <div class="sidebar" id="sidebar">
                <ul class="list-group" id="list-group">
                    <li class="list-group-item"><?php wp_list_pages(); ?></li>
                </ul>
            </div>
            <!-- 左侧边栏 结束-->      
            
        <!-- 内容区 开始-->
<!--             <div id="main-content">
                <router-view></router-view>
            </div>  -->
            <!-- 内容模块 开始-->
            <div id="sidebar_link_right">
                <ul class="list-group" id="index_listgroup">
                <!-- 循环模块 开始 -->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                                <!--需要循环的模块-->
                        <li class="list-group-item">
                            <span id="link_list">
                                <?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=30'); ?>
                            </span>
                        </li>
                                <!-- 需要循环模块的闭合标签 -->
                    <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                <!-- 循环模块 结束 -->
                    
                </ul>
            </div>    

            <!-- 右侧悬浮二维码返回顶部代码 开始-->
            <!-- <div class="toolbar">
                <a href="###" class="toolbar-item toolbar-item-weixin">
                    <span class="toolbar-layer"></span>
                </a>
                <a href="###" class="toolbar-item toolbar-item-feedback"></a>
                <a href="###" class="toolbar-item toolbar-item-app">
                    <span class="toolbar-layer"></span>
                </a>
                <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
            </div> -->
            <!-- 右侧悬浮二维码返回顶部代码 结束--> 
        </div>
        <!-- 内容区 结束 -->       
<?php get_footer();?>