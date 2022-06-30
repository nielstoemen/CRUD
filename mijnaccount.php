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

<?php
        if(!isset($_SESSION['userID'])) { 
            session_start(); 
        }

        if (isset($_SESSION['userID'])) {
            include('includes/usersession.php');
        }
    ?>

<div class="indexpage">
    <div class="navbar">
                <div class="headlogocont">  
                <a href="index.php">
                <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
                </div>

                <div class="navlinks">
                    <a href="index.php">HOME</a></li>
                    <a href="info.php">INFO</a></li>
                    <a href="reisen.php">REISEN</a></li>
                    <?php
                        

                        if (isset($_SESSION['userID'])) {
                            ?><a href="includes/logout.php">logout</a></li><?php
                        }else{
                            ?><a href="gebruikeslogin.php">login</a></li><?php
                        }
                    ?>
                </div>
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

            ?><div class="rijzenpakken"><?php

            foreach ($printen as $uitprinten){ ?>
                <div class="rijzensluiten"><?php
                echo '<img src="image/'.$uitprinten['foto'].'" height="50px" width="50px" alt="image error">'. ':' . ' ' . $uitprinten['titel']. ', ' . $uitprinten['beschrijving']. ', €' . $uitprinten['prijs']. ' Per persoon, ' . $uitprinten['pension']. ', ' . $uitprinten['sterren']. ' sterren';
                ?></div><?php
            }  
            ?></div><?php
        }

        

    ?>
    <footer class="footbar">
    <button class="logoutbutton"><a href="includes/logout.php">logout</a></button>
    </footer>
</body>
</html>