<?php
$mysql_host = "localhost";
$mysql_username = "u998011828_imp";//set your username
$mysql_password = "rrrrrrrr";//set your password
$connection = mysqli_connect($mysql_host, $mysql_username, $mysql_password);

if(!$connection)
{
	echo "Failed to connect to database.\n";
}
$db = mysqli_select_db($connection, 'impressions');

if(!$db)
{
	echo "Failed to select database";
}


?>
