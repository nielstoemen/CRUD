<?php

include_once('connect.php');
   
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $connect->prepare("SELECT * FROM adminlogin WHERE adminname = :adminname AND password = :password");
    $stmt->bindParam(':adminname', $adminname);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();
          
    if($user) {
            // Starting session
            session_start();
            
            // Storing session data
            $_SESSION["admin"] = "admin";

            header("Location: ../adminpage.php");
    } else {
        header("Location: ../admin.php");
    }
}
?>