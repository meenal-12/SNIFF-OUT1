<?php
include '_dbconnect.php';
$showAlert = false;
$showError = false;
$exist = false;
$exist1 = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $email = $_POST["email"];
     $password = $_POST["password"];
     $cpassword = $_POST["cpassword"];
     $sql = "Select * from users where email = '$email'";
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
      if($num >= 1){
         $exist1 = true;
       } 
else if($password == $cpassword){
       $sql = "Select * from users where password = '$password'";
       $result = mysqli_query($conn,$sql);
       $num = mysqli_num_rows($result);
       if($num >= 1){
         $exist = true;}
        else{
         $sql = "INSERT INTO `users` (`email`,`password`,`dt`)
         VALUES ('$email','$cpassword',current_timestamp())";
         $result = mysqli_query($conn,$sql);
         $showAlert = true;
        }
     }
else{
        $showError = true;
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

    
    <title>Register</title>
</head>
<body>
    <?php
    if($showAlert){
      echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are successfully registered and now you can login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="../login/"><b>Login</b></a>
            </div>';
      
    }
    if($exist){
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password already taken.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($exist1){
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> This e-mail is already Registered.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError)
    {
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Passwords do not match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <img class="backg" src="images/1.png" >
    <img class="registerimage" src="images/register.png">
    <div class="container">
        <div class='login-container'>
            <form action="index.php" method="post">
                <img class="avatar" src="images/undraw_profile_pic_ic5t.svg" >
                <h2>REGISTER</h2>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <!-- <h5>Email</h5> -->
                        <input class="input" type="email" placeholder="Enter your Email" name="email">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                    <!-- <h5>Password</h5> -->
                    <input class="input" type="password" placeholder="Enter your Password" name="password">
                    </div>
                </div>
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                    <!-- <h5>Password</h5> -->
                    <input class="input" type="password" placeholder="Re-Enter your Password" name="cpassword">
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Register</button>
           
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>