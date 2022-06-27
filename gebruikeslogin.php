<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/icons.js"></script>
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form action="includes/userlogin.php" method="post">
    <div class="user-box">
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Email" name="email" value="">
    </div>
    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="wachtwoord" name="wachtwoord" value="">
    </div>

    <input class="buttonius" type="submit"
        name="login" value="Inloggen">
    <a href="accountmaken.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      geen account? maak er een
    </a>
  </form>
</div>
</body>
</html>