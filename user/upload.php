<?php
header('Content-type:text/html;charset=utf-8');//设置编码格式
include_once('../../wp-content/themes/dux/pages/conn.php');//引入外部数据库连接文件
if(isset($_POST['submit'])){
	$filename=$_POST['filename'];
	$filedata_name=$_FILES['filedata']['name'];
	$filedata_size=$_FILES['filedata']['size'];
	$filedata_type=$_FILES['filedata']['type'];
	$filedata=$_FILES['filedata']['tmp_name'];
	$data=addslashes(fread(fopen($filedata, "r"), filesize($filedata)));
	$sql="insert into images (description,bin_data,filename,filesize,filetype) values ('$filename','$data','$filedata_name','$filedata_size','$filedata_type')";
	$result=mysql_query($sql);
	echo "<script>alert('上传成功');location='uploads.php';</script>";
}
?>