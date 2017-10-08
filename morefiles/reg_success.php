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
<?php if(isset($_GET['id'])){ echo $user;}  echo "stupid";?>
</style>
<body>
  <section class="container">
    <div class="login">
      <h1>Registration Successful!</h1>
	  <p><big>Your Impressions ID is <?php if(isset($_GET['id'])){ echo $_GET['id'];} ;  ?> </big></p>		            

    </div>
  </section>

</body>
</html>
