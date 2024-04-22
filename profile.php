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
    <link rel="stylesheet" href=".\main_stlye\css\home.css">
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
        <div class="profile_back" style="background-color: #79bbea;">
            <div class="image">
                <img src=".\main_stlye\images\priyansh.jpeg">
            </div>
            <div class="info">
                <h1 class="info_name"> Priyansh Rana</h1>
                <h3> Mobile no. : <input type="text" placeholder="enter your phone no." style="height: 37px; width: 223px;"></h3>
                <h3> Address : <input type="text" placeholder="enter your Address" style="height: 37px; width: 223px;"></h3>
                <button type="submit" class="btn btn-primary" id="myButtton" style="margin-left: 42px;">Submit</button>
            </div>
        </div>
       

    </div>
</body>
</html>