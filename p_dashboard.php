<?php
include("p_auth_session.php");
$insert = false;
require('db.php');
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
        <img src="Resources/Images/suraksha.png" width="300px" alt="">
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>

    <div class="welcome-user">
        <h1>WELCOME Personnel <?php echo $_SESSION['police_station_id']; ?></h1>
        <a href="logout.php"> <button type="button">Logout</button></a>
    </div>

    <div class="personal-details">
    <hr style="height:2px;border-width:0;color:rgb(113, 53, 53);background-color:rgb(113, 53, 53)">
        <h1>Personal Details in DB</h1>
        
    <table border = "1">
    <?php
        $police_station_id = $_SESSION['police_station_id'];
        $sqlRow = "SELECT * FROM `police_station` WHERE police_station_id= '$police_station_id'";
        $resultRow = mysqli_query($con,$sqlRow);
        if (mysqli_num_rows($resultRow) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($resultRow);
        }
          ?>
         <tr>
            <td class="s-cell">Police ID</td>
            <td><?php echo $row["police_station_id"];?></td>
         </tr>
         <tr>
            <td class="s-cell">Name</td>
            <td><?php echo $row["police_station_incharge"];?></td>
         </tr>
         <tr>
             <td class="s-cell">State:</td>
            <td><?php echo $row["police_station_state"];?></td>
         </tr>

      </table>
      <hr style="height:2px;border-width:0;color:rgb(113, 53, 53);background-color:rgb(113, 53, 53)">
    </div>
    <div class="dash-bottom">
    <hr style="height:2px;border-width:0;color:rgb(113, 53, 53);background-color:rgb(113, 53, 53)">
    </div>
    <div class="db-details">
    <h1>FIRs to be Reviewed by you</h1>
    <table border = "1">
         <tr>
         <td class="s-cell">State</td>
            <td class="s-cell">FIR ID</td>
            <td class="s-cell">Complainer Name</td>
            <td class="s-cell">Reffral Name</td>
            <td class="s-cell">Nature</td>
            <td class="s-cell">Time</td>
            <td class="s-cell">Incident Place</td>
            <td class="s-cell">Comment</td>
         </tr>
         <?php
         $con = mysqli_connect("localhost","root","","suraksha");
          $police_station_id = $_SESSION['police_station_id']; 
          $policeRow = "SELECT * FROM `police_station` WHERE `police_station_id` = '$police_station_id'";
          $policeQ = mysqli_query($con,$policeRow);
          $row = $policeQ->fetch_assoc();
          $fetchState = trim($row["police_station_state"]);
          $sqlRow = "SELECT * FROM `suraksha`.`fir` WHERE `state` = '$fetchState'";
          $resultRow = mysqli_query($con,$sqlRow);
        
        if (mysqli_num_rows($resultRow) > 0) {
         while($rowFIR = $resultRow->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$rowFIR["state"]."</td>";
            echo "<td>".$rowFIR["fir_id"]."</td>";
            echo "<td>".$rowFIR["complainer_name"]."</td>";
            echo "<td>".$rowFIR["reffral_name"]."</td>";
            echo "<td>".$rowFIR["nature"]."</td>";
            echo "<td>".$rowFIR["time"]."</td>";
            echo "<td>".$rowFIR["incident_place"]."</td>";
            echo "<td>".$rowFIR["public_consent"]."</td>";
            
         echo "</tr>";
    }
}
    ?>       
      </table>
      <hr style="height:2px;border-width:0;color:rgb(113, 53, 53);background-color:rgb(113, 53, 53)">    
    </div>
</div>
</body>

</html>