<?php 
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert.php</title>
</head>
<body>
    <?php

    $titel = ($_POST["titel"]);
    $prijs = ($_POST["prijs"]);
    $beschrijving = ($_POST["beschrijving"]);
    $datum = ($_POST["datum"]);
    $pension = ($_POST["pension"]);
    $sterren = ($_POST["sterren"]);
    $image = ($_POST["image"]);
    $stmt = $connect->prepare("INSERT INTO rijzen (foto, beschrijving, prijs, datum, pension, sterren, titel) VALUES (:image, :beschrijving, :prijs, :datum, :pension, :sterren, :titel)");
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':datum', $datum);
    $stmt->bindParam(':pension', $pension);
    $stmt->bindParam(':sterren', $sterren);
    $stmt->bindParam(':titel', $titel);
    $stmt->execute();

    header("Location: ../adminpage.php");

    ?>
</body>
</html>