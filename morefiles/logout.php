<?php
session_start();
unset($_SESSION['username']);
session_destroy();
echo '<script type="text/javascript">',
	 'alert("Successfully Logged out.");',
	 '</script>';
header( "refresh:0.5;url=login.php" );
?>
