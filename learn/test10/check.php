<?php
	$urlar=parse_url($_SERVER['HTTP_REFERER']);
	print("<pre>");
	print_r($urlar);
	print_r($_SERVER['HTTP_REFERER']);
	if ($urlar['host']!="127.0.0.1") {
		echo "页面失效！";
		echo "<script>alert('连接失效');location='index.php';</script>;
		exit;
	}
	echo "可以正常访问页面了";
?>