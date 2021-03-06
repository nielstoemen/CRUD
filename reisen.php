<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reizen</title>
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
                    <a href="contact.php">CONTACT & SERVICE</a></li>
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

            <div class="reisadverblok3">
                 <div class="reisadvertentie3">
                    <p>Voordat u gaat boeken, maak zeker dat u bent ingelogd. Zonder account kunt u geen reis boeken</p>
                  </div>
            </div>

            <div class="reizpage">
                <div class="reizen">

       

        <form action="zoeken.php" method="post">
            <p>
               <label for="zoeken">Zoeken:</label>
               <input type="text" name="zoeken" id="zoeken">

            <input type="submit" value="zoeken">

        <?php
                    include_once 'includes/connect.php';

                    $sql = "SELECT * FROM rijzen";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchALL();
                    ?>

                    <?php
                    foreach ($result as $reizen) 
                    { ?>
                            <?php 
                                echo "<div class ='reizenblok'>";
                                    echo "<div class = 'reizenfotoblok'>";
                                        echo  '<img src="image/'.$reizen['foto'].'" height="100%" width="100%" alt="image error">';
                                        
                                 echo "</div>";
                                    echo "<div class = 'reizeninfoblok'>";
                                       echo ''. $reizen['titel']. ', ' . $reizen['beschrijving']. ', ???' . $reizen['prijs']. ' Per persoon, ' . $reizen['pension']. ', ' . $reizen['sterren']. ' sterren';
                                    echo "</div>";
                                 echo "</div>";
                                 


                                ?>
                                <a href="inforeis.php?id=<?php echo $reizen['id']; ?>">Meer informatie</a>
                           

                            <!--<a href="detail.php?id=<?php echo $reizen['id']; ?>">Meer informatie</a> -->
                    <?php 
                } ?>
                
                </div>
                </div>
        </div>

        <div class="footbar">
            <div class="navlinks2">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <p>all rights reseverd fredbear travels</p>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="mijnaccount.php" class="fa fa-pintrest">reis</a>
         
            </div>
        </div>

</body>
</html>