<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>SDS Book Login</title>
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
      <h1>Login to SDS Book</h1>
      <form method="post" action="auth.php">
        <p><input type="text" name="username" value="" required="required" placeholder="Username"></p>
        <p><input type="password" name="password" value="" required="required" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form> 
	  <form method="post" action="register.php"> 
	  <p class="submit">Don't have an account? <a href="register.php">Create new account</a></p>
	  </form>
	</div>
	  

  </section>

</body>
</html>