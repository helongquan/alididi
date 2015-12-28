<head>
	<style type="text/css">
			body{font-family:YouYuan;color: #a3a3a3}
			#tr1,#tr2,#tr3,#tr4,#tr5,#tr6,#tr7{background: #333333;font-size: 16px}
			tr>td:first-child{text-align: right;}
			button{text-align:left;}
			#tr8{background: #660066}
			fieldset{background: #eeeeee}
			.btn{padding: 5px auto;}
	</style>
</head>
<body>
<fieldset>
	<legend style="color:#333333"><strong>用户注册</strong></legend>
		<form method="post" action="checkregister.php">
			<table cellpadding="5px" cellspacing="1px" border="0" border-radius="5px">
				<tr id="tr1"><td>用户名：</td><td><input type="text" name="username"></td><td>由字母、数字、下划线组成</td></tr>
				<tr id="tr2"><td>设置密码：</td><td><input type="password" name="pwd"></td><td>8-16位，由空格之外的任意字符</td></tr>
				<tr id="tr3"><td>重复密码：</td><td><input type="password" name="repwd"></td><td>确认密码，两次输入要一致</td></tr>
				<tr id="tr4"><td>性别：</td><td><input type="radio" checked="checked" name="Sex">男&nbsp;&nbsp;&nbsp;<input type="radio" checked="checked" name="Sex">女</td><td>请选择你的性别，默认为男</td></tr>
				<tr id="tr5"><td>电子邮箱：</td><td><input type="email" name="email"></td><td>请正确输入电子邮箱格式</td></tr>
				<tr id="tr6"><td>手机号：</td><td><input type="int" name="mobile"></td><td>请输入常用手机号、固定电话</td></tr>
				<tr id="tr8">
					<td>头像选择：</td>
					<td>
						<div id="contains">
					        <select name="head_pic" id="change" onchange="check(this)" style="width=40">
					            <option value="pic1.jpg">美女</option>
					            <option value="pic2.jpg">靓仔</option>
					            <option value="pic3.jpg">大叔</option>
					            <option value="pic4.jpg">鲜肉</option>
					        </select>
					        <script>
					        function check(obj){
					            var src=obj.value;
					            $("showTime").src=src;
					        }
					        function $(obj){
					            return document.getElementById(obj);
					        }
					        </script>
					    </div>
					</td>
					<td><img id="showTime" src="pic1.jpg"></td>
				</tr>
				<tr id="tr7"><td colspan="3"><button type="submit">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset">取消</button></td></tr>
			</table>
		</form>
</fieldset>
</body>
