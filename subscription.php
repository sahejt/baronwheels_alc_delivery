<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"baronwheels_db");

$email = $_POST['email']; 
$query = "INSERT INTO `subscribeform` (`email`) VALUES ('$email')";

mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>BoW - Request Submitted</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>

        <!-- ICON PACK CDN IONICONS -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="logo-message-sent" align="center">
<a href="index.php"> <img src="icons/logo.png"></a>
    <div class="message-sent" align="center">
    <ion-icon name="happy-outline"></ion-icon><h1> Thanks for Subscribing! </h1>
    <div class="btn" align="center">
    <a href="index.php"><button> Continue<i class="fas fa-arrow-right"></i></button></a></div>
</div></div><br>

</body>
</html>