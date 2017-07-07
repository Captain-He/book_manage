<?php
	
include("config.php");
session_start();

	$jii="SELECT * FROM user WHERE account ='". $_GET['id'] . "'";
	$jiii=mysql_query($jii,$online);
	$sql=mysql_fetch_array($jiii);
	

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
	<form method="POST" action="xiusql.php?account=<?php echo $sql['account']; ?>">
		<tr>
			<td>账号：</td>
			<td><input type="text" name="accountn"  value="<?php echo $sql['account']?>"/></td>
			
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password" /></td>
			
		</tr>
		<tr>
			<td>重复密码：</td>
			<td><input type="password" name="repassword"  /></td>
			
		</tr>
		<tr>
			<td>姓名：</td>
			<td><input type="text" name="nickname" value="<?php echo $sql['nickname']?>"/></td>
			
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
			<td class='ree' colspan="2"><a href="index.php" >返回登陆界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>