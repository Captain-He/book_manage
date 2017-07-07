<?php
	
	$online = @mysql_connect("localhost","root","");

	mysql_select_db("book",$online);

	mysql_query("set names utf8");

?>