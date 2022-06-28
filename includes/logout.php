<?php
    // Destroying session
    include('session.php');
    if(isset($_SESSION["admin"])){
        unset($_SESSION["admin"]);
    }
    if(isset($_SESSION["userID"])){
        unset($_SESSION["userID"]);
    }
    session_destroy();

    header("Location: ../index.php");
?>