
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `userDetails` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3 style='color:white; font-family:consolas'>Incorrect Username/password.</h3><br/>
                  <p style='color:white; font-family:consolas' class='link'>Click here to <a href='login.php'>Login</a> again.</p>
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
    <link rel="stylesheet" href="home.css">
    <title>Suraksha - Crime Management System + Online FIR Filer</title>
</head>
<body>
    <div class="header">
        <a href="index.php"><img src="Resources/Images/suraksha.png" width="300px" alt=""></a>
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="m-container">
        <h1>LOGIN @ SURAKSHA</h1>
        <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
        <div class="left-container">
        <p>Register yourself and file online FIR and view the crime status</p>
            <form action="login.php" method="post"  autocomplete="off">
            <label class="fieldLabel">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label class="fieldLabel">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <a href=""></a><button class="btn">Submit</button>
            </form>
            <a href="registration.php"><button class="btn">Register</button></a>
            <a href="p_login.php"><button class="btn">Personnel Login</button></a>
        </div>
        <div class="right-container">
        <div class="vl"></div> 
        </div>
    </div>
    
</body>