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

<html>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="home.css">

  </head>
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
    <h1>Online FIRs Filed Based on the Category Chosen</h1>
    <canvas class="pieChart" id="myChart" style="width:100%;max-width:700px"></canvas>
    <hr style="height:2px;border-width:0;color:rgb(55, 13, 80);background-color:rgb(58, 18, 90)">
    <div class="other-maps">
        <a href="barchart.php"><button type="button">CLICK TO SEE USERS COMPOSITION WHO FILED FIRS BASED ON INDIAN STATE AND UTs</button></a>
        </div>
    </div>
    
  </body>
  <script>
var xValues = ["Seuxal Assault", "Robbery", "Status Dissemination", "Property Issue", "Accident", "Others"];
var yValues = 
    [<?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Sexual Assault'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
, 
    <?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Robbery'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
,
    <?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Status Dissemination'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
,
    <?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Property Issue'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
,
    <?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Accident'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
,
    <?php
    $sql = "SELECT count(nature) AS Nature FROM fir WHERE nature='Others'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["Nature"];
    ?>
];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#2b5562"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
});
</script>
</html>



