	<?php 
	include("../config.php");

  $mysql="DELETE FROM user WHERE account = '". $_GET['id'] ."'AND nickname ='". $_GET['user'] . "'";

	mysql_query($mysql,$online);



	mysql_select_db("book", $online);

	$mysql="DELETE FROM borrow WHERE user = ".$_GET['id'];

	mysql_query($mysql,$online);



	mysql_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location="manage_user.php" </script>';
?>