<?php

$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;

    //$exists==false
    if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `First_Name`, `Last_Name`, `username`, `password`, `dt`) VALUES ('$First_Name', '$Last_Name', '$username', '$hash', current_timestamp())";
        try{
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
           }
        }catch(Exception $e){
            $showError = "This email is already registered. Try to login or signup with other account";
        }

    }
    else{
        $showError = "Passwords do not match";
    }
}
  
?>





<?php
error_reporting(E_ERROR);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
if($result){
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('');
    $mail->addAddress($_POST["username"]);
    $mail->isHTML(true);
    $mail->Subject = "Website_Name";
    $mail->Body = "Thankyou for signup to our website! ".$_POST["First_Name"]." ".$_POST["Last_Name"]."<br/></br>
    <h3>Verify your email address to Login with the below give link</h3>
    <br/><br/><h2><a href='http://localhost/backend_project/login.php?token=dd564bb23ff923d729329dacdeb19374c5b'> Click Me </a></h2> ";
    // $mail->AddAttachment('main_style\images\thankyou.png');
    $mail->send();

    // echo

    // '<script>
    // alert("Sent Successfully");
    // document.location.href = "a.php";
    // </script>';

    echo
    '<script>
    console.log("sucessfully send");
    </script>';

}
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SignUp</title>
    <link rel="stylesheet" href=".\main_stlye\css\signup.css">


  </head>
  <body>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

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
        <div class="boxx">
            <h2>Sign Up</h2>
            <hr>
            <div class="infoo">
            <form action="signup.php" method="post">

                <input type="text" class="inputt" id="First_Name" name="First_Name" aria-describedby="emailHelp" placeholder="First name" Required>
                <input type="text" class="inputt" id="Last_Name" name="Last_Name" aria-describedby="emailHelp" placeholder="Last name" >
                <input type="email" class="inputt" id="username" name="username" aria-describedby="emailHelp" placeholder="Email Id" Required>
                <input type="password" class="inputt" id="password" name="password" placeholder="password" Required>
                <input type="password" class="inputt" id="cpassword" name="cpassword" placeholder="confirm password" Required>
                <button type="submit" class="submitbutton" name="send">SignUp</button>
                </form><br><br>
     <h5 class="discription" style="margin-left: 25px;" >Already have an account?</h5>
     <h5 class="login_button" style="margin-left: 25px; font-color: blue"><a href = "login.php">Login</a></h5>
            </div>
        </div>

    </div>

  </body>
</html>
