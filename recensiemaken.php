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
</head>
<body>
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

            <input type="submit" value="Submit">
</body>
</html>