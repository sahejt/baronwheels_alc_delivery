<?php 
include("header.php");
 ?>
<html>
    <head>
        <title>BoW - Absolut Vodka</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
<div class="store-navigator">
 <h2><a href="store.html">Store</a> / <a href="vodka.html">Vodka</a> / <sp>Absolut Vodka (750ml.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/vodka/vodka1.png">
  </div>
  <div class="product-desc">
    

    <h1>Absolut Vodka (750ml.)</h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Absolut Vodka is a brand of vodka, produced near Åhus, in southern Sweden. Absolut is a part of the French group Pernod Ricard. Pernod Ricard bought Absolut for €5.63 billion in 2008 from the Swedish state. Absolut is one of the largest brands of spirits in the world and is sold in 126 countries</h4> 
   <h3>$14.99</h3><br>

   <div class="product-options">
      <p> Product Quantity: </p>
      <input type="number" value="1"><br><br>
      <p> Gift Wrapping: </p>

   <select>
     <option> None </option>
     <option> Golden Mesh Bag </option>
   </select>

  </div>
    <br><br>
    <div class="btn">
      <a href="checkout.html"><button>Buy Now</button></a>
      <a href="cart.html"><button>Add to Cart</button></a>
  </div>
  </div>
</div>
</product-card>

<div class="store-navigator">
  <h2>Rating & Reviews</h2>
 </div>
<reviews>
<div align="center" class="reviews">
<div class="rating-p">
<img src="icons/star-h.png">
<img src="icons/star-h.png">
<img src="icons/star-h.png">
<img src="icons/star-h.png">
<img src="icons/star-h.png">
<h3> 0.0 out of 5.0</h3>
<h4>No Reviews yet.</h4> 

<br><br><br><br>
<h4> Submit a Review:</h4>
<form>
<input type="text"><br>
<button class="not-selected">Submit</button>
</form>
</div>

</div>
</reviews>

<!--- FOOTER -->
<footer class="footer">
<div class="l-footer">
<h1>
<img src="icons/baronwheelsdark.png" height="40px"></h1><br><br>
<p>
    BarOnWheels offers a rich e-commerce shopping experience with personalized content, competitive and transparent pricing,
    and an unrivaled selection.
    <br><br>
    Managed & Created by Team Mafia.
         </div>
<ul class="r-footer">
<li>
  <h2>
Social</h2>
<ul class="box">
<li><a href="#">Facebook</a></li>
<li><a href="#">Twitter</a></li>
<li><a href="#">Pinterest</a></li>
<li><a href="#">LinkedIn</a></li>
</ul>
</li>
<li class="features">
  <h2>
Navigation</h2>
<ul class="box h-box">
<li><a href="index.html">Home</a></li>
<li><a href="store.html">Store</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="help.html">Help & Support</a></li>
<li><a href="login.html">Log In</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="pro.html">Join Crown</a></li>

</ul>
</li>
<li>
  <h2>
Legal</h2>
<ul class="box">
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Certifications</a></li>
</ul>
</li>
</ul>
<div class="b-footer">
<p>
Handcrafted with ♥ by Team Mafia. All Rights Reserved. </p>
</div>
</footer>


</body>
</html>