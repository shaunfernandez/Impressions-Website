<?php
ob_start();
require('db_connect.php');

if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['fullname']) and isset($_POST['college']) )
{
$username = $_POST['username'];
$college = $_POST['college'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$usernew = $username[0].$username[1].$username[2];
$confirm_code=md5(uniqid(rand()));

ini_set("SMTP", "smtp.gmail.com");
ini_set("sendmail_from", "rituraut05@gmail.com");


$query = "SELECT * FROM user_details WHERE username='$username'";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result)==1)
{
	echo'<script type="text/javascript">',
        'alert("Username already taken. Try another one");',
        '</script>';
	header( "refresh:0.5;url=register.php" );
	die();
}
// else{

// 	echo'<script type="text/javascript">',

//         'console.log("this username does not exist");',

//         '</script>';

// }
$query2 = "select count(email) from user_details where username like '$usernew%'";
$result2 = mysqli_query($connection, $query2);
$row2 = mysqli_fetch_row($result2);
$row2[0]++;
$usernew = strtoupper($usernew);
$impcode='IMP-'.$usernew.'-'.$row2[0];
$sql = "INSERT INTO user_details (username, full_name, email, impcode, college) VALUES ('$username','$fullname','$email', '$impcode', '$college')";

if (mysqli_query($connection, $sql)) 
{
echo'<script type="text/javascript">',

		'console.log("sending mail");',

		'</script>';
	$to=$email;
	$subject="Your Impressions ID is here";
	$header="from: rituraut05@gmail.com ";
	$message="Congratulations, you have successfully registered for impressions\r\n. Your ID for Coep Impressions 2017 is here \r\n";
	$message.= $impcode."\r\n";
	//$message.="http";
	$sentmail = mail($to,$subject,$message,$header);
	// echo'<script type="text/javascript">',

	// 	'console.log("'.$sentmail.'");',

	// 	'</script>';	
    header( "refresh:0.5;url =reg_success.php?id=".$impcode );
}
else
{
	echo'<script type="text/javascript">',
		'alert("Email address already registered");',
		'</script>';
    header( "refresh:0.5;url=register.php" );
}
}
ob_end_flush();	
?>
