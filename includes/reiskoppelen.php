<?php 
    include('usersession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeken</title>
</head>
<body>
    <?php
        include('connect.php');
    
        $sql = "SELECT * FROM rijzen WHERE id =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        echo $result['id'];

        $reisid = $result['id'];
        $stmt = $connect->prepare("INSERT INTO boekingen(reisid, accountid) VALUES ($reisid, $_SESSION[userID])");
        $stmt->execute();

        header("Location: ../mijnaccount.php");
    ?>
</body>
</html>