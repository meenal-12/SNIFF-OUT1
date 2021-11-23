<?php
include '_dbconnect.php';
$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){


     $email = $_POST["email"];
     $password = $_POST["password"];
     $sql = "UPDATE users
             SET `password` = '$password'
             WHERE `email` = '$email'";
     $result = mysqli_query($conn,$sql);
     if($result){
         $success = true;
     }
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Forget Password</title>
</head>
<body>
    <?php
      if($success){
          echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You have successfully changed the password.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <a href="../login">Login<a>
          </div>';
      }
    ?>
    <img class="backg" src="images/1.png" >
    <img class="forgetpassimage" src="images/forgetpass.png">
    <div class="container">
        <div class='login-container'>
            <form action="index.php" method="Post">
                <img class="avatar" src="images/undraw_profile_pic_ic5t.svg" >
                <h3>Create new password</h3>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input class="input" type="email" name="email">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                <div>
                    <h5>New Password</h5>
                    <input class="input" type="password" name="password">
                </div>
                </div>
            <!-- <a class="link" href="/forget.html">Forgot Password?</a> -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <a class="reg" target="_blank" href="www.google.com">REGISTER</a> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/man.js"></script>
</body>
</html>