<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BoW - Don Pilar</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
       
<div class="store-navigator">
 <h2><a href="store.html">Store</a> / <a href="tequila.html">Tequila</a> / <sp>Don Pilar (750ml.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/tequila/tequila2.png">
  </div>
  <div class="product-desc">
    

    <h1>Don Pilar (750ml.)</h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Mexico- Crafted from 100% Blue Agave sourced from Don Pilar's ranches, this award-winning tequila is aged for 24 months in new American Oak barrels. The nose offers toasty oak and fruit aromas with butterscotch notes. The palate is round, lush and smooth.</h4> 
<h3>$134.99</h3>
   <div class="product-options">
      <p> Product Quantity: </p>
      <input type="number" value="1"><br><br>
      <p> Gift Wrapping: </p>

   <select>
     <option> None </option>
     <option> Golden Mesh Bag </option>
   </select>

  </div>
    <br><br><br><br>
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
<?php include("footer.php"); ?>
