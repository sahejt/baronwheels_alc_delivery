<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BoW - Gordon's Premium Pink </title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
        
<div class="store-navigator">
 <h2><a href="store.php">Store</a> / <a href="gin.php">Gin</a> / <sp>Gordon's Premium Pink (750ml.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/gin/gin3.png">
  </div>
  <div class="product-desc">
    

    <h1>Gordon's Premium Pink (750ml.)  </h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Inspired by an original Gordon’s recipe from the 1880s, Gordon’s Pink is perfectly crafted to balance the refreshing taste of Gordon’s with the natural sweetness of raspberries and strawberries, with the tang of redcurrant served up in a unique blushing tone. Made using only natural fruit flavours to guarantee the highest quality real berry taste.   </h4> 
   <h2><sd>$15.99</sd>$13.59</h3>

   <div class="product-options">
      <p> Product Quantity: </p>
      <input type="number" value="1"><br><br>
      <p> Gift Wrapping: </p>

   <select>
     <option> None </option>
     <option> Golden Mesh Bag </option>
   </select>

  </div>
    <br><br><br>
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
