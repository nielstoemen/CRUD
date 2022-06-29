<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/icons.js"></script>
    <script src="js/formvalidatie.js"></script>
    <script src="js/trein.js"></script>
</head>
<body>
<div class="navbar">
                    <div class="headlogocont">  
                    
                    <img id="train" src="image/sjorsziek1.jpg">
  <script>
    train.onclick = function() {
      let start = Date.now();

      let timer = setInterval(function() {
        let timePassed = Date.now() - start;

        train.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
  </script>
                    </div>

                    <div class="navlinks">
                        <a href="index.php">HOME</a></li>
                        <a href="CONTACT.php">CONTACT & SERVICE</a></li>
                        <a href="info.php">info</a></li>
                        <a href="gebruikeslogin.php">Login</a></li>
                        
                    </div>
    </div>


<div class="logbackround">
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
  </div>
</body>
</html>