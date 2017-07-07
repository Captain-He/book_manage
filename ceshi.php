<?php
	header("Content-Type:text/html;charset=utf-8");
 	include("config.php");

	$zhongjian="SELECT * FROM book_message WHERE num=".$_GET['id'];

	$outcome= mysql_query($zhongjian,$online);

	echo "<table border=\"1\">";
	while($sql = mysql_fetch_array($outcome))
	{
		echo "<tr>";
		$ceshi = $sql['num'];
		echo "<td>".$sql['num']."</td>";
		echo "<td>".$sql['book_title']."</td>";
		echo "<td>".$sql['author']."</td>";
		echo "<td>".$sql['add_time']."</td>";
		echo "<td>".$sql['type']."</td>";
		echo "<td>".$sql['money']."元</td>";
		echo "<td>".$sql['number']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysql_close($online);
?>