<?php
  session_start();
    if(!isset($_SESSION['username']))
	{
	$username=NULL;
	echo'<script type="text/javascript">',
		'alert("Invalid Session.");',
		'</script>';
	header("refresh:0;url=login.php" );
	}
    $username = $_SESSION['username'];
?>
<head>
  <meta charset="utf-8">
  <title>SDS Book Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
body  
{
    background-image: url("Aqua_Blue.jpg");
	background-repeat:no-repeat;
    background-size:cover;
}
</style>
<body>
  <section class="container">
    <div class="login">
      <h1>Hello <?php echo $username; ?>!</h1>
	  <h5>What would you like to do?</h5> 
	  <p class="submit">1. <a href="account.php">View and edit account details</a></p>
	  <p class="submit">2. <a href="search.php">Search for user</a></p>
	  <p class="submit">3. <a href="logout.php">Logout</a></p>
	</div>
	  

  </section>

</body>
</html>