
<?php 
include("header.php");
 ?>

    <!DOCTYPE html>
<html>
    <head>
        <title>BarOnWheels - Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>

        <!-- ICON PACK CDN IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head><body>
<div class="master">
        <div class="banner">
            <div class="left-column">
                

        <!--  SEARCH BOX //// LAST EDIT: SAHEJ TULI  -->
<a href="search.php">
<div class="search-box">
    <ion-icon name="search-outline"></ion-icon>
    <input type="text" placeholder="Search for products...">
</div></a>

<h1><span class="auto-input"></span></h1>
<h3>Delivered to you, within minutes.</h3>
<br>

<p> <span>BarOnWheels offers a rich e-commerce shopping experience with personalized content, 
    competitive and transparent pricing,<br> and an unrivaled selection.</span><br><br>
   Get 15% off your first order! Terms & Conditions apply.</p>

       <div class="btn">
<a href="store.php"><button type="button">Start Shopping<i class="fas fa-arrow-right"></i></button></a>
<a href="about.php"><button type="button">Learn More<i class="fas fa-arrow-right"></i></button></a>

            </div>

           <br><br><br>
            <div class="social">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                <a href="#"><ion-icon name="logo-pinterest"></ion-icon></a>
                <a href="#"><ion-icon name="logo-behance"></ion-icon></a>
                <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
            </div>
  
            </div>
        
                <div class="right-column">
                    <img src="images/feature.gif">
                </div>

    
            </div>
            
            <!-- DOWN BUTTON TO OFFERS SECTION WITH JS-->
            <div class="down-btn">
               <img src="icons/down.png" onClick="document.getElementById('offers').scrollIntoView();" > 
                </div>
                

        </div>
        <br><br><br>

        <br><br><br><br>
        <div class="section1">
            <img src="banners/50salebanner.gif">
            <br><br><br>            <br><br><br>

                    </div>
                    <br>


        <!--- FEATURED PRODUCTS -->

                    <div class="small-container" id="offers">
                        <img src="icons/trending.png" height="70px">
                        <h2 class="title">TRENDING NOW</h2>

                        <div class="row">
                            <div class="col-4">
                                <a href="orange_cacao.php">   <img src="featured_products/1.png"> </a>
                                    <a href="orange_cacao.php">  <h4> Orange & Cacao Gin (750ml.) </h4> </a>
                                <div class="rating">
                               <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$34.99</sd>$29.74</p>
                                    <div class="btn-store">
                                   <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                   <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="gordons_premium_pink.php">  <img src="featured_products/2.png"> </a>
                                    <a href="gordons_premium_pink.php">  <h4> Gordon's Premium Pink (750ml.) </h4> </a>
                                <div class="rating">
                               <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$15.99</sd>$13.59</p>
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="blue_moon_belgian_white.php">  <img src="featured_products/3.png"> </a>
                              <a href="blue_moon_belgian_white.php">   <h4> Blue Moon Belgian White (6ct.) </h4> </a>
                                <div class="rating">
                                  <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$9.99</sd>$7.99</p>
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="corona.php">  <img src="featured_products/4.png"> </a>
                                    <a href="corona.php">   <h4> Corona Extra (6ct.) </h4> </a>
                                <div class="rating">
                                  <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$7.99</sd>$6.39</p>
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-container">
                        <div class="row">
                            <div class="col-4">
                                <a href="bumbu_xo.php">   <img src="featured_products/5.png"> </a>
                                    <a href="bumbu_xo.php">  <h4>Bumbu XO (750ml.) </h4> </a>
                                    
                                </h4>
                                <div class="rating">
                               <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$44.99</sd>$34.99</p>
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="hennessy_vs_cognac.php"> <img src="featured_products/6.png"> </a
                                <a href="hennessy_vs_cognac.php">  <h4> Hennesy VS Cognac (750ml.) </h4> </a>
                                <div class="rating">
                               <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$39.99</sd>$31.99</p>
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="silver_patron.php">  <img src="featured_products/7.png"> </a>
                                    <a href="silver_patron.php">  <h4> Silver Patron (750ml.) </h4> </a>
                                <div class="rating">
                                  <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$29.99</sd>$17.99</p> 
                                    <div class="btn-store">
                                        <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="jack_daniels.php"> <img src="featured_products/8.png"> </a>
                                <a href="jack_daniels.php"> <h4> Jack Daniel's Tennesse (750ml.) </h4> </a>
                                <div class="rating">
                                  <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                    <img src="icons/star-h.png">
                                    <p><sd>$24.99</sd>$17.49</p>
                                    <div class="btn-store">
                                     <a href="checkout.php"><button><i class="fas fa-dollar-sign"></i>Buy Now</button></a>
                                        <a href="cart.php"><button><i class="fas fa-shopping-cart"></i>Add to Cart</button></a>                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- CONTACT FORM -->
<section class="contact-form-index">
<div class="contact-heading">
<h1> Get in Touch</h1>
<p> Use the contact form below to get in touch! We usually reply within 24 hours.</p>

<form action="userinformation.php" method="post">
    <input type="text" required name="user" placeholder="Your Full Name"/>
    <input type="email" required name="email" placeholder="Your E-Mail Address"/>
    <textarea name="message" required placeholder="Type your message here....."></textarea>
    <button class="contact-form-btn" type="submit">Send Message</button>
</form>
</div>
</section>

<!-- CONTACT FORM ENDS -->

    <!--- FOOTER --> 
<?php include("footer.php"); ?>
        
<!-- SCRIPTS -->

<!-- DARK / LIGHT MODE -->

<script>
    var icon = document.getElementById("icon");

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
}

</script>


    <!-- TYPED CDN & JAVASCRIPT CODE -->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Beer", "Whiskey", "Tequila", "Vodka", "Rum", "Gin" ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>


        
    </body>
</html>