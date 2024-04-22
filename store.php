<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con) {
  die("error".mysqli_connect_error());
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecare</title>
    <link rel="stylesheet" href=".\main_stlye\css\store.css">
</head>
<body>
    <div class="container">
        <div class = "headerr">
            <div class="headingg">
                <h3 class="white"><a href="welcome.php" style="color: black;text-decoration: none;">Home</a></h3>
                <h3><a href="medistore.php" style="color: black;text-decoration: none;">Medistore</a></h3>
                <h3><a href="appointment.php" style="color: black;text-decoration: none;">Appointment</a></h3>
                <h3><a href="profile.php" style="color: black;text-decoration: none;">Profile</a></h3>
                <h3><a class="active" href="#footer" style="color: black;text-decoration: none;">Contact Us</a></h3>
            </div>
            <div class="subheadingg">
                <h3><a href="store.php" style="color: black;text-decoration: none;">Cart</a></h3>
            </div>
        </div>
        <div class="container1">
            <h2 class="medicart">Medi-Cart</h2>
            <div class="itembox2">
            <div class="itembox">
                <img src=".\main_stlye\images\medi3.png" width="200px">
                <div class="itembox1">
                <h3>Truebasics Omega 3 Fish Oil Capsules</h3>
                <p>₹120</p>
                <h5> Quantity 1</h5>

                </div>
</div>

                <div class="itembox">
                    <img src=".\main_stlye\images\medi7.png" width="200px">
                    <div class="itembox1">
                    <h3>Himalaya Immusante Tablets</h3>
                    <p>₹426</p>
                    <h5> Quantity 2</h5>
                    </div>
            </div>
                
        </div>
        <button  class="buybuttn"> Buy</button>

    </div>
    
</body>
</html>