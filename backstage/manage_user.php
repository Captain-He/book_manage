
<html>
<head>
	<title>图书后台管理</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="CSS.css">
<style type="text/css">
td
{ 
	 height:25px;
}
</style>
</head>
<body>
<table align = "center" border = "1" width = "960" style="text-align: center;">
	<tr>
		<td colspan="4">欢迎你，管理员</td>
	</tr>
</table>
<?php
	include "page.cless.php";
	include("../config.php");
	$outcome= mysql_query("SELECT * FROM user",$online);
	$total = mysql_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from user {$page->limit}";
	$outcome = mysql_query($sql);
	echo '<table align = "center" border = "1" width = "960"  style="text-align: center;">';
	echo "<caption><h1>用户管理</h1></caption>";
	echo "<tr>";
	echo "<td>"."账号"."</td>";
	echo "<td>"."密码"."</td>";
	echo "<td>"."姓名"."</td>";
	echo "<td>"."用户级别"."</td>";
	//echo "<td>"."欠费信息"."</td>";
	//echo "<td>"."借阅数量"."</td>";
	echo "<td>"."操作"."</td>";
	echo "</tr>";
	while($sql = mysql_fetch_array($outcome))
	{
		if($sql['account']!='super')
		{
			if($sql['jibie']=='a')
				$h="教师";
			if($sql['jibie']=='b')
				$h="研究生";
			else $h="本科生";
		echo "<tr>";
		$id = $sql['account'];
		echo "<td>".$sql['account']."</td>";
		echo "<td>".$sql['password']."</td>";
		echo "<td>".$sql['nickname']."</td>";
		//echo "<td>".$sql['zhutime']."</td>";
		echo "<td>".$h."</td>";
		echo "<td>"."<a href="."\""."delete_user.php?id=".$id."& nickname=".$sql['nickname']."\"".">&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
		echo "<a href="."\""."xiu.php?id=".$id."& nickname=".$sql['nickname']."\"".">修改&nbsp;&nbsp;</a></td>";
		//echo "<a href="."\""."revise.php?id=".$id."& book_title=".$sql['book_title']."\"".">修改&nbsp;&nbsp;</a></td>";
		echo "</tr>";
	     }
	}
	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "<tr><td colspan = \"9\" align = \"center\"><a href=\"../index.php\">返回图书借阅界面</a></td></tr>";
	echo "</table>";
	mysql_close($online);
?>
</body>
</html>
