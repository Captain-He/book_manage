<?php
	session_start();
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(),'',time()-42000,'');
	}
	session_destroy();
	echo '<script type="text/javascript">window.location="land.php";</script>';
?>
