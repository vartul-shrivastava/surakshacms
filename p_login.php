<?php
    require('db.php');
    session_start();

    if (isset($_POST['police_station_id'])) {
        $police_station_id  = stripslashes($_REQUEST['police_station_id']);    // removes backslashes
        $police_station_id  = mysqli_real_escape_string($con, $police_station_id);
        $police_station_password = stripslashes($_REQUEST['police_station_password']);
        $police_station_password = mysqli_real_escape_string($con, $police_station_password);
        // Check user is exist in the database
        $query = "SELECT * FROM `police_station` WHERE `police_station_id`='$police_station_id' AND `police_station_password`='$police_station_password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['police_station_id'] = $police_station_id;
            header("Location: p_dashboard.php");
        } else {
            echo $result;
            echo "<div class='form'>
                  <h3 style='color:rgb(237, 222, 247); font-family:consolas'>Incorrect Username/police_station_password</h3><br/>
                  <p style='color:white; font-family:consolas' class='link'>Click here to <a href='plogin.php'>Login</a> again.</p>
                  </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="police.css">
    <title>Suraksha - Crime Management System + Online FIR Filer</title>
</head>
<body>
    <div class="header">
        <a href="index.php"><img src="Resources/Images/suraksha.png" width="300px" alt=""></a>
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="m-container">
        <h1>Police Station Login @ Suraksha</h1>
        <hr style="height:2px;border-width:0;color:rgb(237, 222, 247);;background-color:rgb(237, 222, 247)">
        <div class="left-container">
        <p>PS are already registered. You need not to register.</p>
            <form action="p_login.php" method="post" autocomplete="off">
            <label class="fieldLabel">Police Station ID (PSID)</label>
                <input type="text" name="police_station_id" id="police_station_id" placeholder="Enter PSID">
                <label class="fieldLabel">police station password</label>
                <input type="password" name="police_station_password" id="police_station_password" placeholder="Password">
                <a href=""></a><button class="btn">Submit</button>
            </form>
        </div>
        <div class="right-container">
        <div class="vl"></div> 
        </div>
    </div>
    
</body>