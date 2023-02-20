<?php
$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"baronwheels_db");

$cardname = $_POST['cardname']; 
$cardnumber = $_POST['cardnumber']; 
$expirydate = $_POST['expirydate']; 
$cvc = $_POST['cvc']; 

$query = "INSERT INTO `cardinfo` (`cardname`,`cardnumber`,`expirydate`,`cvc`) VALUES ('$cardname','$cardnumber','$expirydate','$cvc')";

mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>BoW - Thank You!</title>
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
    <ion-icon name="checkmark-circle-outline"></ion-icon><h1> Your order has been placed. </h1>
    <div class="btn" align="center">
    <a href="store.php"><button> Continue Shopping<i class="fas fa-arrow-right"></i></button></a></div>
</div></div><br>

</body>
</html>