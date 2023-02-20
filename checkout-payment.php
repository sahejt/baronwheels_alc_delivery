<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"baronwheels_db");

$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$address = $_POST['address']; 
$city = $_POST['city']; 
$state = $_POST['state']; 
$zipcode = $_POST['zipcode']; 
$instructions = $_POST['instructions']; 

$query = "INSERT INTO `checkoutdelivery` (`fname`,`lname`,`email`,`phone`,`address`,`city`,`state`,`zipcode`,`instructions`) VALUES ('$fname','$lname','$email','$phone','$address','$city','$state','$zipcode','$instructions')";

mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BarOnWheels - Payment</title>
  <link rel="stylesheet" href="checkout.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Payment Information</header>
    <form action="checkout-payment-confirm.php" method="post">

      <div class="dbl-field">
        <div class="field">
          <input type="text" name="cardname" required placeholder="Enter Cardholder's Name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="cardnumber" required placeholder="Enter Card Number">
          <i class="material-icons">credit_card</i>
        </div>
      </div>
      <div class="dbl-field">
      <div class="field">
          <input type="text" name="expirydate" required placeholder="Enter Expiration Date">
          <i class="material-icons">calendar_today</i>
        </div>

        <div class="field">
          <input type="text" name="cvc" required placeholder="Enter Security Code (CVV/C)">
          <i class="material-icons">password</i>
        </div>
      </div>
      <div class="button-area">
      <button type="submit" class="submitbtn">Confirm Order</button>
        <span></span>
      </div>
    </form>
  </div>

</body>
</html>
