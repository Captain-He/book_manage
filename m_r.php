<html>
<head>
<?php
	$nameErr = $passwordErr = $repasswordErr = $twopasswordErr = $nicknameErr = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		    if (empty($_POST["account"])) 
		    	$nameErr = "账号是必填的";

		    if (empty($_POST["nickname"])) 
		    	$nameErr = "昵称是必填的";

		  	if (empty($_POST["password"]))
		  	 	$passwordErr = "密码是必填的";
			else 
		  		if (empty($_POST["repassword"]))
		  		$repasswordErr = "重复密码是必填的";
		  	else 
		  		if ($_POST["password"]!=$_POST["repassword"])
	    	    $twopasswordErr = "两次输入的密码不一样，请重新输入";
	    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		if (!empty($_POST["account"]))
			if (!empty($_POST["password"]))
				if (!empty($_POST["repassword"]))
					if ($_POST["password"]==$_POST["repassword"])
						{
							inclued("config.php");

							$sql="INSERT INTO user (account,password,nickname,class)
							VALUES ('$_POST[account]','$_POST[password]','$_POST[nickname]','$_POST[class]')";
							
							mysql_query($sql,$online);

							mysql_close($online);

							echo "可以退出了！";
							echo '<script type="text/javascript"> alert("管理员账号创建成功");</script>';
							exit();
						}
?>
<meta charset="UTF-8"/>
</head>
<body>
	<table>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<tr>
			<td>账号：</td><?php echo $nameErr; ?>
			<td><input type="text" name="account" /></td>
			<td><?php echo $nameErr; ?></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password"/></td>
			<td><?php echo $passwordErr; ?></td>
		</tr>
		<tr>
			<td>重复密码：</td>
			<td><input type="password" name="repassword"/></td>
			<td><?php echo $repasswordErr; ?></td>
			<td><?php echo $twopasswordErr; ?></td>
		</tr>
		<tr>
			<td>昵称</td>
			<td><input type="text" name="nickname" /></td>
			<td><?php echo $nicknameErr; ?></td>
		</tr>
		<input type="hidden" value="1" name="class">
		<tr>
			<td><input type="submit" value="提交" /></td>
			<td><input type="reset" value="重置" /></td>
		</tr>		
	</form>
	</table>
</body>
</html>