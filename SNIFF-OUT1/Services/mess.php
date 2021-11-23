<?php
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["location"];
    $stype = $_POST["genre"];




    session_start();
    $_SESSION['location'] = $location;
    $_SESSION['stype']  = $stype;
    header("location:../Services/hdisplay1.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="css/hostel.css">
    <title>Mess Search</title>
</head>

<body>
    <img class="backg" src="images/5.png">
    <img class="logo" src="images/logo.png">
    <div class="container">
        <div class='login-container'>
            <form action="mess.php" method="POST">
                <img class="avatar" src="images/undraw_cooking_lyxy.svg">
                <h2>Explore Food Around you</h2>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h5>Location</h5>
                        <input class="input" type="text" name="location">
                    </div>
                </div>
                <!-- <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h5>Price</h5>
                        <input class="input" type="text">
                    </div>
                </div> -->
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-hamburger"></i>
                    </div>
                    <div class="dropdown">
                        <h5>Food Choice</h5>

                        <select class="input">
                            <div class="dropdown-content">
                                <option value="">
                                </option>
                                <option value="BMW" name="stype">Vegetarian
                                </option>
                                <option value="Mercedes" name="stype">Composite
                                </option>


                            </div>
                        </select>
                    </div>

                </div>
                <input class="btn" type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/man.js"></script>
</body>

</html>