<?php 
    include('includes/usersession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recensie schrijven</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="navbar">
            <div class="headlogocont">  
            <a href="index.php">
                <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
            </a>
            </div>

            <div class="navlinks">
                <a href="index.php">HOME</a></li>
                <a href="contact.php">CONTACT & SERVICE</a></li>
                <a href="reisen.php">REISEN</a></li>
                <a href="gebruikeslogin.php">Login</a></li>
                
            </div>
        </div>
    </div>
    <div class="recensie">
    <?php
        include_once 'includes/connect.php';

        $sql = "SELECT * FROM rijzen WHERE id =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();
    ?>

    <form action="includes/recensieschrijven.php" method="post">
            <p>
               <label for="recensie">Recensie</label>
               <input type="text" name="recensie" id="recensie">
            </p>

            <p>
               <label hidden for="id">id</label>
               <input hidden type="text" name="id" id="id" value="<?php echo $_GET['id'];?>">
            </p>

            <input type="submit" value="Recensie verzenden">
    </div>
</body>
</html>