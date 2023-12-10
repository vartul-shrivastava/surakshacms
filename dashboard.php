<?php
include("auth_session.php");
$insert = false;
require('db.php');
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
        <img src="Resources/Images/suraksha.png" width="300px" alt="">
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="welcome-user">
        <h1>WELCOME <?php echo $_SESSION['username']; ?>!</h1>
        <p>You are now  in user dashboard page.</p>
        <a href="logout.php"> <button type="button">Logout</button></a>
    </div>

    <div class="personal-details">
    <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
        <h1>Personal Details in DB</h1>
        
    <table border = "1">
    <?php
        $username = $_SESSION['username'];
        $sqlRow = "SELECT * FROM `userDetails` WHERE username= '$username'";
        $resultRow = mysqli_query($con,$sqlRow);
        if (mysqli_num_rows($resultRow) > 0) {
            $row = mysqli_fetch_assoc($resultRow);
        }
          ?>
         <tr>
            <td class="s-cell">User ID</td>
            <td><?php echo $row["user_id"];?></td>
         </tr>
         <tr>
            <td class="s-cell">Name</td>
            <td><?php echo $row["name"];?></td>
         </tr>
         <tr>
            <td class="s-cell">Father/Guardian Name:</td>
            <td><?php echo $row["f_name"];?></td>
         </tr>
         <tr>
             <td class="s-cell">Email:</td>
            <td><?php echo $row["email"];?></td>
         </tr>
         <tr>
            <td class="s-cell">Phone Number:</td>
            <td><?php echo $row["phone_num"];?></td>
         </tr>
         
         <tr>
            <td class="s-cell">Address:</td>
            <td><?php echo $row["address"];?></td>
         </tr>
         <tr>
             <td class="s-cell">State:</td>
            <td><?php echo $row["state"];?></td>
         </tr>
         <tr>
             <td class="s-cell">Postal Code:</td>
            <td><?php echo $row["postal"];?></td>
         </tr>
         
         
      </table>
      <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
    </div>
    <div class="dash-bottom">
    <a href="fir.php"><button type="button">File ONLINE FIR</button></a>
    <a href="piechart.php"><button type="button">View Crime Maps</button></a>
    <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
    </div>
    <div class="db-details">
    <h1>PREVIOUS FIRs FILED BY YOU</h1>
    <table border = "1">
         <tr>
            <td class="s-cell">FIR ID</td>
            <td class="s-cell">Complainer Name</td>
            <td class="s-cell">Reffral Name</td>
            <td class="s-cell">Nature</td>
            <td class="s-cell">Time</td>
            <td class="s-cell">Incident Place</td>
            <td class="s-cell">Public Consent</td>
            <td class="s-cell">State of Incident</td>
         </tr>
         <?php
          $username = $_SESSION['username'];
          $sqlRow = "SELECT * FROM `fir` WHERE username= '$username'";
          $resultRow = mysqli_query($con,$sqlRow);
          
        if (mysqli_num_rows($resultRow) > 0) {
         while($row = $resultRow->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["fir_id"]."</td>";
            echo "<td>".$row["complainer_name"]."</td>";
            echo "<td>".$row["reffral_name"]."</td>";
            echo "<td>".$row["nature"]."</td>";
            echo "<td>".$row["time"]."</td>";
            echo "<td>".$row["incident_place"]."</td>";
            echo "<td>".$row["public_consent"]."</td>";
            echo "<td>".$row["state"]."</td>";
         echo "</tr>";
    }
}
    ?>
      </table>
      <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
    </div>  
  </div>
</body>
</html>