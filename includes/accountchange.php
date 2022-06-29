<?php 

    include('session.php');
    include_once 'connect.php';

    $sql = "SELECT * FROM accounts WHERE id =:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch();

    $email = ($_POST["email"]);
    $wachtwoord = ($_POST["wachtwoord"]);
    $id = ($_POST["id"]);
    $stmt = $connect->prepare("UPDATE accounts SET email = :email, wachtwoord = :wachtwoord WHERE id = :id");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':wachtwoord', $wachtwoord);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: ../adminpage.php");
    
?>