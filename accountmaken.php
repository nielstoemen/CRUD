<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account aanmaken</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap');
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/icons.js"></script>
</head>
<body>
<div class="navbar">
            <div class="headlogocont">  
            <a href="index.php">
             <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
            </div>

            <div class="navlinks">
                <a href="contact.php">SERVICE EN CONTACT</a></li>
                <a href="info.php">INFO</a></li>
                <a href="reisen.php">REIZEN</a></li>
                <a href="gebruikeslogin.php">Login</a></li>
                
            </div>
        </div>

        <form action="includes/makeaccount.php" method="post">
            <p>
               <label for="email">Email:</label>
               <input type="text" name="email" id="email">
            </p>
            <p>
               <label for="wachtwoord">Wachtwoord:</label>
               <input type="text" name="wachtwoord" id="wachtwoord">
            </p>

            <input type="submit" value="Aanmaken">

</body>
</html>