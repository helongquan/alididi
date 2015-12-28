<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage alididi
 * @since alididi 1.0
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/zzsc.js" type=text/javascript></script>
    <script type="text/javascript" src="js/jquery.hhService.js"></script>
    <script type="text/javascript">$(function(){$("#hhService").fix({float:'right',minStatue:false,skin:'green',durationTime:1000})});</script>
    <title>首页</title>
</head>
<body style="height: 2000px" >
    <div class="container">
        <!-- 顶部logo和搜索框 开始-->
        <div class="header">
            <div class="row">
                <div class="col-xs-12 col-md-2" id="head_logo"><img src="images/logo.png"></div>
                <div class="col-xs-12 col-md-10" id="top_search">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
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
                    <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-home">首页</i></a>
                </div>
                <!-- end-->
                <!--连接导航链接，表单和折叠其他内容-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> 最新优惠<span class="sr-only">(current)</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> 阿狸海淘</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> 产品分类<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">男装</a></li>
                                <li><a href="#">女装</a></li>
                                <li><a href="#">童装</a></li>
                                <li><a href="#">老人装</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">家电</a></li>
                                <li><a href="#">床上用品</a></li>
                                <li><a href="#">母婴</a></li>
                                <li><a href="#">数码</a></li>
                                <li><a href="#">图书</a></li>
                                <li><a href="#">美妆</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">鞋</a></li>
                                <li><a href="#">箱包</a></li>
                                <li><a href="#">文体</a></li>
                                <li><a href="#">食品</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> 情报推送</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> 品牌团</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> 购物攻略</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">软件下载</a></li>
                                <li><a href="#">杂志</a></li>
                                <li><a href="#">原创作品</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">积分商城</a></li>
                                <li><a href="#">众测</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="glyphicon glyphicon-log-in"></i>登录</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-registration-mark"></i>注册</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    <!-- 页面头部导航 结束-->

        <!-- 内容区 开始-->
        <div class="panel-body">
            <!-- 侧边栏 开始-->
            <div class="sidebar" id="sidebar">
                <div class="list-group" id="list-group">
                    <a href="#" class="list-group-item active"><i class="glyphicon glyphicon-list"></i> 产品分类</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-star"></i> 每日之星</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-bullhorn"></i> 超热卖</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-eye-open"></i> 时尚款</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-fire"></i> 发烧款</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-time"></i> 限时折扣</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-asterisk"></i> 超低价</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-phone"></i> 新款上市</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-user"></i> 淘客中心</a>
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-plane"></i> 旅行装</a>
                </div>
            </div>
            <!-- 侧边栏 结束-->
            <div class="banner_right" id="banner_right">
                <!-- 轮播图/幻灯片播放图，引用-->
                <div class="box-zzsc">
                    <div class="ctrl-panel">
                        <a class=m-page href="javascript:;" rel=js_btn_list>1</a>
                        <a class=m-page href="javascript:;" rel=js_btn_list>2</a>
                        <a class=m-page href="javascript:;" rel=js_btn_list>3</a>
                        <a class=m-page href="javascript:;" rel=js_btn_list>4</a>
                        <a class=m-page href="javascript:;" rel=js_btn_list>5</a>
                    </div>
                    <div class=scroll-wrap>
                        <div class=scroll_box_content rel="scroll_box_content">
                            <div class=content_list>
                                <img onClick="location.href='#'" src="images/banner_1.jpg" />
                            </div>
                            <div class=content_list>
                                <img onClick="location.href='#'" src="images/banner_2.jpg" />
                            </div>
                            <div class=content_list>
                                <img onClick="location.href='#'" src="images/banner_3.jpg" />
                            </div>
                            <div class=content_list>
                                <img onClick="location.href='#'" src="images/banner_4.jpg" />
                            </div>
                            <div class=content_list>
                                <img onClick="location.href='#'" src="images/banner_5.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end-->
            </div>
            <!-- 右侧banner 结束-->

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
            <!-- 内容模块 开始-->
            <div class="modal-content">
                <div class="jumbotron">
                        <h1>亲，一直在等你呢...</h1>
                        <p>阿狸弟弟为你准备了丰富的宝贝，供您选择，如果通过我们的推荐你买到了物美价廉的商品，请记得常来关顾哈</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">进入选购区</a></p>
                </div>
            </div>

        </div>
        <!-- 页面底部 开始-->
        <div class="footer">

        </div>
        <!-- 页面底部 结束-->
    </div>
</bodystyle>
</html>