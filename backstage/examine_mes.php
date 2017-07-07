<!DOCTYPE html>
<html>
<head>
	<title>留言板查看</title>
	<meta charset="UTF-8" />
<style type="text/css">
td
{ 
	height: 25px;
}
.ree
{ 
	font-size: 20px;
	margin: 10px 0px 0px 190px;
}
</style>
</head>
<body>
<?php
	include("../config.php");

	$outcome = mysql_query("SELECT * FROM board");

	echo "<table border='1' align = \"center\" width='960'><tr><th>账号</th><th>留言内容</th><th>时间</th></tr>";

	$var = 0;

	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr><td align='center'>".$sql['user']."</td><td>&nbsp;&nbsp;&nbsp;".$sql['message']."</td><td align='center'>".$sql['time']."</td></tr>";
		if(isset($sql['user']))
			$var++;
	}

	if($var == 0)
		echo "<tr><td colspan='3' align='center'>没有留言信息</td></tr>";

	echo "</table>";
	echo "<div class='ree'><a href=\"manage.php\">返回主管理界面</a></div>";
	mysql_close($online);
?>
</body>
</html>