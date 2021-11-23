<?php
include '_dbconnect.php';
session_start();
$location = $_SESSION['location'];
$stype = $_SESSION['stype'];
$sql = "Select * from `servicepro` where location like '%$location%' AND stype like '%$stype%'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hdisplay.css">
    <title>List</title>
</head>

<body style="background-color: #fff3e2;">
    <div class="search">Search Results</div>

    <?php

    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='container'>
           <h3>$row[sname]</h3>
           <div><img src='https://images.pexels.com/photos/1662159/pexels-photo-1662159.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' alt='Error'></div>
           <p>$row[shortbio]</p>
           <div class='data'>
           <div >$row[location]</div>
           <div class='inner'>$row[contact]</div>
           <div class='inner'>Available</div></div>
           </div>";
    }


    ?>

</body>

</html>