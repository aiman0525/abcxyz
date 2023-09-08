<?php include("connect.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addpet.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="title">
                Add your pet
            </div>
            

            <div class="form">

                <div class="input_field">
                    <label>Pet's Name</label>
                    <input type="text" class="input" name="pet_name">
                </div>

                <div class="input_field">
                    <label>Pet Age</label>
                    <input type="text" class="input" name="pet_age">
                </div>

                <!-- category -->
                <div class="category">
                    <label for="pet-select">Category</label>

                    <select name="category">
                        <option value="notselected">--Please choose an option--</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Other">Others</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>Breed</label>
                    <input type="text" class="input" name="breed">
                </div>

                <div class="input_field">
                    <label>Location</label>
                    <input type="address" class="input" name="location">
                </div>

                <div class="input_field">
                    <label>Email</label>
                    <input type="email" class="input" name="email">
                </div>

                <div class="input_field">
                    <label>Phone</label>
                    <input type="Phone" class="input" name="phone">
                </div>
                <div class="input_field">
                    <label for="Description">Description</label>

                    <textarea id="Description"  class="textarea" name="description">
            </textarea>
                </div>
                <!-- picture upload -->
                <div class="input_field">
                    <label>Choose a Picture</label>
                <input type="file" name="uploadfile" style= "width:100%;">
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

    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $category = $_POST['category'];
    $breed = $_POST['breed'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

// image upload part

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);



// image part end

    $query = "INSERT INTO petform VALUES('id','$pet_name', '$pet_age', '$category', '$breed', '$location', '$email', '$phone', '$description', '$folder')";
    $data = mysqli_query($conn, $query);

    if ($data) {

        header('location:home.php');

    } else {
        echo "failed";

    }
}
#validation else 
else {
    echo "<script>alert('Please fill all the details')</script>";
}


?>