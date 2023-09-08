<?php
$name = $_POST['$name'];
$email = $_POST['$email'];
$subject = $_POST['$subject'];
$message = $_POST['$message'];


//mail header

$mailheader = "From:" .$name ."<" .$email .">\r\n" ;

$recipient = "aiman09b@gmail.com";

mail($recipient, $subject, $message,$mailheader )
or die("Error");

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';


?>