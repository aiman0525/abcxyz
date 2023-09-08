<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lostpet";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
    echo "Connection establish";

}
else{
    echo "Connection Failed".mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Lost Pet</title>
    <link rel="stylesheet" href="lostf.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="title">
                Add Lost Pet
            </div>
            <div class="form">

                <div class="input_field">
                    <input type="text" class="input" name="pet_name" placeholder="Write Your Pet Name">
                </div>

                <div class="input_field">
                    <input type="text" class="input" name="ls_area" placeholder="Nearest Last Seen area">
                </div>

                <!-- category -->
                <div class="category">


                    <select name="category">
                        <option value="Not selected">--Please choose an option--</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Other">Others</option>
                    </select>
                </div>
                <div class="input_field">
                    <input type="address" class="input" name="address" placeholder="Address">
                </div>

                <div class="input_field">
                    <input type="email" class="input" name="email" placeholder="Email">
                </div>

                <div class="input_field">
                    <input type="Phone" class="input" name="phone" placeholder="Phone">
                </div>

                <!-- picture upload -->
                <div class="input_field">
                    <label>Choose a Picture</label>
                    <input type="file" name="uploadfile" style="width:100%;">
                </div>

                <div class="input_field">
                    <input type="submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>

</body>

</html>


<?php
if (isset($_POST['submit'])) {

    $tag = "Lost";
    $pet_name = $_POST['pet_name'];
    $ls_area = $_POST['ls_area'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

// image upload part

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);



// image part end

    $query = "INSERT INTO lost VALUES('$tag','$pet_name', '$ls_area', '$category', '$address', '$email', '$phone', '$folder')";
    $data = mysqli_query($conn, $query);

    if ($data) {

        echo "<script>alert('Successfully Added')</script>";

    } else {
        echo "<script>alert('Faild')</script>";

    }
}
#validation else 
else {
    echo "<script>alert('Please fill all the details')</script>";
}


?>