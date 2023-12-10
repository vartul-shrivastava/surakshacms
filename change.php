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
}
?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<head><link rel="stylesheet" href="home.css">
<style type="text/css">.disclaimer { display: none; }</style></head>
<body>
<body>

  <div class="header">
        <img src="Resources/Images/suraksha.png" width="300px" alt="">
        <p>COMPLETE CRIME MANAGEMENT SYSTEM</p>
    </div>
    <div class="welcome-user">
        <h1>WELCOME <?php echo $_SESSION['username']; ?>!</h1>
        <p>STATISTICS OF FIR FILED VIZ. UPON CRIME COMMITTED</p>
        <a href="logout.php"><button type="button">Logout</button></a>
        <a href="dashboard.php"><button type="button">Dashboard</button></a>
    </div>

    ?>
    <div class="chart-container">
    <h1>Suraksha Users on the basis of State & UTs</h1>
    <canvas class="pieChart" id="myChart" style="width:100%;max-width:1200px"></canvas>
    <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
    <div class="other-maps">
        <a href="piechart.php"><button type="button">CLICK TO SEE Distribution of ONLINE FIRs based on the Crime Category</button></a>
        </div>
    </div>
  </body>

<script>
var yValues = [
  <?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Andhra Pradesh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Arunachal Pradesh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Assam'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Bihar'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
   $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Chattisgarh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Goa'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Gujarat'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Haryana'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Himachal Pradesh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Jharkhand'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Karnataka'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Kerela'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Madhya Pradesh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Maharashtra'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Manipur'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Meghalaya'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Nagaland'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Odisha'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Punjab'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Rajasthan'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Tamil Nadu'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Tripura'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Uttar Pradesh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Uttrakhand'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'West Bengal'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Andaman and Nicobar Islands'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo
    $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Chandigarh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Dadra and Nagar Haveli and Daman and Diu'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Delhi'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Jammu And Kashmir'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Ladakh'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Lakshadweep'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
,
<?php
    $sql = "SELECT count(state) AS state FROM `id18760405_suraksha`.`userdetails` WHERE state = 'Puducherry'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["state"];
    ?>
];

var xValues = ["Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jharkhand","Karnataka","Kerela","MP","Maharashtra","Manipur","Meghalaya","Nagaland","Odisha","Punjab","Rajasthan","TN","Tripura","UP","WB","Andaman - Nicobar","Chandigarh","Daman and Diu","Delhi","J&K","Ladakh","Lakshadweep","Puducherry"];

var barColors = "rgb(174, 142, 196)";

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
  }
});
</script>

</body>
</html>
