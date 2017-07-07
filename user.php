<!DOCTYPE html>
<html>
<head>
	<title>用户信息查看</title>
	<meta charset="UTF-8" />
<style type="text/css">
.kq
{ 
	margin: 0px 0px 0px 190px;
}
</style>
</head>
<body>
<?php

	include("config.php");

	session_start();
    $account = $_SESSION['account'];
	$between="SELECT * FROM board WHERE user='".$_SESSION['account']."'";

	$outcome = mysql_query($between,$online);

	echo "<table border='1' align = \"center\"  width = \"960\" style=\"text-align: center;\"><caption><h1>我的留言板</h1></caption><tr><th>时间</th><th>留言内容</th></tr>";

	$var = 0;

	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr><td>".$sql['time']."</td><td align='left'>&nbsp;&nbsp;&nbsp;".$sql['message']."</td></tr>";
		if(isset($sql['time']))
			$var++;
	}
	if($var == 0)
		echo "<tr><td colspan='2' align='center'>没有留言信息</td></tr>";
	echo "</table>";



	$between="SELECT * FROM borrow WHERE user='".$_SESSION['account']."'";

	$outcome = mysql_query($between,$online);

	echo'<table align = "center" border = "1" width = "960" style="text-align: center;">';
	echo "<caption><h1>我借的书</h1>";
	echo "<h4>注*：如果超出借阅日期。每天扣除1元钱</h4>";
	echo "</caption>";
	echo "<tr>";
	echo "<td>书名</td>";
	echo "<td>借书时间</td>";
	echo "<td>应还时间</td>";
	echo "<td>借阅情况</td>";
	//echo "<td>类型</td>";
	//echo "<td>单价</td>";
	echo "<td>还书</td>";
	echo "</tr>";


	$w="SELECT jibie FROM user WHERE account='".$account."'";
	$ww=mysql_query($w,$online);
	$www=mysql_fetch_array($ww);
	$k= $www[0];
	$t=30;
	
	if($k=="a")
	{
		
		$t=90;
	}

	if($k=="b")
	{
	
		$t=60;
	}
	while($sql_w = mysql_fetch_array($outcome))
	{


		$between="SELECT * FROM book_message WHERE num='".$sql_w["book_id"]."' ";
		$outcome_t = mysql_query($between,$online);

		while($sql = mysql_fetch_array($outcome_t))
		{
			$date=date_create($sql_w['time']);
			date_add($date,date_interval_create_from_date_string("$t days"));
			$today=date("Y/m/d");
			$qk = '正常';
			$data = date_format($date,"Y-m-d");
			if(strtotime($today)>strtotime($data))
				{$qk = '已欠费';}
			$b_id=$sql_w["book_id"];
			echo "<tr>";
			echo "<td>".$sql['book_title']."</td>";
			echo "<td>".$sql_w['time']."</td>";
			echo "<td>".date_format($date,"Y-m-d")."</td>";
			echo "<td>".$qk."</td>";
			echo "<td class='color'>"."<a class=\"remand\" href="."\""."remand.php?id=".$b_id."&& book_title=".$sql['book_title']."\"".">&nbsp;还书&nbsp;</a></td>";
				$var++;
			//echo "<td>".$sql['type']."</td>";
			//echo "<td>".$sql['money']."元</td>";
			if(isset($sql['type'])&&isset($sql_w['time']))
			$var++;
		}
		
	}

	if($var == 0)
		echo "<tr><td colspan='5'>暂无借阅图书</td></tr>";

	echo "</table>";

	echo "<div class='kq'><br />"."<a href=\"index.php\">返回主页</a></div>";
	mysql_close($online);
?>
</body>
</html>