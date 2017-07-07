<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta chatset="UTF-8" />
<style type="text/css">
td
{ 
	height: 25px;
}
.re
{ 
	font-size: 20px;
	margin: 10px 0px 0px 40px;
}
</style>
</head>
<body>
<?php
	include("../config.php");

	$outcome= mysql_query("SELECT * FROM borrow",$online);

	echo'<table align = "center" border = "1" width = "1260" style="text-align: center;">';
	echo "<caption><h1>用户借阅信息</h1></caption>";
	
	echo "<tr>";
	echo "<td>借书账户</td>";
	echo "<td>借书时间</td>";
	echo "<td>ID</td>";
	echo "<td>书名</td>";
	echo "<td>作者</td>";
	echo "<td>入库时间</td>";
	echo "<td>类型</td>";
	echo "<td>单价</td>";
	echo "<td>剩余数量</td>";
	echo "<td>总借阅数量</td>";
	echo "<td>本次借阅数量</td>";
	echo "</tr>";

	$var = 0;

	while($sql_w = mysql_fetch_array($outcome))
	{


		$between="SELECT * FROM book_message WHERE num='".$sql_w["book_id"]."' ";
		$outcome_t = mysql_query($between,$online);

		
		if(isset($sql_w['user']))
				$var++;

		while($sql = mysql_fetch_array($outcome_t))
		{
			echo "<tr>";
			echo "<td>".$sql_w['user']."</td>";	
			echo "<td>".$sql_w['time']."</td>";
			echo "<td>".$sql['num']."</td>";
			echo "<td>".$sql['book_title']."</td>";
			echo "<td>".$sql['author']."</td>";
			echo "<td>".$sql['add_time']."</td>";
			echo "<td>".$sql['type']."</td>";
			echo "<td>".$sql['money']."元</td>";
			echo "<td>".$sql['number']."</td>";
			echo "<td>".$sql['sy']."</td>";
			echo "<td>1</td></tr>";
			
		}

	}
	if($var == 0)
		echo "<tr><td colspan='10'>没有图书借阅信息</td></tr>";
	echo "</table>";
	echo '<div class="re"><a href="manage.php">返回主管理界面</a></div>';
	mysql_close($online);
?>
</body>
</html>