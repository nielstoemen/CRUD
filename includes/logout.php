<?php
    // Destroying session
    include('session.php');
    if(isset($_SESSION["admin"])){
        unset($_SESSION["admin"]);
    }
    session_destroy();

    header("Location: ../admin.php");
?>