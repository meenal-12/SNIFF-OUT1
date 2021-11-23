<?php
include '_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $name = $_POST["name"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    $sql = "INSERT INTO `data` (`email`, `name`, `text`) VALUES ('$email', '$name', '$text');";
    $result = mysqli_query($conn, $sql);
    

  
    } 
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/styles.css"> </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('images/6.png' ) " ;>

    <div class="container ">
        <div class="address details ">

            <div class="content ">

                <div class="right-side ">
                    <div class="topic-text ">Send us a message</div>
                    <p>If you have any work from us or any types of queries related to our website, you can send us message from here. It's our pleasure to help you.</p>
                    <form action="index.php" method="post">
                        <div class="input-box ">
                            <input type="text " placeholder="Enter your name " name="name">
                        </div>
                        <div class="input-box ">
                            <input type="email " placeholder="Enter your email " name="email">
                        </div>
                        <div class="input-box message-box ">
                            <input type="text " placeholder="Enter your Message " name="text">

                        </div>
                        <div class="button">
                            <input class="btn btn-primary" type="submit" value="Submit">

                        </div>
                    </form>
                    <div class="email details">

                        <i class="fas fa-envelope"></i>
                        <span class="text-one">Sniffout@gmail.com</span>
                        <i class="whitespace fas fa-phone-alt"></i>
                        <span class="text-one ">+91 87979 45682</span><br>
                        <i class="fas fa-envelope"></i>
                        <span class="text-two">info.sniffout@gmail.com</span>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>