<form method="post" action="upload.php" enctype="multipart/form-data">
	请用户选择需要上传的文件：<br/>
	文件名：<input type="text" name="filename" size="8">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><br/>
	选择文件：<input type="file" name="filedata" size="15">
	<input type="submit" value="上传到数据库" name="submit" class="input"/>
</form>