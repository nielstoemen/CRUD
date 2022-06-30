<?php 
    include('includes/usersession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reizen</title>
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
                    </div>

                    <div class="navlinks">
                        <a href="index.php">HOME</a></li>
                        <a href="CONTACT.php">CONTACT & SERVICE</a></li>
                        <a href="info.php">info</a></li>
                        <a href="gebruikeslogin.php">Login</a></li>
                        
                    </div>
    </div>
    <?php

    include_once 'includes/connect.php';

    $sql = "SELECT * FROM rijzen WHERE id =:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch();
    ?>

    <div class="inforeis">

    <?php
        echo '<img src="image/'.$result['foto'].'" height="150" width="150" alt="image error">'. ':' . ' ' . $result['titel'] . ' ' . $result['beschrijving'] . ' €' . $result['prijs'] . ' per persoon ' . $result['pension'] . ' ' . $result['sterren']. ' sterren';                  
    ?>

        <a href="includes/reiskoppelen.php?id=<?php echo $result['id']; ?>"> Boeken</a>

    <div class="recensie">

    <p>reviews:</p>
    <a href="recensiemaken.php?id=<?php echo $result['id']; ?>">Schrijf een recensie</a>
    <?php

        $sql = "SELECT * FROM recensies WHERE reisid =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetchAll();
        ?>
        <table>
            <?php
            foreach ($result as $recensie) 
            { ?>
                <tr>
                    <th>

                    <?php
                        $sql = "SELECT * FROM accounts WHERE id = $_SESSION[userID]";
                        $stmt = $connect->prepare($sql);
                        $stmt->execute();
                        $idje = $stmt->fetch();

                        echo $idje['email']. ': ';
                    ?>

                    <?php
                        echo $recensie['recensie'];
                    ?>
                    </th> 
                </tr>
            <?php 
        } ?>
        </table>

    </div>

    </div>
    

</body>
</html>