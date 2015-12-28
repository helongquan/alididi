<?php
	$action=$_GET['action'];
	switch ($action) {
		case 'add':
			echo "<script>alert('现在可以执行添加操作了！');location='index.php';</script>";
			break;
		case 'delete':
			echo "<script>alert('现在可以执行删除操作了！');location='index.php';</script>";
			break;
		case 'alert':
			echo "<script>alert('现在可以执行修改操作了！');location='index.php';</script>";
			break;
		case 'search':
			echo "<script>alert('现在可以执行查询操作了！');location='index.php';</script>";
			break;
	}
?>