<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addpet";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
    #echo "Connection establish";

}
else{
    echo "Connection Failed".mysqli_connect_error();
}
?>