<?php
  session_start();
   if(!isset($_SESSION['username']))
   {
	echo'<script type="text/javascript">',
		'alert("User not found.");',
		'</script>';
	header("refresh:0;url=login.php" );
   }
?>
<!DOCTYPE html>
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
</style>
<body>
  <section class="container">
    <div class="login">
      <h1>User Search</h1>
      <form method="post" action="result.php">
        <p><input type="text" name="user" value="" required="required" placeholder="Search for user"></p>
        <p class="submit"><input type="submit" name="commit" value="Search"></p>
		</form>
	  <p><a href="home.php">Go back</a></p>
	</div>
	  

  </section>

</body>
</html>