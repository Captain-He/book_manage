<?php
	
	include("../config.php");

	$outcome="DELETE FROM book_message WHERE  book_title ='".$_GET['bo_ti']."' AND num = '".$_GET['nm']."'";
	mysql_query($outcome,$online);

	$sql="INSERT INTO book_message (book_title,author,add_time,type,money,number,num,sy)
	VALUES ('$_POST[book_title]','$_POST[author]','$_POST[add_time]','$_POST[type]','$_POST[money]','$_POST[number]','$_POST[num]','$_POST[sy]')";

	mysql_query($sql,$online);

	echo '<script type="text/javascript"> alert("图书信息修改成功"); window.location=\'manage.php'.'\''.'</script>';
?>