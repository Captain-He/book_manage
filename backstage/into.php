<?php
	$fp = fopen("book_num.txt","r");
	$num = fgets($fp,10);
	$num++;
	fclose($fp);
	$fp = fopen("book_num.txt","w");
	fputs($fp,$num);
	fclose($fp);

	include("../config.php");

	$sql="INSERT INTO book_message (book_title,author,add_time,type,money,number,num)
	VALUES ('$_POST[book_title]','$_POST[author]','$_POST[add_time]','$_POST[type]','$_POST[money]','$_POST[number]','$num')";


	mysql_query($sql,$online);

	echo '<script type="text/javascript"> alert("图书添加成功"); window.location='.'\''.'manage.php'.'\''.'</script>';
?>