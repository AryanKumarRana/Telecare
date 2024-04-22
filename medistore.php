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
    <link rel="stylesheet" href=".\main_stlye\css\medistore.css">
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
        <div class="medimain">
            <div class="medidesc">
                <h1>Medistore</h1>
            </div>
            <div class="mediciness">
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi1.png">
                    <h2 class="dramit immbost">Immunity boost</h2>
                    <p>₹100</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi2.png">
                    <h2 class="dramit">Sbl Sulphur Dilution 200 </h2>
                    <p>₹150</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi3.png">
                    <h2 class="dramit">Truebasics Omega 3 Fish Oil Capsules</h2>
                    <p>₹120</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img class="paraceta" src=".\main_stlye\images\medi4.png">
                    <h2 class="dramit">Paracetamol 650mg Strip Of 10 Tablets
                    </h2>
                    <p>₹230</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi5.png">
                    <h2 class="dramit">P 500mg Suspension                    </h2>
                    <p>₹130</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi6.png">
                    <h2 class="dramit">Himalaya Septilin Tablets</h2>
                    <p>₹120</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi7.png">
                    <h2 class="dramit">Himalaya Neem Tablets </h2>
                    <p>₹213</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
                <div class="mediblock">
                    <img src=".\main_stlye\images\medi8.png">
                    <h2 class="dramit">Himalaya Immusante Tablets</h2>
                    <p>₹98</p>
                    <button class="cartbutn" >Add to cart</button>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>