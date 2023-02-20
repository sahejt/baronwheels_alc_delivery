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

<!-- ICON LIBRARIES IONIC.IO -->

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
          <li><p><a href="store.php"><sp>All Products</sp></a></p></li>
          <li><p><a href="beer.php">Beer</a></p></li>
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

    <br><br>
    <div class="btn-sec">

        <a href="store.php"><button class="not-selected">1</button></a>
          <a href="store_page2.php"><button class="selected"> 2 </button></a>
      </div>
      <br><br>

      <div class="small-container">

        <div class="row">
            <div class="col-4-store">
              <a href="grey_goose.php">  <img src="store_products/vodka/vodka3.png"> </a> 
                <a href="grey_goose.php">    <h4>Grey Goose (750ml.)</h4> </a>
                <div class="rating">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p>$24.99</p>
                    <div class="btn-store">
                   <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                   <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                </div>
                </div>
            </div>

            <div class="col-4">
              <a href="hennessy_vs_cognac.php">  <img src="store_products/whiskey/whiskey3.png"> </a>
              <a href="hennessy_vs_cognac.php">  <h4>Hennessy VS Cognac (750ml.)</h4> </a>
                <div class="rating">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p><sd>$39.99</sd>$31.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4-store">
              <a href="jw_black_label.php">   <img src="store_products/whiskey/whiskey2.png"> </a>
                <a href="jw_black_label.php">   <h4>JW Black Label (750ml.)</h4> </a>
                <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p>$27.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4">
              <a href="jack_daniels.php">  <img src="store_products/whiskey/whiskey4.png"> </a>
              <a href="jack_daniels.php">   <h4>Jack Daniel’s Tennesse (750ml.)</h4> </a>
                <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p><sd>$24.99</sd>$17.49</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
              <a href="orange_cacao.php">  <img src="store_products/gin/gin1.png"> </a>
                <a href="orange_cacao.php"> <h4>Orange & Cacao Gin (750ml.)</h4> </a>
                <div class="rating">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p><sd>$34.99</sd>$29.74</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4-store">
              <a href="plantation.php">  <img src="store_products/rum/rum1.png"> </a>
                <a href="plantation.php">  <h4>Plantation (750ml.)</h4> </a>
                <div class="rating">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p>$49.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4-store">
              <a href="ron_zacapa.php">  <img src="store_products/rum/rum4.png"> </a>
                <a href="ron_zacapa.php">   <h4>Ron Zacapa (750ml.)</h4>  </a>
                <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p>$99.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>

            <div class="col-4">
              <a href="silver_patron.php"> <img src="store_products/tequila/tequila4.png"> </a>
                <a href="silver_patron.php"><h4>Silver Patron (750ml.)</h4> </a>
                <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <p><sd>$29.99</sd>$17.99</p>
                    <div class="btn-store">
                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="small-container">
      <div class="row">
          <div class="col-4-store">
            <a href="stolichnaya_elit.php">   <img src="store_products/vodka/vodka4.png"> </a>
              <a href="stolichnaya_elit.php">  <h4>Stolichnaya Elit (750ml.)</h4> </a>
              <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                  <p>$39.99</p>
                  <div class="btn-store">
                      <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                      <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                   </div>
              </div>
          </div>

          <div class="col-4-store">
            <a href="tesla.php">  <img src="store_products/tequila/tequila1.png"> </a>
              <a href="tesla.php">  <h4>Tesla (750ml.)</h4> </a>
              <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                  <p>$1,099.00</p>
                  <div class="btn-store">
                      <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                      <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                   </div>
              </div>
          </div>

          <div class="col-4-store">
            <a href="glenlivet_archive.php"> <img src="store_products/whiskey/whiskey1.png"> </a>
              <a href="glenlivet_archive.php">  <h4>The Glenlivet Archive (750ml.)</h4> </a>
              <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                  <p>$259.99</p>
                  <div class="btn-store">
                      <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                      <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                   </div>
              </div>
          </div>

          <div class="col-4-store">
            <a href="zafra.php">  <img src="store_products/rum/rum2.png"> </a>
              <a href="zafra.php">  <h4>Zafra (750ml.)</h4> </a>
              <div class="rating">
                <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                  <p>$55.99</p>
                  <div class="btn-store">
                      <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                      <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                   </div>
              </div>
          </div>
      </div>
  </div>


  <div class="btn-sec">

      <a href="store.php"><button class="not-selected">1</button></a>
        <a href="store_page2.php"><button class="selected"> 2 </button></a>
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


      <script>

        const icon = document.getElementById("icon");
      
      icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
      }
      
      </script>
      
    </body>
      </html>
      