<?php
include '_dbconnect.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){


     $email = $_POST["email"];
     $password = $_POST["password"];
     $sql = "Select * from users where email='$email' AND password = '$password'";
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
     if($num >= 1){
         $login = true;
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['email']  = $email;
         header("location:../main/main.php");
     }
     else{
        $showError = "Invalid credentials";

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

    <title>Login</title>
</head>
<body>
    
<?php
    if($login){
      echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are successfully logged in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           
            </div>';
      
    }
    if($showError)
    {
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>Invalid Credentials.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <img class="backg" src="images/1.png" >><b>YOUR HOSTEL FINDER</b>
    <img class="loginimage" src="images/login.png"><a class="link1" href="../EMERGENCY-INFO/"><b>EMERGENCY INFO  </b></a><a class="link1" href="../service-provider/login"><b>  LOGIN AS SERVICE PROVIDER  </b></a>
   
    <div class="container">
        <div class='login-container'>
            <form action="index.php" method="post">
                <img class="avatar" src="images/undraw_profile_pic_ic5t.svg" >
                <h2>Welcome</h2>
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
             <a class="link" href="../forgotpass">Forgot Password?</a>
              <div class="bin">
             <button type="submit" class="btn btn-primary">LOGIN</button>
</div>
             <a class="reg" target="_blank" href="../register">REGISTER</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>