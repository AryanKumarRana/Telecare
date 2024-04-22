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



<?php
error_reporting(E_ERROR);
if($_SERVER["REQUEST_METHOD"] == "POST"){
$server = "localhost";
$username = "root";
$password = "";
$database = "kickoff_feedback";


$message = $_POST["message"];
$contact_no = $_POST["contact_no"];

$conn = mysqli_connect($server, $username, $password, $database);
$sql = "INSERT INTO `kickoff_feedback`.`feedback` (`message`, `contact_no`, `emoji`, `time`) VALUES ('$message', '$contact_no', '$emoji', current_timestamp());";
mysqli_query($conn, $sql);
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
        <div class="heading1">Telecare Connect</div>
            <div class="heading2">Bridging the Gap in Rural Healthcare Access</div>
        <div class="homemain">
            <img src=".\main_stlye\images\medicine.png">
            <div class="homedescriptionn">
                <h1>Our Best Doctors</h1>
                <p>Connect with the best team we have</p>
            </div>
            <div class="homedoctors">
                <div class="drblock">
                    <img src=".\main_stlye\images\dr1.png">
                    <h2>Dr. Amit Upadhyay</h2>
                    <p>Pediatrician & Neonatologist</p>
                </div>
                <div class="drblock">
                    <img src=".\main_stlye\images\dr2.png">
                    <h2>Dr. Amit Upadhyay</h2>
                    <p>Pediatrician & Neonatologist</p>
                </div>
                <div class="drblock">
                    <img src=".\main_stlye\images\dr3.png">
                    <h2>Dr. Amit Upadhyay</h2>
                    <p>Pediatrician & Neonatologist</p>
                </div>
            </div>
        </div>

    </div>
    <div id="footer" class="footer1" style="background-color:black;">
        <div class="links">
            <h2>Instagram</h2>
            <h2>facebook</h2>
            <h2>linkedin</h2>
            <h2>flipkart</h2>

            <br><br>
        </div>
        <hr class="hr">
        <div class="feedback1">
            <form action="welcome.php" method="post">
                <div class="feed-group">
                  <label for="message">Feedback</label>
                  <textarea cols="30" rows="10"  type="text" style="height: calc(5.5em + 1.75rem + 4px);" class="form-control" id="message" name="message" aria-describedby="emailHelp" placeholder="enter any other information here"></textarea>
                </div>
                <div class="feed-group1">
                  <label for="contact_no">Phone no.</label>
                  <input type="number" class="form-control" id="contact_no" name="contact_no" aria-describedby="emailHelp" placeholder="enter your phone number">
                </div>
                <button type="submit" class="btn btn-primary" id="myButtton">Submit</button>
  </form>
        </div>
        <div class="logo">
            <img src = ".\main_stlye\images\logo.png">
            <h2>Contact: +91 8218628287</h2>
        </div>

    </div>



</body>
</html>
