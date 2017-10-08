<?php
  session_start();
   if(!isset($_SESSION['username']))
   {
    echo '<script type="text/javascript">',
		 'alert("Invalid Session.");',
		 '</script>';
	header("refresh:0;url=login.php" );
   }
  $username = $_SESSION['username'];
  		require('db_connect.php');
		$query = "SELECT * FROM user_details WHERE username='$username'";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_array($result);
		$email=$row['email'];
		$fullname=$row['full_name'];
		$impcode=$row['impcode'];
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>SDS Book</title>
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
      <h1>Edit account details (<?php echo $username;?>)</h1>
      <form method="post" action="edit_try.php">
        <p><input type="text" name="fullname" required="required" value="<?php echo $fullname; ?>" placeholder="Full Name"></p>
        <p><input type="text" name="email" required="required" value="<?php echo $email; ?>" placeholder="E-mail Address"></p>
        <p><input type="password" name="password" required="required" value="<?php echo $password; ?>" placeholder="Password"></p>
		<p><input type="password" name="password_confirm" required="required" value="<?php echo $password; ?>" placeholder="Confirm Password"></p>
		<p><small><b><u>impcode List</u></b></small></p>
		<p><textarea name="impcode" cols="26" value="" style="resize:none"><?php echo $impcode;?></textarea></p>
        <p class="submit"><input type="submit" name="commit" value="Edit"></p>
		<p><a href="account.php">  Cancel</a></p>
      </form> 
	</div>
	  

  </section>

</body>
</html>