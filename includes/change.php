<?php
    include_once 'connect.php';
?>

    <?php

    $titel = ($_POST["titel"]);
    $prijs = ($_POST["prijs"]);
    $beschrijving = ($_POST["beschrijving"]);
    $datum = ($_POST["datum"]);
    $pension = ($_POST["pension"]);
    $sterren = ($_POST["sterren"]);
    $image = ($_POST["image"]);
    $id = ($_POST["id"]);
    $stmt = $connect->prepare("UPDATE rijzen SET id=:id, foto=:image, beschrijving=:beschrijving, prijs=:prijs, datum=:datum, pension=:pension, sterren=:sterren, titel=:titel WHERE id=:id");
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':datum', $datum);
    $stmt->bindParam(':pension', $pension);
    $stmt->bindParam(':sterren', $sterren);
    $stmt->bindParam(':titel', $titel);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: ../adminpage.php");

    ?>