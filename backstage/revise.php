<?php
	include("../config.php");


	$outcome= mysql_query("SELECT * FROM book_message WHERE  book_title ='". $_GET['book_title'] . "'",$online);

	while($sql = mysql_fetch_array($outcome))
	{
		if(($sql['num']==$_GET['id'])&&($sql['book_title']==$_GET['book_title']));
			break;
	}
?>
<html>
<head>
	<title>信息修改</title>
	<meta charset="utf-8">
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
	<form method="POST" action="into_again.php?bo_ti=<?php echo $sql['book_title']; ?>&&nm=<?php echo $sql['num']; ?>">
		<tr>
			<td>ID：</td>
			<td><input type="text" name="num"  value="<?php echo $sql['num'];  ?>"/></td>
		</tr>
		<tr>
			<td>书名：</td>
			<td><input type="text" name="book_title"  value="<?php echo $sql['book_title'];  ?>"/></td>
		</tr>
		<tr>
			<td>作者：</td>
			<td><input type="text" name="author" value="<?php echo $sql['author'];  ?>" /></td>
		</tr>
		<tr>
			<td>入库时间</td>
			<td><input type="text" name="add_time" value="<?php echo $sql['add_time'];  ?>" /></td>
		</tr>
		<tr>
			<td>类型：</td>
			<td>
			<select name="type" >
			<option value="程序语言" <?php if($sql['type']=="程序语言") echo 'selected="selected"'; ?> >程序语言</option>
			<option value="HTML系列" <?php if($sql['type']=="HTML系列") echo 'selected="selected"'; ?> >HTML系列</option>
			<option value="浏览器脚本" <?php if($sql['type']=="浏览器脚本") echo 'selected="selected"'; ?> >浏览器脚本</option>
			<option value="服务器脚本" <?php if($sql['type']=="服务器脚本") echo 'selected="selected"'; ?> >服务器脚本</option>
			<option value="ASP.NET" <?php if($sql['type']=="ASP.NET") echo 'selected="selected"'; ?> >ASP.NET</option>
			<option value="XML(扩展标记语言)" <?php if($sql['type']=="XML(扩展标记语言)") echo 'selected="selected"'; ?> >XML（扩展标记语言）</option>
			<option value="Web Services 系列" <?php if($sql['type']=="Web Services 系列") echo 'selected="selected"'; ?> >Web Services 系列</option>
			<option value="网站构建" <?php if($sql['type']=="网站构建") echo 'selected="selected"'; ?> >网站构建</option>
			<option value="计算机结构基础" <?php if($sql['type']=="计算机结构基础") echo 'selected="selected"'; ?> >计算机结构基础</option>
			<option value="其它" <?php if($sql['type']=="其它") echo 'selected="selected"'; ?> >其它</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>单价：</td>
			<td><input type="text" name="money" value="<?php echo $sql['money'];  ?>"/></td>
		</tr>
		<tr>
			<td>剩余图书数量：</td>
			<td><input type="text" name="number" value="<?php echo $sql['number']; ?>"/></td>
		</tr>
		<tr>
			<td>借阅图书数量：</td>
			<td><input type="text" name="sy" value="<?php echo $sql['sy'];  mysql_close($online); ?>"/></td>
		</tr>
		<tr>
			<td><input type="submit" style="width:50px;" value="提交" /></td>
			<td><input type="reset" style="width:50px;" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>