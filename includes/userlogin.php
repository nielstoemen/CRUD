<?php

include_once('connect.php');
   
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $email = test_input($_POST["email"]);
    $wachtwoord = test_input($_POST["wachtwoord"]);
    $stmt = $connect->prepare("SELECT * FROM accounts WHERE email = :email AND wachtwoord = :wachtwoord");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':wachtwoord', $wachtwoord);
    $stmt->execute();
    $user = $stmt->fetch();
          
    if($user) {
            // Starting session
            session_start();
            
            // Storing session data
            $_SESSION["user"] = "user";

            header("Location: ../index.php");
    } else {
        header("Location: ../gebruikeslogin.php");
    }
}
?>