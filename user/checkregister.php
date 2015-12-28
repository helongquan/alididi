<?php
header('Content-type:text/html;charset=utf-8');//设置编码格式
include_once('conn.php');//引入外部数据库连接文件
if($_POST['username']){
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$repwd=$_POST['repwd'];
	$Sex=$_POST['Sex'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	if($pwd != $repwd){
		echo "<script>alert('两次输入的密码不一致,请重新输入');location='register.php';</script>";
	}
	$sql="select * from user where username='.$username.'";
	mysql_query($sql);
	$num=mysql_affected_rows();//这里用来计算被影响的行数
	if ($num>0) {
		echo "<script>alert('当前用户已被注册,请重新输入！');location='register.php';</script>";
	}else{
		$addtime=time();//添加时间戳，记录插入成功时的时间
		$insert="insert into user values ('".$username."','".$pwd."','".$repwd."','".$Sex."','".$email."','".$mobile."',".$addtime."')";
		mysql_query($insert);
		$num=mysql_affected_rows();
		if($num>0){
			echo "<script>alert('注册成功!');location='register.php';</script>";
		}else{
			echo "<script>alert('用户注册失败！');</script>";
		}
	}
}
?>