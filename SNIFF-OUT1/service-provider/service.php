<?php

include 'login/_dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY-SERVICES</title>
    <link rel="stylesheet" href="service.css">
</head>

<body>
    <img class="backg" src="images/3.png">
    <img class="loginimage" src="images/logop.png"><a href="" class="service"><b>MY SERVICES</b></a>



    <?php
    session_start();
    $_SESSION['loggedin'] = true;
    $email = $_SESSION['email'];

    $password =  $_SESSION['password'];

    $id =  $_SESSION['id'];
    $sql = "Select name from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $name = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($name)) {
        $pname =  $row['name'];
    }
    $sql = "Select sname from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $sname = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($sname)) {
        $ssname =  $row['sname'];
    }
    $sql = "Select stype from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $stype = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($stype)) {
        $sstype =  $row['stype'];
    }
    $sql = "Select location from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $location = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($location)) {
        $loc =  $row['location'];
    }
    $sql = "Select shortbio from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $bio = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($bio)) {
        $sb =  $row['shortbio'];
    }
    $sql = "Select contact from servicepro where email='$email' AND password = '$password' AND id='$id'";
    $ctc = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ctc)) {
        $contact =  $row['contact'];
    }
    echo         "<div class='container'>
                  <div class='heading'><b>WELCOME </b>" .$pname ." </div>
                  <div class='sname'><b>Your service name is $ssname</b></div>
                  <div class='stype'><b>It is a $sstype</b></div>
                  <div class='location'><b>Location:- $loc</b></div>
                  <div class='shortbio'>$sb</div>
                  <div class='contact'><a href=''>contact info:- $contact</a></div>
                  <br>
                  <div class='UPDATE'><a href='update.php'>CLICK HERE FOR UPDATING DATA</a></div>
                  <h3>*PLEASE ENSURE THAT ALL THE FIELDS ARE MANDATORY*</h3>

                  </div>";

    ?>

</body>

</html>