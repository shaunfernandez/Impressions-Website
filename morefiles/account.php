<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
	echo'<script type="text/javascript">',
		'alert("Ivalid Session.");',
		'</script>';
	header("refresh:0;url=login.php" );
  }
?>
<head>
  <meta charset="utf-8">
  <title>SDS Book Account</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
body  
{
    background-image: url("Aqua_Blue.jpg");
	background-repeat:no-repeat;
    background-size:cover;
}
pre 
{
  background: white;
}
</style>
<body>
  <section class="container">
    <div class="login">
      <h1><u>Account Details</u></h1>
		<?php
		require('db_connect.php');
		$username=$_SESSION['username'];
		$query = "SELECT * FROM user_details WHERE username='$username'";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_array($result);
		$email=$row['email'];
		$fullname=$row['full_name'];
		// $password=$row['password'];
		$impcode=$row['impcode'];
		if($impcode==NULL)
			$impcode='N/A';
		
		?>
		<h4>Username:</h4>
		<p><?php echo $username?></p>
		<h4>Email:</h4>
		<p><?php echo $email; ?></p>
		<h4>Full name:</h4>
		<p><?php echo $fullname?></p>
		<h4>Favourite Songs:</h4>
		<pre><?php echo $impcode; ?></pre>
	  </form>
	  <form method="post" action="edit.php"> 
	  <p class="submit"><a href="edit.php">Edit Details</a></p>
	  <a href="home.php">Go back</a>
	  </form>
	</div>
	  

  </section>

</body>
</html>
