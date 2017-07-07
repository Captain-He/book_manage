<?php
	
	include("../config.php");

	$mysql="DELETE FROM book_message WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";

	mysql_query($mysql,$online);



	mysql_select_db("book", $online);

	$mysql="DELETE FROM borrow WHERE book_id = ".$_GET['id'];

	mysql_query($mysql,$online);



	mysql_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location='.'\''.'manage.php'.'\''.'</script>';

?>