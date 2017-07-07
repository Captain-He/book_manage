<?php
	date_default_timezone_set("Asia/Shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");
?>
<html>
<head>
	<meta charset="UTF-8" />
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
	width: 200px;
}
</style>
</head>
<body>
	<table align="center" class="add_top">
	<form method="POST" action="into.php">
		<tr>
			<td>书名：</td>
			<td><input type="text" name="book_title" /></td>
		</tr>
		<tr>
			<td>作者：</td>
			<td><input type="text" name="author"/></td>
		</tr>
		<tr>
			<td>入库时间</td>
			<td><input type="text" name="add_time" value="<?php echo $time;  ?>" /></td>
		</tr>
		<tr>
			<td>类型：</td>
			<td>
			<select name="type">
			<option value="程序语言">程序语言</option>
			<option value="HTML系列">HTML系列</option>
			<option value="浏览器脚本">浏览器脚本</option>
			<option value="服务器脚本">服务器脚本</option>
			<option value="ASP.NET">ASP.NET</option>
			<option value="XML(扩展标记语言)">XML（扩展标记语言）</option>
			<option value="Web Services 系列">Web Services 系列</option>
			<option value="网站构建">网站构建</option>
			<option value="计算机结构基础">计算机结构基础</option>
			<option value="其它">其它</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>单价：</td>
			<td><input type="text" name="money"/></td>
		</tr>
		<tr>
			<td>书本数量：</td>
			<td><input type="text" name="number"/></td>
		</tr>
		<tr>
			<td><input style="width:50px;" type="submit" value="提交" /></td>
			<td><input style="width:50px;" type="reset" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>