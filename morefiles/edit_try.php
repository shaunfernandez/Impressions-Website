<?php
session_start();
require('db_connect.php');
$username=$_SESSION['username'];
if(isset($_POST['email']) and isset($_POST['fullname']) )
{
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$impcode = $_POST['impcode'];
	$sql = "UPDATE user_details SET email='$email', full_name='$fullname', impcode='$impcode' WHERE username='$username'";
	if (mysqli_query($connection, $sql)) 
	{
		echo'<script type="text/javascript">',
			'alert("Successfully updated account details.");',
			'</script>';
		header( "refresh:0.5;url=account.php" );
	}	
	else
	{
		echo'<script type="text/javascript">',
			'alert("Invalid input. (Fields cannot be empty)");',
			'</script>';
		header( "refresh:0.25;url=edit.php" );
	}
}
// else
// {
// 	if($_POST["password"] != $_POST["password_confirm"])
// 	{
// 		echo '<script type="text/javascript">',
// 		'alert("Passwords do not match.");',
// 		'</script>';
// 	}
// 	else
// 	{
// 	echo '<script type="text/javascript">',
// 	 	 'alert("One or more fields empty.");',
// 		 '</script>';
// 	}
//     header( "refresh:0.25;url=edit.php" );   
// }	
?>