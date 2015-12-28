<?php
header('Content-type:text/html;charset=utf-8');//设置编码格式
include_once('../conn.php');//引入外部数据库连接文件
if ($_POST['email']) {      //表单提交非空验证
	$email=$_POST['email'];  //获取用户提交的用户名
	$password=$_POST['password'];  //获取用户提交的密码
	$sql="select * from register where email='".$email."' and password='".$password."'";
	mysql_query($sql);  //执行SQL语句
	$num=mysql_affected_rows();  //获取受影响的行数
	if ($num>0) {
		echo "<script>alert('用户登录成功！')</script>";
	}else{
		echo "<script>alert('用户名或密码错误，请重新登录！');location='login.php'; </script>";
	}
}
?>