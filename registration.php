<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <style type="text/css">.disclaimer { display: none; }</style>
    <title>Registration - Suraksha</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {

    $name = $_POST['name'];
    $f_name = $_POST['f_name'];
    $phone_num = $_POST['phone_num'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO `suraksha`.`userDetails` (`name`,`f_name`, `email`, `phone_num`, `address`,  `state`, `postal`,`username`, `password`) VALUES ('$name','$f_name', '$email', '$phone_num', '$address', '$state', '$postal', '$username', '$password')";
    $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3 style='color:white'>Required fields are missing.</h3><br/>
                  <p style='color:white' class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Suraksha - Crime Management System + Online FIR Filer</title>
</head>
<body>
    <div class="header">
        <a href="index.php"><img src="Resources/Images/suraksha.png" width="300px" alt=""></a>
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="m-container">
        <h1>REGISTER @ SURAKSHA</h1> 
        <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
        <div class="left-container">
        <p>Register yourself and file online FIR and view the crime status</p>
    
            <form action="registration.php" method="post"  autocomplete="off">
                
                <label class="fieldLabel">ENTER FULL NAME</label>
                <input type="text" name="name" id="name" placeholder="Enter FULL NAME:">
                
                <label class="fieldLabel">ENTER FATHER/GUARDIAN NAME</label>
                <input type="text" name="f_name" id="f_name" placeholder="Enter FATHER OR GAURDIAN'S NAME">
                
                <label class="fieldLabel">Enter your email</label>
                <input type="email" name="email" id="email" placeholder="Email Address">
                
                <label class="fieldLabel">Phone Number</label>
                <input type="number" name="phone_num" id="phone_num" placeholder="Phone Number">

                <label class="fieldLabel">Address</label>
                <input type="text" name="address" id="address" placeholder="Address">
                
                <label class="fieldLabel">State</label>
                <datalist id="stateList">
                    <option value="Andhra Pradesh">
                    <option value="Arunachal Pradesh">
                    <option value="Assam">
                    <option value="Bihar">
                    <option value="Chattisgarh">
                    <option value="Goa">
                    <option value="Gujarat">
                    <option value="Haryana">
                    <option value="Himachal Pradesh">
                    <option value="Jharkhand">
                    <option value="Karnataka">
                    <option value="Kerela">
                    <option value="Madhya Pradesh">
                    <option value="Maharashtra">
                    <option value="Manipur">
                    <option value="Meghalaya">
                    <option value="Nagaland">
                    <option value="Odisha">
                    <option value="Punjab">
                    <option value="Rajasthan">
                    <option value="Tamil Nadu">
                    <option value="Telangana">
                    <option value="Tripura">
                    <option value="Uttar Pradesh">
                    <option value="Uttarakhand">
                    <option value="West Bengal">
                    <option value="Andaman and Nicobar Islands">
                    <option value="Chandigarh">
                    <option value="Dadra and Nagar Haveli and Daman and Diu">
                    <option value="Delhi">
                    <option value="Jammu And Kashmir">
                    <option value="Ladakh">
                    <option value="Lakshadweep">
                    <option value="Puducherry">     
        </datalist>
                <input type="text" list="stateList" name="state" id="state" placeholder="State">
                  
                <label class="fieldLabel">Postal</label>
                <input type="number" name="postal" id="postal" placeholder="Postal">
                
                <label class="fieldLabel">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                
                <label class="fieldLabel">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">

                <button class="btn">Submit</button>
            </form>
            
        </div>
        <div class="right-container">
        <a href="login.php"><button class="btn">Login</button></a>
        <div class="vl"></div>
            
        </div>
    </div>
    
</body>
</html>