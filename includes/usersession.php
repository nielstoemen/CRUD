<?php
    session_start();

    include_once('connect.php');

    if(!isset($_SESSION["userID"])){
        header("Location: index.php");
    }
?>