<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="lost.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8a60a558ed.js" crossorigin="anonymous"></script>
    <title>Lost & Found</title>
    <style>
        .button1 {

            background-color: #42247a;
            padding: 10px;
            width: 170px;
            height: 40px;
            border-radius: 10px;
            color: #ffffff;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
        }

        .button2 {

            background-color: transparent;
            padding: 10px;
            width: 170px;
            height: 40px;
            border-radius: 10px;
            color: black;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
            margin-bottom: 30px;
            margin-left: 400px;
            width: 30%
        }
    </style>
</head>

<body>
    
    <?php
    include("head.php");
    ?>
    
    <div class="content" style="margin-left: 20px; margin-top: 30px;">
        <div style=" justify-content: center; border-radius: 30px">
            <h1 style="margin-left: 20px;">We help reunite <br>lost pets with their <br>families.</h1>
            <a href="browser.php"><button class="button2" style="background-color: #42247a; color: #fff;">
                Browser Your Lost Pet
            </button></a>
        </div>

    </div>
    <div class="fluid">
        <div class="container">
            <div class="card">
                <div class="front">
                    <div class="content" style="text-align: center ;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 80px; margin-top: 50px; color:#42247a"></i>
                        <h1 style="color:#42247a">I Lost a Pet</h1>
                    </div>
                </div>
                <div class="back">

                    <div class="content" style="text-align: center ;">
                        <h2>You have lost your Pet.<br>We are here to help</h2>
                        <a href="lostf.php"><button class="button1" type="button">Report for your lost pet</button></a>
                    </div>
               
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="front">
                    <div class="content" style="text-align: center ;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 80px; margin-top: 50px; color:#42247a"></i>
                        <h1 style="color:#42247a">I Found a Pet</h1>
                    </div>
                </div>
                <div class="back">
                    <div class="content" style="text-align: center ;">
                        <h2>You have Found a Pet.<br>We can help</h2>
                        <a href="found.php"><button class="button1" type="button">Report a Found Pet</button></a>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>