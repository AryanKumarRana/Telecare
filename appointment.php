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
    <link rel="stylesheet" href=".\main_stlye\css\appointment.css">
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
   
    
        <div class="main-conta">
            <h1 class="main-head">Doctor @ Telecare</h1>
            <div class="dr1-conta">
                <img src=".\main_stlye\images\dr1.png"  alt="dr1" class="logo">
                <div class="content1"><h1>Dr. Amit Upadhya</h1>
                    <p>Pediatrician and Neogolist</p></div>
                    <button type="button">appoint now</button>
            </div>
            
           
            <div class="dr2-conta">
                <img src=".\main_stlye\images\dr2.png"  alt="dr1" class="logo">
                <div class="content1"><h1>Dr. Arjun Singh</h1>
                    <p>Maxillofocial Surgeon</p></div>
                    <button type="button" class="button1">appoint now</button>
            </div>
            

            <div class="dr3-conta">
                <img src=".\main_stlye\images\dr3.png"  alt="dr1" class="logo">
                <div class="content1"><h1>Dr. Vishwa Bembi</h1>
                    <p>Physician</p></div>
                    <button type="button" >appoint now</button>
            </div>

            <div class="dr3-conta">
                <img src=".\main_stlye\images\dr4.png"  alt="dr1" class="logo">
                <div class="content1"><h1>Dr. Renu Upadhyay</h1>
                    <p>Otorhinlaryngologist</p></div>
                    <button type="button" >appoint now</button>
            </div>
            
            
        </div>
    </div>
       
    
</body>
</html>