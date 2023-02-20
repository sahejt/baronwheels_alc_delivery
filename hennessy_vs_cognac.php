<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BoW - Hennessy Very Special Cognac</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
       
<div class="store-navigator">
 <h2><a href="store.php">Store</a> / <a href="whiskey.php">Whiskey</a> / <sp>Hennessy Very Special Cognac (750ml.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/whiskey/whiskey3.png">
  </div>
  <div class="product-desc">
    

    <h1>Hennessy VS Cognac (750ml.)</h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Hennessy has created extraordinary cognacs since 1765 and Hennessy Very Special represents the Tasting Committee’s unique expertise. 
    Through the nose, Hennessy V.S brings together an intense and fruity character with pleasantly oaky notes. When savored, powerful flavors suggest grilled almonds, supported by lively notes reminiscent of fresh grapes.</h4> 
   <h2><sd>$39.99</sd>$31.99</h2><br>

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



</body>
</html>