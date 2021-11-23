<?php
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $location = $_POST["location"];
    $stype = $_POST["genre"];




    session_start();
    $_SESSION['location'] = $location;
    $_SESSION['stype']  = $stype;
    header("location:../Services/hdisplay.php");
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
    <title>Hostel Search</title>
</head>

<body>
    <img class="backg" src="images/5.png">
    <img class="logo" src="images/logo.png">
    <div class="container">
        <div class='login-container'>
            <form action="hostel.php" method="POST">
                <img class="avatar" src="images/undraw_quite_town_mg2q.svg">
                <h2>Search Your Desired place to live</h2>
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
                    <h5>Duration</h5>
                    <input class="input" type="text" >
                </div>
                </div> -->
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-venus-mars"></i>
                    </div>
                    <div class="dropdown">
                        <h5>Genre</h5>

                        <select class="input">
                            <div class="dropdown-content">
                                <option value="">
                                </option>
                                <option value="BMW" name="genre"> Girls
                                </option>
                                <option value="Mercedes" name="genre"> Boys
                                </option>


                            </div>
                        </select>
                    </div>
                </div>

                <!-- <a class="link" href="/forget.html">Forgot Password?</a> -->
                <input class="btn" type="submit" value="Submit">
                <!-- <a class="reg" target="_blank" href="www.google.com">REGISTER</a> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/man.js"></script>
</body>

</html>