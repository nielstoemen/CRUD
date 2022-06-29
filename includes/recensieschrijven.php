<?php

    include('connect.php');
    include('usersession.php');

    $recensie = ($_POST["recensie"]);
    $stmt = $connect->prepare("INSERT INTO recensies(reisid, recensie, userid) VALUES ( :id, :recensie, $_SESSION[userID])");
    $stmt->bindParam(':recensie', $recensie);
    $stmt->bindParam(':id', $recensie);
    $stmt->execute();
?>