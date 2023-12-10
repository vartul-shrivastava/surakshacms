<?php
include("auth_session.php");
$insert = false;
require('db.php');

if(isset($_POST['complainer_name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database failed due to" .mysqli_connect_error());
    }

    $username = $_SESSION['username'];
    $complainer_name = $_POST['complainer_name'];
    $reffral_name = $_POST['reffral_name'];
    $nature = $_POST['nature'];
    $time = $_POST['time'];
    $incident_place = $_POST['incident_place'];
    $public_consent = $_POST['public_consent'];
    $state = $_POST['state'];
    $sql = "INSERT INTO `suraksha`.`fir` (`username`,`complainer_name`, `reffral_name`, `nature`, `time`, `incident_place`, `public_consent`,`state`) VALUES ('$username','$complainer_name', '$reffral_name', '$nature', '$time', '$incident_place', '$public_consent', '$state')";

    if(mysqli_query($con, $sql)){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= <div class="m-container">
    <link rel="stylesheet" href="home.css">
<body>
<div class="header">
        <img src="Resources/Images/suraksha.png" width="300px" alt="">
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="welcome-user">
        <h1>WELCOME <?php echo $_SESSION['username']; ?>!</h1>
        <p>You are proceeding to file ONLINE FIR.</p>
        <a href="dashboard.php"><button type="button">Dashboard</button></a>
        <a href="logout.php"><button type="button">Logout</button></a>
    </div>
    <div class="m-container">
<h1>Online FIR Filer</h1>
<hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
<div class="left-container">
    <p>Welcome to the Online FIR Filer. Enter your details with best of your intellectual faculties. Using this portal for amusement comes under legal offence.</p>

    <form action="fir.php" method="post"  autocomplete="on">
    <label class="fieldLabel">FILER NAME</label>
        <input type="text" name="complainer_name" id="complainer_name" placeholder="Enter Complainer Name">
        <label class="fieldLabel">ASSERTED NAME (PERSON/ORGANIZATION/INSTITUTION)</label>
        <input type="text" name="reffral_name" id="reffral_name" placeholder="Enter Asserted Name">
        <label class="fieldLabel">PLACE WHERE CRIME TOOK PLACE</label>
        <input type="text" name="incident_place" id="incident_place" placeholder="Crime Place">
        <label class="fieldLabel">TIME WHEN CRIME TOOK PLACE</label>
        <input type="time" name="time" id="time" placeholder="Crime Time">
        <label class="fieldLabel">TYPE OF CRIME(CHOOSE OTHERS IF DOES NOT SUIT ANY CATEGORY):</label>
        <input list="crime" name="nature" id="nature">
        <datalist id="crime">
        <option value="Sexual Assault">
        <option value="Robbery">
        <option value="Status Dissemination">
        <option value="Property Issue">
        <option value="Accident">
        <option value="Others">
        </datalist>
        <label class="fieldLabel">State</label>
                <input list="stateList" name="state" id="state">
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
        <textarea name="public_consent" id="public_consent" cols="20" rows="5" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        
    </form>
</div>
<div class="right-container">
<?php
if($insert == true)
    echo "<p class='submitMsg'>YOUR FIR HAS BEEN FILED. YOU WILL BE CONTACTED VIA AUTHORIZED PERSONNEL.</p>";
?>
    <div class="vl"></div>
</div>
</div>
    
</body>
</html>
