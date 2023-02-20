<?php 
include("header.php");
 ?>

<html>
    <head>
        <title>BarOnWheels - Store</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
       
        <div class="store-selector">
        <a href="search.php"><div class="search-box-store">
          <ion-icon name="search-outline"></ion-icon>
          <input type="text" placeholder="Search for products...">
        </div></a>
  

        <h2> Store </h2>
        <ul>
          <li><p><a href="store.php">All Products</a></p></li>
          <li><p><a href="beer.php"><sp>Beer</sp></a></p></li>
          <li><p><a href="whiskey.php">Whiskey</a></p></li>
          <li><p><a href="vodka.php">Vodka</a></p></li>
          <li><p><a href="tequila.php">Tequila</a></p></li>
          <li><p><a href="rum.php">Rum</a></p></li>
          <li><p><a href="gin.php">Gin</a></p></li>

        </ul>
        <select class="select1">
          <option>Price Range</option>
          <option>Below $9.99</option>
          <option>$10.00 - $24.99</option>
          <option>$25.00 - $49.99</option>
          <option>$49.99 - $99.99</option>
          <option>$100.00 - $249.99</option>
          <option>$250.00 - $999.99</option>
          <option>Above $1,000.00</option>

    
        </select>

        <select class="select2">
          <option>Sort By</option>
          <option>Sort by Popularity</option>
          <option>Sort by Relevance</option>
          <option>Price: High to Low</option>
          <option>Price: Low to High</option>
    
        </select>
        </div>

    <br><br><br><br><br><br>

    <div class="small-container">

        <div class="row">
          <div class="col-4">
           <a href="blue_moon_belgian_white.php"><img src="store_products/beer/beer3.png"></a> 
            <a href="blue_moon_belgian_white.php"><h4>Blue Moon Belgian White (6ct.)</h4></a> 
            <div class="rating">
                <img src="icons/star-h.png">
                <img src="icons/star-h.png">
                <img src="icons/star-h.png">
                <img src="icons/star-h.png">
                <img src="icons/star-h.png">
                <p><sd>$9.99</sd>$7.99</p>
                <div class="btn-store">
                    <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                    <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                 </div>
            </div>
        </div>

            <div class="col-4-store">
              <a href="bud_light.php"><img src="store_products/beer/beer2.png"></a>
              <a href="bud_light.php"> <h4>Bud Light (6ct.)</h4></a>
              <div class="rating">
              <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <p>$9.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4-store">
              <a href="budweiser.php"><img src="store_products/beer/beer1.png"></a>
              <a href="budweiser.php"><h4>Budweiser (6ct.)</h4></a>
                <div class="rating">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p>$7.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4">
              <a href="corona.php"><img src="store_products/beer/beer4.png"></a>
              <a href="corona.php"><h4>Corona Extra (6ct.)</h4></a>
              <div class="rating">
              <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <img src="icons/star-h.png">
                  <p><sd>$7.99</sd>$6.39</p>
                  <div class="btn-store">
                      <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                      <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                   </div>
              </div>
          </div>
    </div>
    </div>


<br><br><br>
<!-- NEWSLETTER SUBSCRIBE FORM -->

<div class="newsletter"><br><br>
  <form action="subscription.php" class="newsletter-form" method="post">
   <h2> Subscribe to get latest Offers, Discounts & Deals!</h2>
   <input class="email-newsletter" name="email" type="email" placeholder="Enter your E-mail address here!">
   <button type="submit" class="submit-newsletter" align="center">Subscribe</button>
   </form> <br>
</div>
<br><br><br>

          <!-- NEWSLETTER SUBSCRIBE FORM ENDS -->

    <!--- FOOTER -->
    <?php include("footer.php"); ?>
