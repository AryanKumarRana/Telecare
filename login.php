<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $First_Name = $_POST["First_Name"];
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    //num means Account that user have
    if ($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['First_Name'] = $First_Name;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }
        }
       
    } 
    else{
        $showError = "Invalid Credentials";
    } 
}
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecare</title>
    <link rel="stylesheet" href=".\main_stlye\css\login.css">
</head>
<body id="myBtn" style="margin-top: -37px;">
    <br><br>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
            <h2>Login</h2>
            <hr>
            <div class="infoo">
            <form action="login.php" method="post">
                <input type="email" class="inputt" id="username" name="username" aria-describedby="emailHelp" placeholder="Email Id" Required>
                <input type="password" class="inputt" id="password" name="password" placeholder="Password" Required>
                <button type="submit" class="btn btn-primary submitbutton" id="myButton">Login</button>
                </form><br><br>
     <h5 class="discription" style="margin-left: 25px;">Don't have an account?</h5>
     <a href = "signup.php" style="margin-left: 25px;"><h5 class="signup_button" style="color: #007bff; text-decoration: none;">Sign up</h5></a>
            </div>
        </div>

    </div>
    
</body>
</html>

