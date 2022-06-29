<?php

    include('connect.php');
    include('usersession.php');

    $recensie = ($_POST["recensie"]);
    $id = ($_POST["id"]);
    $stmt = $connect->prepare("INSERT INTO recensies(reisid, recensie, userid) VALUES ( :id, :recensie, $_SESSION[userID])");
    $stmt->bindParam(':recensie', $recensie);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: ../reisen.php");
?>