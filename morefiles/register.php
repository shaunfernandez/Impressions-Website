<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>SDS Book Registration</title>
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
      <h1>Register new account</h1>
      <form method="post" action="reg.php">
        <p><input type="text" name="fullname" required="required" value="" placeholder="Full Name"></p>
        <p><input type="text" name="username" required="required" value="" placeholder="Username">
        <p><input type="email" name="email" value="" required="required" placeholder="E-mail Address"></p>
        <p><input type="text" name="college" required="required" value=""placeholder="College"></p>
        <p class="submit"><input type="submit" name="commit" value="Register"></p>
		<p><b><small>All fields are compulsory</small></b></p>
		<a href="login.php">Back</a>
      </form> 
	</div>
	  

  </section>

</body>
</html>