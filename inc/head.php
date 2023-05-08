<?php
require_once "controller-data.php";
require ('inc/config.php');


if(isset($_COOKIE['email'])&& isset($_COOKIE['password'])){

    $email=$_COOKIE['email'];
    $pass=$_COOKIE['password'];
}else
{
    $email="";
    $password="";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Royal Travels</title>
   <link rel="icon" type="image/x-icon" href="img/logo/royal.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/modal.css">
   <link rel="stylesheet" href="css/form.css">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="js/contact-us.js"></script>

   
</head>
<body>
<?php include ('inc/cookie.php'); ?>

