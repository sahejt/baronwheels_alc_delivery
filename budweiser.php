<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BoW - Budweiser</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
        
<div class="store-navigator">
 <h2><a href="store.php">Store</a> / <a href="beer.php">Beer</a> / <sp>Budweiser (6ct.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/beer/beer1.png">
  </div>
  <div class="product-desc">
    

    <h1>Budweiser (6ct.)</h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Budweiser beer is a medium-bodied, American-style lager beer. Brewed with high quality barley malt, a blend of premium hop varieties, fresh rice and filtered water, this American beer is crisp and full of flavor. Budweiser beer has 5% ABV and contains 145 calories and zero grams of fat per serving.</h4> 
   <h3>$7.99</h3><br>

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
      <a href="checkout.php"><button>Buy Now</button></a>
      <a href="cart.php"><button>Add to Cart</button></a>
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
