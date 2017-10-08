<?php
  session_start();
    if(!isset($_SESSION['username']))
	{
	echo'<script type="text/javascript">',
		'alert("Not a valid session");',
		'</script>';
	header("refresh:0;url=login.php" );
	}
  $username = $_SESSION['username'];
?>
<head>
  <meta charset="utf-8">
  <title>SDS Book Search</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
body  {
    background-image: url("Aqua_Blue.jpg");
	background-repeat:no-repeat;
    background-size:cover;
}
pre {
  background: white;
}
</style>
<body>
  <section class="container">
    <div class="login">
      <h1><u>Account Details</u></h1>
		<?php
		require('db_connect.php');
		if(isset($_POST['user']) && !empty($_POST['user']))
		{
		$true=1;
		$user=$_POST['user'];
		$query = "SELECT * FROM user_details WHERE username='$user'";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_array($result);
		$email=$row['email'];
		$fullname=$row['full_name'];
		$impcode=$row['impcode'];
		if($impcode==NULL)
			$impcode='N/A';
		if(mysqli_num_rows($result)==0)
		{
	    echo '<script type="text/javascript">',
		'alert("User not found.");',
		'</script>';
			header( "refresh:0;url=search.php" );
		}
		}
		else
		{
			$user=null;
			$email=null;
			$fullname=null;
			$MIS=null;
			
			echo '<script type="text/javascript">',
			'alert("No Input given.");',
			'</script>';
			header( "refresh:0;url=search.php" );
		}
		?>
		<h4>Username:</h4>
		<p><?php echo $user;?></p>
		<h4>Email:</h4>
		<p><?php echo $email; ?></p>
		<h4>Full name:</h4>
		<p><?php echo $fullname;?></p>
		<h4>Favourite Songs:</h4>
		<pre><?php echo $impcode; ?></pre>
	  </form>
	  <form method="post" action="search.php"> 
	  <p class="submit"><a href="search.php">Search for another user</a></p>
	  <a href="home.php">Go back</a>
	  </form>
	</div>
	  

  </section>

</body>
</html>