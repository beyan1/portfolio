<?php
//include db connection

include 'config.php';

if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    // insert data
    mysqli_query($conn,"INSERT INTO `contacts`( `name`, `phone`, `email`, `message`) VALUES ('$name','$email','$phone','$message')");
    
    header("Location:index.php");

}
    ?>