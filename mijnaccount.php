<?php 
    include('includes/usersession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mijnaccount</title>
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
            <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
        </div>

        <div class="navlinks">
            <a href="contact.php">SERVICE EN CONTACT</a></li>
            <a href="info.php">INFO</a></li>
            <a href="reisen.php">REIZEN</a></li>
        </div>
    </div>

    <?php

        include_once 'includes/connect.php';

        $sql = "SELECT * FROM boekingen WHERE accountid = $_SESSION[userID]";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();
        ?>
        <p>Mijn reizen</p>
        <?php
        foreach ($result as $reizen){
            $sql = "SELECT * FROM rijzen WHERE id = $reizen[reisid]";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $printen = $stmt->fetchALL();

            foreach ($printen as $uitprinten){
                echo '<img src="image/'.$uitprinten['foto'].'" height="50px" width="50px" alt="image error">'. ':' . ' ' . $uitprinten['titel']. ', ' . $uitprinten['beschrijving']. ', ' . $uitprinten['prijs']. ', ' . $uitprinten['pension']. ', ' . $uitprinten['sterren'];
            }  
        }

        

    ?>
    <footer>
    <button class="logoutbutton"><a href="includes/logout.php">logout</a></button>
    </footer>
</body>
</html>