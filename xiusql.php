<?php 
	include "config.php";
	session_start();

							include "config.php";
							$sql="UPDATE user SET account='$_POST[accountn]',password='$_POST[password]',nickname='$_POST[nickname]',class='$_POST[class]',jibie='$_POST[ji]'
							WHERE account ='$_GET[account]';";
						
							$y=mysql_query($sql,$online);
						
							if($y)
								echo '<script type="text/javascript"> alert("用户信息修改成功"); window.location='.'\''.'index.php'.'\''.'</script>';

							mysql_close($online);


							
						
?>