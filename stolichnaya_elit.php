<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BoW - Stolichnaya Elit</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
        
<div class="store-navigator">
 <h2><a href="store.php">Store</a> / <a href="vodka.php">Vodka</a> / <sp>Stolichnaya Elit (750ml.)</sp> </h2>
</div>
<product-card>
<div class="container">
  <div class="product-img">
    <img src="store_products/vodka/vodka4.png">
  </div>
  <div class="product-desc">
    

    <h1>Stolichnaya Elit (750ml.)</h1>
    <div class="rating">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      <img src="icons/star-h.png">
      </div>

   <h4>Elit is carefully crafted using a centuries-old Russian recipe and a revolutionary freeze filtration process. The result is an exquisite product that sets a new standard for consumers and creates the entirely new ultra-luxury category among imported vodkas. To fully appreciate the handcrafted excellence and purity of its taste, Stolichnaya elit should only be served chilled, on ice or in traditional martinis with premium ingredients. Its creators frown upon mixing it with juices or other sweet concoctions that would mask or tarnish the quality of this superior vodka. 
    </h4> 
   <h3>$39.99</h3><br>

   <div class="product-options">
      <p> Product Quantity: </p>
      <input type="number" value="1"><br><br>
      <p> Gift Wrapping: </p>

   <select>
     <option> None </option>
     <option> Golden Mesh Bag </option>
   </select>

  </div>
  
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