<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BarOnWheels - Checkout</title>
  <link rel="stylesheet" href="checkout.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    
  <div class="wrapper">
    <header>Delivery Information</header>
    <form action="checkout-payment.php" method="post">

      <div class="dbl-field">
        <div class="field">
          <input type="text" name="fname" required placeholder="Enter your first name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="lname" required placeholder="Enter your last name">
          <i class='fas fa-user'></i>
        </div>
      </div>

      <div class="dbl-field">
      <div class="field">
          <input type="text" name="email" required placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>

        <div class="field">
          <input type="text" name="phone" required placeholder="Enter your phone number">
          <i class='fas fa-phone'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
            <input type="text" name="address" required placeholder="Enter your Street address">
            <i class='fas fa-home'></i>
          </div>
  
          <div class="field">
            <input type="text" name="city" required placeholder="Enter your City">
            <i class="material-icons">apartment</i>
          </div>
        </div>

        <div class="dbl-field">
          <div class="field">
              <input type="text" name="state" required placeholder="Enter your State">
              <i class="material-icons">near_me</i>
            </div>
    
            <div class="field">
              <input type="text" name="zipcode" required placeholder="Enter your Zip Code">
              <i class="material-icons">tag</i>
            </div>
          </div>

      <div class="message">
        <textarea required placeholder="Special Instructions" name="instructions"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit" class="submitbtn">Continue to Payment</button>
        <button class="cancelbtn" type="button">Cancel</button>

        <span></span>
        
      </div>
      
    </form>
  </div>

</body>
</html>
