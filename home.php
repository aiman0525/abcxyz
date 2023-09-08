<?php
require_once 'connect.php';
#session section
session_start();
#echo "welcome  " . $_SESSION['e_mail'];
$userprofile = $_SESSION['e_mail'];
if ($userprofile == true) {

} else {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include("head.php");
    ?>

    <!-- search div -->
    <div class="s-container">
        <div class="search-container">
            <form action="#">
                <input type="text" name="search"  placeholder="Search By location">
                <button type="submit" class="">Search</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['search'])){
        $filtervalues = $_GET['search'];
        $query = "Select * FROM petform WHERE CONCAT(location) LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) >0 ){
            ?>
            <h1>Search Results</h1>
            <?php

            foreach($query_run as $row){
                ?>
                <main>
                <div class="card">
                <div class="image" >
                    <?php
                    echo "<img src=" . $row['std_img'] . ' ">';
                    ?>
                </div>

                <div class="caption">

                    <p class="pet_name"><b>Pet Name:</b>
                        <?php echo $row["pet_name"] ?>
                    </p>
                    <p class="pet_age"><b>Pet Age:</b>
                        <?php echo $row["pet_age"] ?>
                    </p>
                    <p class="location"><b>Location:</b>
                        <?php echo $row["location"] ?>
                    </p>
                </div>
                <div class="btn">
                    <a href="\abcxyz\request\request.php"><button class="Request">Request</button></a>
                    
                    <button type="button" data-toggle="modal"
                        data-target="#myModal<?php echo $row['id'] ?>">Details</button>
                </div>
            </div>
                </main>
<?php
            }
        }
        else{
            echo '<script>alert("No record found")</script>';
        }
    }
    ?>
    <!-- end search -->
    <!-- card div -->
    <main>
        <?php
        $sql = "Select * FROM petform";
        $all_pet = $conn->query($sql);
        $i = 1;
        while ($row = mysqli_fetch_assoc($all_pet)) {
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
                    <p class="pet_age"><b>Pet Age:</b>
                        <?php echo $row["pet_age"] ?>
                    </p>
                    <p class="location"><b>Location:</b>
                        <?php echo $row["location"] ?>
                    </p>
                </div>
                <div class="btn">
                    <a href="\abcxyz\request\request.php"><button class="Request">Request</button></a>
                    <button type="button" data-toggle="modal"
                        data-target="#myModal<?php echo $row['id'] ?>">Details</button>
                </div>
            </div>
            <!-- Modal section of Request -->

            <!-- End of Request modal section -->



            <!-- modal section of Details -->

            <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                <div class="bgModal">
                    <div class="modal-content">
                        <div class="image">
                            <?php
                            echo "<img src=" . $row['std_img'] . ' ">';
                            ?>
                        </div>
                        <p class="pet_name"><b>Name:</b>
                            <?php echo $row["pet_name"] ?>
                        </p>
                        <p class="pet_age"><b>Age:</b>
                            <?php echo $row["pet_age"] ?>
                        </p>
                        <p class="breed"><b>Breed:</b>
                            <?php echo $row["breed"] ?>
                        </p>
                        <p class="location"><b>Location:</b>
                            <?php echo $row["location"] ?>
                        </p>
                        <p class="email"><b>Email:</b>
                            <?php echo $row["email"] ?>
                        </p>
                        <p class="phone"><b>Phone:</b>
                            <?php echo $row["phone"] ?>
                        </p>
                        <p class="Description"><b>Description:</b>
                            <?php echo $row["description"] ?>
                        </p>
                        <form action="">
                            <button class="btn-close">Close</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <script>
                document.querySelector(".btn-close").addEventListener("click", function () {
                    document.querySelector(".bgModal").style.display = "none";
                });
            </script>

            <!--  end modal popup code........ -->

            <?php
            $i++;
        }
        ?>

    </main>
    <?php
    include("footer.php");
    ?>



</body>


</html>