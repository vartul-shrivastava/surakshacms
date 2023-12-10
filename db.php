<?php
    $con = mysqli_connect("localhost","root","","suraksha");
    if (mysqli_connect_errno()){
        echo "Suraksha module has been facing difficulties reaching MySQL " . mysqli_connect_error();
    }
?>