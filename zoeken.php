<?php 
    include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reis</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        include('<includes/connect.php');


        $zoeken = ($_POST["zoeken"]);
        $stmt = $connect->prepare("SELECT * FROM rijzen WHERE titel = :zoeken");
        $stmt->bindParam(':zoeken', $zoeken);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $reizen) {
            echo '<img src="image/'.$reizen['foto'].'" height="50px" width="50px" alt="image error">'. ':' . ' ' . $reizen['titel']. ', ' . $reizen['beschrijving']. ', €' . $reizen['prijs']. ' per persoon, ' . $reizen['pension']. ', ' . $reizen['sterren']. ' sterren';
        }
    ?>
    <a href="inforeis.php?id=<?php echo $reizen['id']; ?>">Meer informatie</a>
</body>
</html>