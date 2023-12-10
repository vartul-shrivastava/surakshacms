<?php
    session_start();
    if(!isset($_SESSION["police_station_id"])) {
        $state = $_REQUEST["state"];
        header("Location: p_login.php");
        exit();
    }
?>