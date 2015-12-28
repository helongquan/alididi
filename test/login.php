<form action="checklogin.php" method="post">
	<table>
		<tr>
			<td colspan="2"><font color="red">带*的项目为必填项</font></td>
		</tr>
		<tr>
			<td>用户</td>
			<td><input type="email" name="email" placeholder="Enter email"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="password" placeholder="Enter password"></td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" id="btn1">登录</button>&nbsp;&nbsp;&nbsp;<button type="reset" id="btn2">取消</button>
			</td>
		</tr>
	</table>
</form>