<?php
	if (isset($_POST)) {
		if ($_POST['username']=='jim' && $_POST['pwd']=='jim') {
			echo "登录成功！";
		}else{
			echo "<script>alert('登录失败！');location='index.php';</script>";
		}
	}
?>