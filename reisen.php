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
</head>
<body>
<div class="indexpage">
    <div class="navbar">
                <div class="headlogocont">  
                <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
                </div>

                <div class="navlinks">
                    <a href="index.php">HOME</a></li>
                    <a href="CONTACT.php">CONTACT & SERVICE</a></li>
                    <a href="info.php">info</a></li>
                    <a href="gebruikeslogin.php">test contact 2.0</a></li>
                    <a href="contact.php">LOGIN</a></li>
                    
                </div>
            </div>
            <div class="reizpage">
                <div class="reizen">


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
                                       echo ''. $reizen['titel']. ', ' . $reizen['beschrijving']. ', ' . $reizen['prijs']. ', ' . $reizen['pension']. ', ' . $reizen['sterren'];
                                    echo "</div>";
                                 echo "</div>";
                                 


                                ?>
                        
                           

                            <!--<a href="detail.php?id=<?php echo $reizen['id']; ?>">Meer informatie</a> -->
                    <?php 
                } ?>
                
                </div>
                </div>
        </div>

</body>
</html>