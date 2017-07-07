<?php

	if(!isset($_POST['message']))
		echo '<script type="text/javascript"> alert("留言内容不能为空"); window.location='.'\''.'message.php'.'\''.' </script>';
	
	date_default_timezone_set("Asia/Shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");

	include("config.php");

	session_start();

	$sql="INSERT INTO board(user,time,message)VALUES('".$_SESSION['account']."','$time','$_POST[message]')";
	mysql_query($sql,$online);
	mysql_close($online);
	echo '<script type="text/javascript"> alert("留言成功"); window.location='.'\''.'index.php'.'\''.' </script>';
	exit();

?>