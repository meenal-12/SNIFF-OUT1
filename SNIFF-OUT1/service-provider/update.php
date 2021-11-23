<?php
    $success = false;
include 'login/_dbconnect.php';
     session_start();
     
     $email = $_SESSION['email'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
     
     $hname = $_POST["hname"];
     
     $htype = $_POST["htype"];
     $loc = $_POST["loc"];
     $bio = $_POST["bio"];
     $ctc = $_POST["ctc"];
   


     $sql = "UPDATE servicepro
             SET `sname` = '$hname',`stype` = '$htype',`location` = '$loc',`shortbio` = '$bio',`contact` = '$ctc'
             WHERE `email` = '$email'";
     $result = mysqli_query($conn,$sql);
     if($result){
         $success = true;
     }
     else{
       
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE</title>
  <link rel="stylesheet" href="update.css">
</head>

<body>
  <?php
   
   $_SESSION['loggedin'] = true;
   $email = $_SESSION['email'];
   if($success){
    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have updated the services.
    
    </div>';
}

  ?>
  <img class="backg" src="images/3.png">
  <img class="loginimage" src="images/logop.png"><a class="service"><b>UPDATE YOUR SERVICES</b></a>

  <form action="update.php" class="form " method="Post">
    <div class="hostelname">
      <label for="exampleInputhostelname" >HOSTEL NAME</label>
      <input type="text" class="form-control" id="hostelname" name="hname">
    </div>

    <div class="hosteltype">
      <label for="exampleInputhosteltype" >HOSTEL TYPE</label>
      <input type="text" class="form-control" id="hosteltype" name="htype">
    </div>

    <div class="hostellocation">
      <label for="exampleInputlocation" >LOCATION</label>
      <textarea name="loc" cols="40" rows="5"></textarea>
      
    </div>
    <div class="shortbio">
      <label for="exampleInputshortbio" >SHORT-BIO</label>
      <textarea  name="bio" cols="40" rows="5"></textarea>
      
    </div>
    <div class="contact">
      <label for="exampleInputcontact" >CONTACT-US</label>
      <input type="text" class="form-control" id="contact" name="ctc">

    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>