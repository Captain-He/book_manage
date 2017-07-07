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
							
							include "config.php";
							$sql="INSERT INTO user (account,password,nickname,class,jibie)
							VALUES ('$_POST[account]','$_POST[password]','$_POST[nickname]','$_POST[class]','$_POST[ji]')";
							
							mysql_query($sql,$online);

							mysql_close($online);

							echo '<script type="text/javascript"> alert("普通用户创建成功"); window.location='.'\''.'land.php'.'\''.'</script>';
						}
?>
<html>
<head>
<meta charset="UTF-8"/>
<style type="text/css">
.add_top
{ 
	margin-top: 100px;
}
td
{ 
	width: 90px;
	height: 30px;
	font-size: 18px;
}
body
{ 
	
}
input
{
	width: 150px;
}
</style>
</head>
<body>
	<table align="center" class="add_top">
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
			<td>姓名：</td>
			<td><input type="text" name="nickname" /></td>
			<td><?php echo $nicknameErr; ?></td>
		</tr>
		<tr>
		<td>类别：</td>
		<td>
			<select name= "ji">
					<option value ="c">本科生</option>
				  	<option value ="b">研究生</option>
				 	<option value="a">教师</option>
			</select>
		</td>
		</tr>
		</tr>
		<input type="hidden" value="0" name="class">
		<tr>
			<td><input style="width:50px;" type="submit" value="提交" /></td>
			<td><input style="width:50px;" type="reset" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="land.php" >返回登陆界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>