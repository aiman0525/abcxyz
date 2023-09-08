<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8a60a558ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <style>
::placeholder {
  color: white;
}
    </style>

</head>

<body style="background-image: url(contact_bg.jpg);">
    <section class="contact">
        <div class="content">
            <h1>Contact us</h>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>furever@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>123454-555-666</p>
                    </div>
                </div>
            </div>
            <!--contactinfo ends-->
            <div class="contactForm">
                <form action="#" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required" placeholder="First name">

                    </div>

                    <div class="inputBox">
                        <input type="email" name="email" required="required" placeholder="Email">

                    </div>

                    <div class="inputBox">
                        <textarea name="message" required="required" placeholder="Type Your Message"></textarea>

                    </div>
                    <form action="#" method="POST">
                        <div class="inputBox">
                            <input type="submit" name="send" value="Send">
                        </div>
                    </form>
                </form>
            </div>

        </div>
    </section>
</body>

<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aiman2509b@gmail.com';                     //SMTP username
    $mail->Password   = 'zriuigmveokqsvts';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aiman2509b@gmail.com', 'Mailer');
    $mail->addAddress('aiman2509b@gmail.com', 'Joe User');     //Add a recipient
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact form';
    $mail->Body    = "Sender Name: $name <br> Sender Email: $email <br> Message: $message"  ;
    

    $mail->send();
    echo "<script>alert('message sent')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>

</html>