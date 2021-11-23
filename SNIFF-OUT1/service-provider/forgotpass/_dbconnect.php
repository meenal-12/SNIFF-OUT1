<?php
$sever = "localhost";
$username = "root";
$password = "";
$database = "users0210";

$conn = mysqli_connect($sever,$username,$password,$database);
if($conn){
    
}
else{
    die("Error".mysqli_connect_error());
}
?>

