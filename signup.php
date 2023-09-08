<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <script src="https://kit.fontawesome.com/8a60a558ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <video autoplay muted loop id="login_bg">
        <source src="Video Of A Tabby Cat.mp4" type="video/mp4">
    </video>
    <form action="#" method="POST">
        <div class="container">
            <h1 style="border-bottom: 3px solid black;">Sign up</h1>
            <div class="box">
                <i class="fa fa-user" style="color: black;"></i>
                <input type="text" name="user_name" id="name" placeholder="User name" required>
            </div>
            <div class="box">
                <i class="fa fa-envelope" style="color: black;"></i>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="box">
                <i class="fa fa-key" style="color: black;"></i>
                <input type="password" name="password" id="password" placeholder="Enter your Password" required>
            </div>
            <div>
                <input type="submit" value="Sign up" class="btn" name="register">
            </div>
            <div>
            </div>
    </form>
    <form action="login.php">
        <button class="btn">Login</button>
    </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['register'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    #validation 
    if ($user_name != "" && $email != "" && $password != "") {
        $query = "INSERT INTO register_form VALUES('$user_name' , '$email' , '$password')";
        $data = mysqli_query($conn, $query);

        if ($data) {

            echo '<script>alert("Your account has been sucessfully created")</script>';

        } else {
            echo "failed";

        }
    }
    #validation else 
    else {
        echo "<script>alert('Please fill all the details')</script>";
    }
}



?>