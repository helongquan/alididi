<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>404 - 您所查找的页面不存在！</title>
<style>
	.main{text-align:center; margin:75px 0 0 0; font:normal normal 14px/1.8em normal;}
	.error_img{margin:0 0 20px 0;}
</style>
</head>
<body>
	<div class="main">
		<div class="error_img"><img src="<?php bloginfo('template_directory'); ?>/images/404.png"></div>
		出错啦！请尝试访问 <a href="<?php echo get_option('home'); ?>">首页</a>
	</div>
</body>
</html>