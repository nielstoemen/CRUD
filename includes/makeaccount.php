<?php

include('connect.php');

    $email = ($_POST["email"]);
    $wachtwoord = ($_POST["wachtwoord"]);
    $stmt = $connect->prepare("INSERT INTO accounts(email, wachtwoord) VALUES (:email, :wachtwoord)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':wachtwoord', $wachtwoord);
    $stmt->execute();

    header("Location: ../gebruikeslogin.php");

?>