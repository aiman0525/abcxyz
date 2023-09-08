<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="head.css">
</head>

<body>
    <nav class="navBar">
        <div class="contain">
            <div class="logo">
                <h2 style="font-size: 25px;"><span style="color: #583a91">Furever</span> <span style="color: #6428d3">Friends</span></h2>
            </div>
            <div class="ulist">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact\contact.php">Contact</a></li>
                </ul>
            </div>
            
                <form action="addpet.php">
                    <input type="submit" name="addpet" value="Add pet" class="btn1">
                </form>
                <form action="logout.php">
                    <input type="submit" name="logout" value="Logout" class="btn">
                </form>
           
        </div>
    </nav>
</body>
</html>