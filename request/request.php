<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="request.css">
    <title>Request</title>
</head>

<body>

    <!-- Request form -->
    <div class="container">

        <form action="" method="POST">
            <h3>REQUEST TO ADOPT</h3>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="email" id="email" name="email" placeholder="Your Email address" required>
            <input type="tel" id="phone" name="phone" name="phone" placeholder="123-45-678" required>
            <textarea name="message" id="message" rows="4" placeholder="Why you Want to Adopt?"></textarea>
            <form action="" method="POST">
                <div>
                    <input class="btn" type="submit" name="send" value="Send"
                        style="padding: 15px;background: #42247a;color: #fff;font-size: 18px;border:0;outline: none;cursor: pointer;width: 150px;margin: 20px auto 0;border-radius: 30px;">
                </div>
            </form>
        </form>

    </div>

</body>
<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    //Load Composer's autoloader
    require 'PHPMailer\Exception.php';
    require 'PHPMailer\PHPMailer.php';
    require 'PHPMailer\SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'aiman2509b@gmail.com'; //SMTP username
        $mail->Password = 'zriuigmveokqsvts'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress("aiman2509b@gmail.com", "owner"); //Add a recipient


        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Request for Adoption';
        $mail->Body = "Sender Name: $name <br> Sender Email: $email <br> Message: $message";


        $mail->send();
        echo "<script>alert('Request sent')</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

</html>