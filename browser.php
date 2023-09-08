<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lostpet";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    #echo "Connection establish";

} else {
    echo "Connection Failed" . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser your pet</title>
    <link rel="stylesheet" href="browser.css">
    <style>
       
.tag-lost {
    color: #fff;
    background-color: #42247a;
    font-size: 16px;
    font-family: Roboto,sans-serif;
    padding: 0.2rem 1.2rem;
    border-radius: 6px;
    width: 90%;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
    display: inline-block;
    align-items: center;
   
}
    </style>
</head>

<body>
    <?php
    include("head.php");
    ?>
    <hr>
     <h1>Featured Post</h1>

    <!-- card div -->
    <main>
        <?php
        $sql = "Select * FROM lost";
        $al_pet = $conn->query($sql);
        $i = 1;
        while ($row = mysqli_fetch_assoc($al_pet)) {
            ?>

            <!--html part-->
            
                    <div class="card">
                        <!--<h2>aaaaaaaa</h2><br><hr>-->
                        <div class="image">
                            <?php
                            echo "<img src=" . $row['std_img'] . ' ">';
                            ?>
                        </div>

                        <div class="caption">

                            <p class="pet_name"><b>Pet Name:</b>
                                <?php echo $row["pet_name"] ?>
                            </p>
                            <p class="ls_area"><b>Last seen Location</b>
                                <?php echo $row["ls_area"] ?>
                            </p>
                            <p class="email"><b>Email:</b>
                                <?php echo $row["email"] ?>   
                            </p>
                            <p class="phone"><b>Phone:</b>
                                <?php echo $row["phone"] ?>   
                            </p>
                            <p class="address"><b>Address:</b>
                                <?php echo $row["address"] ?>   
                            </p>
                            <span class="tag-lost"><?php echo $row["tag"] ?> <?php echo $row["category"] ?> </span>
                        </div>
                    </div>
                
            <?php
            $i++;
        }
        ?>

    </main>