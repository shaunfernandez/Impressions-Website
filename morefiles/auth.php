<?php
require('db_connect.php');

if(isset($_POST['username']) and !empty($_POST['username']))
{
$username = $_POST['username'];
$query = "SELECT * FROM user_details WHERE username='$username'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
	if($count == 1)
	{
		session_start();
		$_SESSION['username'] = $_POST['username'];
		header( "refresh:0.75;url=home.php" );
	}
	else
	{
		echo'<script type="text/javascript">',
		    'alert("Account with supplied credentials does not exist.");',
		    '</script>';
	    header( "refresh:0.5;url=login.php" );
	}
}
else
{
		echo'<script type="text/javascript">',
		    'alert("One or more fields empty.");',
		    '</script>';
		header( "refresh:0.5;url=login.php" );
}
?>