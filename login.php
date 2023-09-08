<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/8a60a558ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="#" method="POST">
    <video autoplay muted loop id="login_bg">  
        <source src="Video Of A Tabby Cat.mp4" type="video/mp4">
      </video>
    <div class="container">
        <h1 style="border-bottom: 3px solid black;">Login</h1>
        <div class="box">
            <i class="fa fa-envelope" style="color: black;"></i>
            <input type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="box">
            <i class="fa fa-key" style="color: black;"></i>
            <input type="password" name="password" id="password" placeholder="Enter your Password">
        </div>
        <div>
            <input type="submit" name="login" value="Login" class="btn">
        </div>
        </form>
        <form action="signup.php">
        <button class="btn">Create account</button>
        </form>
    </div>
    
</body>
</html>


<?php
include("connection.php");
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pwd   = $_POST['password'];

    #query for matching the details from database
    $query = "SELECT * FROM register_form WHERE email = '$email' && password ='$pwd' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    //echo $total;
    if ($total == 1) 
    {
        $_SESSION['e_mail'] = $email;
   
        header('location:home.php');
    }
    else{
        //echo "login failed";
        echo '<script>alert("Wrong email or password")</script>';
    }

}

?>